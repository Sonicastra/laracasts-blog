<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;

class RegisterController extends Controller
{
	public function create()
	{
		return view('register.create');
	}

	public function store()
	{
		$attributes = request()->validate([
			'name' => 'required|max:255',
			'username' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:7|max:255'
		]);

		$attributes[ 'password' ] = bcrypt($attributes[ 'password' ]);

		User::create($attributes);

		return redirect('/');
	}
}
