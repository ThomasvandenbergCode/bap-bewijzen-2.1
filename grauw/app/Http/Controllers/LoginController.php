<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;


class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function checklogin(Request $request)
    {

        $this->validate($request,[
            'email'          => 'required|email',
            'password'       => 'required|alphaNum|min:3'

        ]);



        $user_data = array(
            'email'     =>  $request->get('email'),
            'password'  =>  $request->get('password')
        );
        $remember = $request->get('remember');

        if(Auth::attempt($user_data, $remember))
        {
            // set the remember me cookie if the user checks the box

//            if(!empty($remember))
//            {
//                Auth::login(Auth::user()->id, true);
//            }

            return redirect('admin/succeslogin');
        }
        else
        {
            return back()->with('error', 'Email en wachtwoord komen niet overeen.');
        }
    }

    function succeslogin()
    {
        return view('admin/succeslogin');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/home');
    }

}
