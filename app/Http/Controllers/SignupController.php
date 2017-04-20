<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Validator;

class SignupController extends Controller
{
    public function index() {
    	return view('signup');
    }

    public function signup(Request $request){

    	$validation = Validator::make($request->all(),[
			'email' => 'required',
			'password' => 'required',
			// 'password_confirmation' => 'required'
		]);

		if ($validation->passes()){
	    	$user = new User();
	    	$user->email = request('email');
	    	$user->password = Hash::make(request('password'));
	    	$user->save();

			return redirect("/login")
				->with('successSignUp','Your account has successfully been created!');
			}

		else {
			return redirect('/signup')
				->withInput()
				->withErrors($validation);
		}

    }
}
