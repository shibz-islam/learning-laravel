<?php

class HomeController extends BaseController {

	
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


	
}
