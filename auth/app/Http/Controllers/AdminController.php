<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showlist() {
        $users = User::paginate(10);

        return view('userlist', ['users' => $users]);
    }
}
