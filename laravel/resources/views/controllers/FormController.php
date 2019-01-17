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
                'firstname' => 'required',
                'middlename' => '',
                'lastname' => 'required|min:2',
                'email' => 'email',
                'geboortedatum' => 'date',
                'website' => 'url',
            ]
        );
        return redirect()->route('registration.confirmation')->with('formData', $geldigeData);
    }


    public function confirmationPage()
    {
        return view('confirmation');
    }
}

