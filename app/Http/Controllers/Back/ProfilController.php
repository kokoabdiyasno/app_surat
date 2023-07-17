<?php

namespace App\Http\Controllers\Back;

use App\Models\Profil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.profil.index', [
            'profils' => Profil::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'status' => 'required',
            'gambar' => 'nullable|file|image|max:3120|mimes:png,jpg,jpeg,webp|mimetypes:image/jpg,image/jpeg,image/png,image/webp',
        ]);

        $oriImage = $request->file('gambar');

        if ($request->gambar) {
            $imageResize = Image::make($oriImage)->encode('webp', 95);

            if ($imageResize->width() > 380) {
                $imageResize->resize(780, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }

            // simpan nama gambar yang telah di resize
            $data['gambar'] = uniqid() . '.webp';

            $imageResize->save(public_path('/back/img/'  . $data['gambar']));

            // temukan gambar yang dihapus
            if (File::exists(public_path('/back/img/'  . $request->gambarLama))) {
                unlink(public_path('/back/img/'  . $request->gambarLama));
            }

        } else {
            $data['gambar'] = $request->gambarLama;
        }


        Profil::find($id)->update($data);

        return back()->with('success', 'Data Profil Berhasil Diubah');
    }
}
