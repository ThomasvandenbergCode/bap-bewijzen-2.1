<?php
namespace App\Http\Controllers;
use App\GrauwKleren;
use App\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use PhpParser\Node\Expr\Array_;
class CMSController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
//        Using paginate to not show everything, displays the screen
        $kleren = GrauwKleren::paginate(5);
        return view('cms.cms', ['kleren' => $kleren]);
    }
//    Cms Page
    public function edit($id){
//        Get the id and showing all the info from the clothing with that id
        $kleding = GrauwKleren::find($id);
//        dd($kleding->images);
        return view('cms.edit', ['kleding' => $kleding]);
    }
//    Handle edit
    public function handleForm(Request $request,$id)
    {
//        Validate the request
        $geldigeData = $request->validate([
            'name' => '',
            'description' => '',
            'info' => '',
            'large' => '',
            'medium' => '',
            'small' => '',
            'oldPrice' => '',
            'price' => '',
            'photos[]' => ''
        ]);
//       Fill the form with the info you got from the edit
        $grauwKleren = GrauwKleren::find($id);
        $grauwKleren->fill([
            'name' => $geldigeData['name'],
            'description' => $geldigeData['description'],
            'info' => $geldigeData['info'],
            'large' => $geldigeData['large'],
            'medium' => $geldigeData['medium'],
            'small' => $geldigeData['small'],
            'oldPrice' => $geldigeData['oldPrice'],
            'price' => $geldigeData['price'],
        ]);
//        Save
        $grauwKleren->save();
//        If there was a picture included, also save it, if not, then don't do anything
        $photos = $request->file('photos');
        if(!empty($photos)){
//            $grauwKleren->fill(['photo' => $geldigeData['photo']]);
            $targetFolder = public_path('photos');
            foreach($photos as $photo){
                $newFilename = str_random(12).'.'.$photo->getClientOriginalExtension();
                $photo->move($targetFolder , $newFilename);
                $name = $photo->getClientOriginalName();
                $image = new Image();
                $image->filename = $newFilename;
                $image->name = $name;
                $grauwKleren->images()->save($image);
            }
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
//    Add function
    public function handleToevoegen(Request $request,GrauwKleren $grauwKleren){
//        Validate the request
        $geldigeData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'info' => 'required',
            'large' => '',
            'medium' => '',
            'small' => '',
            'oldPrice' => '',
            'price' => '',
            'photo[]' => ''
        ]);
//        Fill the info into the database
        $grauwKleren->fill([
            'name' => $geldigeData['name'],
            'description' => $geldigeData['description'],
            'info' => $geldigeData['info'],
            'large' => $geldigeData['large'],
            'medium' => $geldigeData['medium'],
            'small' => $geldigeData['small'],
            'oldPrice' => $geldigeData['oldPrice'],
            'price' => $geldigeData['price'],
        ]);
//        Save it
        $photos = $request->file('photos');
        $grauwKleren->save();
//      Save the picture
        $targetFolder = public_path('photos');
        foreach($photos as $photo){
            $newFilename = str_random(12).'.'.$photo->getClientOriginalExtension();
            $photo->move($targetFolder , $newFilename);
            $name = $photo->getClientOriginalName();
            $image = new Image();
            $image->filename = $newFilename;
            $image->name = $name;
            $grauwKleren->images()->save($image);
        }
        return redirect()->route('toevoegenShow')->with('formData', $geldigeData);
    }
    public function showToevoegen(){
        return view('cms.toevoegenConfirm');
    }
//    Delete section
    public function delete(GrauwKleren $kleren){
//        Delete the image from the local folder and the database
        $targetFolder = public_path('photos');
        foreach($kleren->images as $image){
            $imagePath = $targetFolder . '/' . $image->filename;
            if(File::exists($imagePath)){
                File::delete($imagePath);
            }
            $image->delete();
        }
//       Delete the clothing item
        $kleren->delete();
        return redirect()->route('cms');
    }
//    Delete specific image
    public function deleteOne($id){
//        Find the specific image and delete it
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