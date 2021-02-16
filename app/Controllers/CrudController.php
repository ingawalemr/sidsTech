<?php

namespace App\Controllers;

class CrudController extends BaseController
{
	public function index()
	{
		return view('crud/crudPage');
	}

	public function about()
	{
		return view('aboutus');
	}

	
}