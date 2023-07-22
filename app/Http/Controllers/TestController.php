<?php

/**
 * (ɔ) GrCOTE7 - 2001-2023.
 */

namespace App\Http\Controllers;

class TestController extends Controller
{
	public function __invoke()
	{
		echo 'oki21abc';

		return inertia('Test');
	}
}
