<?php

class UserController extends BaseController {

	public function signup()
	{
		return View::make('signup');
	}
	public function signup_validation()
	{
		$validation = Validator::make(Input::all(),User::$rules);
		if($validation->fails())
		{
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}
		
		$u = new User;
		$u->first_name = Input::get('first_name');
		$u->last_name = Input::get('last_name');
		$u->email = Input::get('email');
		$u->phone_number = Input::get('phone_number');
		$u->business_location = Input::get('business_location');
		$activation_status = Input::get('activation_status');
		if($activation_status=="")
		{
			$activation_status = "no";
		}
		$u->activation_status = $activation_status;
		$u->password = Hash::make(Input::get('password'));
		$u->save();

		return User::all();
	}

	public function login_page()
	{
		if(Auth::check())
		{
			return Redirect::to('admin');
		}
		return View::make('login');
	}

	public function login_check()
	{
		$validation = Validator::make(Input::all(),User::$rules_for_login);
		if($validation->fails())
		{
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}
		else
		{
			if (Auth::attempt(Input::only('email','password')))
			{
				return "Welcome ".Auth::user()->first_name;
			}
			return Redirect::to('login')->with('flash_error', 'Your username/password combination was incorrect.')->withInput();          

		}

		
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('login');
	}





}
