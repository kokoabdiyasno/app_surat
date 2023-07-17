<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function index($status)
    {
        return view('front.profil.index', [
            'profil' => Profil::whereStatus($status)->first()
        ]);
    }
}
