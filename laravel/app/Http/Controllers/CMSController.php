<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CMSController extends Controller
{
    public function index() {
        $persoonsgegevens = \DB::select('select * from persoonsgegevens');

        return view('persoonsgegevens')->with('persoonsgegevens', $persoonsgegevens);
    }
}
