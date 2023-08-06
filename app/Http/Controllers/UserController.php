<?php

/**
 * (ɔ) GrCOTE7 - 2001-2023.
 */

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function create()
	{
		$users = User::all();

		return inertia('CreateUser', compact('users'));
	}

	public function store(Request $request)
	{
		$validatedData = $request->validate([
			'name'     => 'required|max:255',
			'email'    => 'required|email|unique:users,email',
			'password' => 'required',
		]);

		$user = User::create($validatedData);

		return redirect()->back()
			->with('user')
			->with('success', 'User created.');
	}
}
