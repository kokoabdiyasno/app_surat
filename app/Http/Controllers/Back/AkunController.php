<?php

namespace App\Http\Controllers\Back;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->id == 1) {
            $user = User::get();
        } else {
            $user = User::whereId(auth()->user()->id)->get();
        }

        return view('back.akun.index', [
            'users' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|max:255|min:5|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8'
        ]);

        $data['password'] = bcrypt($request->password);
        User::create($data);

        return back()->with('success', 'Data Akun Berhasil Ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|max:255|min:5|email|unique:users,email,'.$id,
            'password' => 'nullable|min:8|confirmed',
            'password_confirmation' => 'nullable|required_with:password|min:8'
        ]);

        if ($data['password'] != '') {
           User::find($id)->update([
                'name'  => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'remember_token' => Str::random(60)
            ]);
        } else {
           User::find($id)->update([
                'name'  => $data['name'],
                'email' => $data['email']
            ]);
        }

        return back()->with('success', 'Data Akun Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();

        return back()->with('success', 'Data Akun Berhasil Dihapus');
    }
}
