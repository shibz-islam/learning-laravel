<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHomepage()
	{
		return View::make('homepage');
	}
	public function add_org_first()
	{
		return View::make('add_organization_first');
	}
	public function my_xero_home()
	{
		return View::make('my_xero_home');
	}

	
	public function show_members()
	{
		$u = User::all();
		return $u;
	}
	

	
}
