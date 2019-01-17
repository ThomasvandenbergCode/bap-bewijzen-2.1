<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function showPage()
    {
        return view('oefeningen');

    }

    public function showPageSchemas()
    {
        return view('schemas');

    }
    public function showPageJoudoel()
    {
        return view('joudoel');

    }
    public function showPageVragen()
    {
        return view('vragen');

    }
    public function showPageVoeding()
    {
        return view('voeding');

    }
    public function showPageSuplementen()
    {
        return view('suplementen');

    }
    public function showPageContact()
    {
        return view('contact');

    }

}



