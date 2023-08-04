<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;

class RegisterController extends Controller
{
	public function create()
	{
		return view('auth.register.create');
	}

	public function store()
	{
		$attributes = request()->validate([
			'name' => 'required|max:255',
			'username' => 'required|min:3|max:255|unique:users,username',
			'email' => 'required|email|max:255|unique:users,email',
			'password' => 'required|min:7|max:255'
		]);

		$attributes[ 'password' ] = bcrypt($attributes[ 'password' ]);

		$user = User::create($attributes);

		auth()->login($user);

		return redirect('/')->with('success', 'Your account has been created.');
	}
}
