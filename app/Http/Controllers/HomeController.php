<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pengguna.home', [
            'surats' => Surat::with('User')->whereUserId(auth()->user()->id)->latest()->get()
        ]);
    }

    public function show(string $id)
    {
        return view('pengguna.show', [
            'surat' => Surat::find($id)
        ]);
    }
}
