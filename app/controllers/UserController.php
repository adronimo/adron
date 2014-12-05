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
	public function getDelete($user_id)
	{
		$user = User::find($user_id);
		if(is_null($user))
		{
			return Redirect::to('users');
		}
		$user->delete();
		return Redirect::to('users');
	}
	public function getUpdate($user_id)
	{
		$user = User::find($user_id);
		if(is_null($user))
		{
			return Redirect::to('users');
		}
		return View::make('users.update')->with('user',$user);
	}
	public function postUpdate($user_id)
	{
		$user = User::find($user_id);
		if(is_null($user))
		{
			return Redirect::to('users');
		}
		$user->real_name = Input::get('real_name');
		$user->email = Input::get('email');

		if(Input::has('password'))
		{
			$user->password =  Input::get('password');
		}
		$user->save();
		return Redirect::to('users');
	}
}