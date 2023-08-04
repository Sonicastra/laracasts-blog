<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
	public function index()
	{
		$latestPost = Post::latest()->first();
		$category = $latestPost->category->name;

		return view('app', [
			'latestPost' => $latestPost,
			'category' => $category
		]);
	}
}
