<?php

namespace App\Controllers;

class LoginController extends BaseController
{
	public function index()
	{
		//return view('crud/crudPage');
	}
    
    public function login()
	{
		return view('login/login');
	}

    public function signUp()
	{
		return view('login/signUp');
	}
    
	
}