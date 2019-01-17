<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function adduser() {
        return view('admin.adduser');
    }

    public function checknewuser(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'

        ]);
        User::create([
            'name'              => $data['name'],
            'email'             => $data['email'],
            'password'          => Hash::make($data['password']),
            'remember_token'     => str_random(10),
        ]);
    }
}
