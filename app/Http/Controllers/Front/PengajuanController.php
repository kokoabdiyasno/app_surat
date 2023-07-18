<?php

namespace App\Http\Controllers\Front;

use App\Models\Surat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\PemberitahuanPengajuanEmail;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;

class PengajuanController extends Controller
{
    public function index($tipe)
    {
        $tipe = request()->segment(2); // Mengambil segment setelah "pengajuan/"

        if ($tipe == 'belum-menikah') {
            $judul_surat = 'Belum Menikah';
            $tipe = 1;
        } elseif($tipe == 'ktp-domisili') {
            $judul_surat = 'KTP Sementara/Domilisi';
            $tipe = 2;
        } else {
            $judul_surat = 'Kematian';
            $tipe = 3;
        }

        return view('front.pengajuan.index', [
            'judul' => $judul_surat,
            'tipe' => $tipe
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'          => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'email'         => 'required',
            'no_telepon'    => 'required',
            'alamat'        => 'required',
            'upload_kk'     => 'required|file|image|max:3120|mimes:png,jpg,jpeg|mimetypes:image/jpg,image/jpeg,image/png',
            'berkas_pendukung' => 'nullable|file|image|max:3120|mimes:png,jpg,jpeg|mimetypes:image/jpg,image/jpeg,image/png',
            'tipe'       => 'required',
            'catatan'       => 'nullable',
            'hasil_surat'       => 'nullable',
        ]);

        $upload_kk = $request->file('upload_kk');
        $berkas_pendukung = $request->file('berkas_pendukung');

        if ($request->upload_kk) {
            $imageResize = Image::make($upload_kk)->encode('webp', 95);

            if ($imageResize->width() > 380) {
                $imageResize->resize(780, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }

            // simpan nama upload_kk yang telah di resize
            $data['upload_kk'] = uniqid() . '.webp';

            $imageResize->save(public_path('/back/img/'  . $data['upload_kk']));

        }

        if ($request->berkas_pendukung) {
            $imageResize = Image::make($berkas_pendukung)->encode('webp', 95);

            if ($imageResize->width() > 380) {
                $imageResize->resize(780, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }

            // simpan nama berkas_pendukung yang telah di resize
            $data['berkas_pendukung'] = uniqid() . '.webp';

            $imageResize->save(public_path('/back/img/'  . $data['berkas_pendukung']));

        }

        // email admin
        Mail::to('desakertajaya2023@gmail.com')->send(new PemberitahuanPengajuanEmail($data));

        Surat::create($data);

        return back()->with('success', 'Data Pengajuan Surat Anda Berhasil Dikirim, Mohon menunggu konfirmasi Admin');
    }
}
