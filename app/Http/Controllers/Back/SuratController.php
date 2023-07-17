<?php

namespace App\Http\Controllers\Back;

use App\Models\Surat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\KonfirmasiPengajuanEmail;
use Illuminate\Support\Facades\Mail;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($tipe)
    {
        $tipe = request()->segment(2); // Mengambil segment setelah "pengajuan/"

        if ($tipe == 'belum-menikah') {
            $judul_surat = 'Belum Menikah';
            $tipe_value = 1;
        } elseif ($tipe == 'ktp-domisili') {
            $judul_surat = 'KTP Sementara/Domilisi';
            $tipe_value = 2;
        } else {
            $judul_surat = 'Kematian';
            $tipe_value = 3;
        }

        return view('back.surat.index', [
            'judul' => $judul_surat,
            'surats' => Surat::whereTipe($tipe_value)->latest()->get()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('back.surat.detail', [
            'surat' => Surat::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        // jika ada upload hasil_surat
        if ($request->hasFile('hasil_surat')) {

            $request->validate([
                'hasil_surat' => 'required|file|max:3128|mimes:pdf|mimetypes:application/pdf'
            ]);

            $file = $request->file('hasil_surat');
            $fileName = $data['hasil_surat'] = uniqid() . '.pdf';;
            $file->move(public_path('/back/pdf/'), $fileName);

            $data = Surat::find($id);
            $data->update(['status' => $request->status, 'hasil_surat' => $fileName]);

            Mail::to($data['email'])->send(new KonfirmasiPengajuanEmail($data));

            return back()->with('success', 'Data Surat Berhasil Dikonfirmasi...');
        } else {
            // jika hanya konfirmasi status

            $request->validate([
                'alasan_ditolak' => 'required_if:status,1'
            ]);

            $data = Surat::find($id);

            if ($request->alasan_ditolak) {
                $data->update(['status' => $request->status, 'alasan_ditolak' => $request->alasan_ditolak]);
            } else {
                $data->update(['status' => $request->status]);
            }

            Mail::to($data['email'])->send(new KonfirmasiPengajuanEmail($data));

            return back()->with('success', 'Data Surat Berhasil Dikonfirmasi...');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Surat::find($id)->delete();

        return back()->with('success', 'Data Surat Berhasil Dihapus...');
    }
}
