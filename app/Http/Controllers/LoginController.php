<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
	public function create()
	{
		return view('auth.login.create');
	}

	public function store()
	{
		$attributes = request()->validate([
			'email' => 'required|email',
			'password' => 'required'
		]);

		if ( !auth()->attempt($attributes) ) {
			return back()
				->withInput()
				->withErrors([
					'password' => 'Credentials not found!'
				]);
		}

		session()->regenerate();

		return redirect('/')->with('success', 'You logged in successfully!');
	}

	public function destroy()
	{
		auth()->logout();

		return redirect('/')->with('success', 'Successfully logged out!');
	}
}
