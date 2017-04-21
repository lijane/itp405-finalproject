<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
	public function index(){
		return view('login');
	}

	public function login(){
		$loginWasSuccessful = Auth::attempt([
			'email' => request('email'),
			'password' => request('password')
			]);

		if ($loginWasSuccessful){
			return redirect('/admin')
			->with('successLogIn','You have successfully logged in!');
			;
		}

		else{
			return redirect('/login')
			->withInput()
			->with('errorLogIn','Incorrect login credentials. Please try again.');
		}
	}

	public function logout(){
		Auth::logout();
		return redirect('login')
		->with('successLogOut','You have successfully logged out!');
		;
	}
}
