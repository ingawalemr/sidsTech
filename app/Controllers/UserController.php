<?php

namespace App\Controllers;

class UserController extends BaseController
{
	public function index()
	{
		return view('user/userPage');
	}

	public function about()
	{
		return view('user/aboutus');
	}

	public function contact()
	{
		return view('user/contactus');
	}

	public function login()
	{
		return view('user/login');
	}
}