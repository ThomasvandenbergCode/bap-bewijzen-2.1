<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return "FORM AFHANDELING";
    }

    public function handleForm(Request $request)
    {


        $geldigeData = $request->validate(
            [
                'title' => 'required',
                'description' => '',
                'photo' => 'required|min:2',
            ]
        );
        return redirect()->route('registration.confirmation')->with('formData', $geldigeData);
    }


    public function confirmationPage()
    {
        return view('confirmation');
    }
}

