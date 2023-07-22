<?php

/**
 * (ɔ) GrCOTE7 - 2001-2023.
 */

namespace App\Http\Controllers;

class TestController extends Controller
{
	public function index()
	{
		$a = 123;

		return inertia('Test', compact('a'));
	}

	public function create()
	{
		return inertia('CreateUser');
	}
}
