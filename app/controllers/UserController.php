<?php

class UserController extends BaseController
{
	public function getIndex()
	{
		$users = User::all();
		return View::make('users.index') -> with('users', $users);
	}

	public function getCreate()
	{
		return View::make('users.create');
	}
	public function postCreate()
	{
		$user = new User;
		$user->real_name =Input::get('real_name');
		$user->email =Input::get('email');
		$user->password =Input::get('password');
		$user->save();
		return Redirect::to('users');
	}
}