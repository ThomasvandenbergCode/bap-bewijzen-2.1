<?php
namespace App\Http\Controllers;
use App\GrauwKleren;
use App\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use PhpParser\Node\Expr\Array_;
class KlerenController extends Controller
{
    public function homepage()
    {
//        Giving the homepage all the info from the database
        $kleren = GrauwKleren::all();
        return view('homepage', ['kleren' => $kleren]);
    }
}