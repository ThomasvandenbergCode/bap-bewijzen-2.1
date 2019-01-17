<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showPasswordForm()
    {
        return view('profile.edit_password_form');
    }
    public function handlePasswordForm(Request $request)
    {
        return "yeet";
    }
}
