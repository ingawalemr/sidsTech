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
		$data = [];
		$session = session();

		if ($this->request->getMethod()=='post') {
			$input = $this->validate([
					'name' => 'trim|required',
					'email' => 'trim|required|valid_email',
					'subject' => 'trim|required|min_length[10]|max_length[100]',
				]);

			if ($input == 'true') {
				# email send code here...
				$email = \Config\Services::email();
				$email->setFrom('ingawalemr12@gmail.com', 'sidsTech Digital');
			//$email->setFrom('you@example.com', 'Your Name', 'returned_emails@example.com');
				$email->setTo('ingawalemr12@yahoo.com');
				$email->setCC('ingawalemr12@gmail.com');
				$email->setBCC('ingawalemr12@gmail.com');


				$name = $this->request->getPost('name');
				$mail = $this->request->getPost('email');
				$sub = $this->request->getPost('subject');
				$msg = $this->request->getPost('message');
				
				$message = "Name : ".$name."<br>";
				$message .= "Email-id : ".$mail."<br>";
				$message .= "Message Given : ".$msg."<br>";

				$email->setSubject($sub);
				$email->setMessage($message);
				$email->send();

				$session->setFlashdata('success','Thanks, message has been sent successfully');
				return redirect()->to('/UserController/contact');

			} else {
				# error code here
				$data['validation'] = $this->validator;
      			return view('user/contactus', $data);
			}
		}

	return view('user/contactus');
	}


}
?>