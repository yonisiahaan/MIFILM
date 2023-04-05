<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:100|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // hash password
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);


        return redirect('/login')->with('success', 'Yeay, Akun kamu berhasil dibuat. Silahkan Login');
    }
}
