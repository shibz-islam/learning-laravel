<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	public $timestamps = false;

	public static $rules = [
		'first_name'=>'required',
		'last_name'=>'required',
		'email'=>'required|email|unique:users',
		'phone_number'=>'required',
		'business_location'=>'required',
		'activation_status'=>'required'
	];
	public static $rules_for_login = [		
		'email'=>'required',
		'password'=>'required'
	];

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}
