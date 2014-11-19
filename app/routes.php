<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('admin', function()
{
	return "Admin Page";
	
})->before('auth');

Route::get('/', 'HomeController@showHomepage');
Route::get('members','HomeController@show_members');
Route::resource('sessions','SessionsController');


//Home page
Route::get('/', 'HomeController@showHomepage');

// Sign Up
Route::get('signup','UserController@signup');
Route::post('signup_validation','UserController@signup_validation');

// Sign In
Route::get('login','UserController@login_page');
Route::post('login_check','UserController@login_check');

// Sign Out
Route::get('logout','UserController@signout');

// Add First Organization
Route::get('AddOrganization','HomeController@add_org_first');

// My Xero Home page
Route::get('MyDashboard','HomeController@my_xero_home');