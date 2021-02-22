<?php

namespace App\Controllers;

class UserController extends BaseController
{
	public function index()
	{
		return view('user/userPage');
	}
	public function upload()
	{
		if ($image = $this->request->getFile('photo')) { // validation success
			$input = $this->validate([
				'photo' => 'uploaded[photo]|max_size[photo,2024]|ext_in[photo,jpg,jpeg,png],'
			]);
			if ($input == 'true') {
				// file upload here
				if ($image->getSize() > 0 && $image->isValid()) {
					//echo $image->getName(); 	    echo "<br";
					// echo $image->getRandomName();   echo "<br";
					// echo $image->getSize();			echo "<br";
					// echo $image->getExtension();	echo "<br";	

					$image->move('./public/assets/img', $image->getRandomName());
					return redirect()->to('/UserController/index');
				}
			} else {
				//file upload error
				$data['validation'] = $this->validator;
				return view('user/userPage', $data);
			}
		}
		//return view('user/userPage');
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
