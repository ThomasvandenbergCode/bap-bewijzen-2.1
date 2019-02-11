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
    public function homepage(){
        $kleren = GrauwKleren::all();

        return view('homepage', ['kleren' => $kleren]);
    }
    public function index(){
        $kleren = GrauwKleren::paginate(4);

        return view('cms.cms', ['kleren' => $kleren]);
    }
//    Cms Page
    public function edit($id){
        $kleding = GrauwKleren::find($id);
//        dd($kleding->images);
        return view('cms.edit', ['kleding' => $kleding]);
    }
//    Handle edit
    public function handleForm(Request $request,$id)
    {
        $geldigeData = $request->validate([
            'name' => '',
            'description' => '',
            'info' => '',
            'large' => '',
            'medium' => '',
            'small' => '',
            'price' => '',
            'photo' => ''
        ]);
        $grauwKleren = GrauwKleren::find($id);
        $grauwKleren->fill([
            'name' => $geldigeData['name'],
            'description' => $geldigeData['description'],
            'info' => $geldigeData['info'],
            'large' => $geldigeData['large'],
            'medium' => $geldigeData['medium'],
            'small' => $geldigeData['small'],
            'price' => $geldigeData['price'],

        ]);
        $grauwKleren->save();
        if(!empty($geldigeData['photo'])){
            $grauwKleren->fill(['photo' => $geldigeData['photo']]);
            $targetFolder = public_path('photos');
            $newFilename = str_random(12).'.'.$geldigeData['photo']->getClientOriginalExtension();
            $geldigeData['photo']->move($targetFolder , $newFilename);


            $name = $geldigeData['photo']->getClientOriginalName();
            $image = new Image();
            $image->filename = $newFilename;
            $image->name = $name;

            $grauwKleren->images()->save($image);
        }


        return redirect()->route('editShow')->with('formData', $geldigeData);
    }
    //Show page to make sure edit worked
    public function confirmationPage()
    {
        return view('cms.registeredit');
    }
//    Add section
    public function toevoegen(){
        return view('cms.toevoegen');
    }

    public function handleToevoegen(Request $request,GrauwKleren $grauwKleren){
        $geldigeData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'info' => 'required',
            'large' => '',
            'medium' => '',
            'small' => '',
            'price' => '',
            'photo' => ''
        ]);
        $grauwKleren->fill([
            'name' => $geldigeData['name'],
            'description' => $geldigeData['description'],
            'info' => $geldigeData['info'],
            'large' => $geldigeData['large'],
            'medium' => $geldigeData['medium'],
            'small' => $geldigeData['small'],
            'price' => $geldigeData['price'],
        ]);

        $grauwKleren->save();

        $targetFolder = public_path('photos');
        $newFilename = str_random(12).'.'.$geldigeData['photo']->getClientOriginalExtension();
        $geldigeData['photo']->move($targetFolder , $newFilename);


        $name = $geldigeData['photo']->getClientOriginalName();
        $image = new Image();
        $image->filename = $newFilename;
        $image->name = $name;

        $grauwKleren->images()->save($image);

        return redirect()->route('toevoegenShow')->with('formData', $geldigeData);
    }
    public function showToevoegen(){
        return view('cms.toevoegenConfirm');
    }

//    Delete section
    public function delete(GrauwKleren $kleren){
        $targetFolder = public_path('photos');
       foreach($kleren->images as $image){
           $imagePath = $targetFolder . '/' . $image->filename;
           if(File::exists($imagePath)){
               File::delete($imagePath);
           }
           $image->delete();
       }
       $kleren->delete();
        return redirect()->route('cms');
    }

    public function deleteOne($id){
        $image = Image::find($id);
        $targetFolder = public_path('photos');
        $imagePath = $targetFolder . '/' . $image->filename;

        if(File::exists($imagePath)){
            File::delete($imagePath);
        }
        $image->delete();
//
        return view('cms.delete', ['image' => $image]);
    }
}
