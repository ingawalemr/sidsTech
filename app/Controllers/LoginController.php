<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class LoginController extends BaseController
{
	public function __construct() {
		helper(['form','url']);
		$this->UserModel = new UserModel();
		$session = \Config\Services::session();
	}
	public function index()
	{
		return view('login/login');
	}
    
	public function loginWithGoogle()
	{
		$session = \Config\Services::session();
		helper(['form','url']);
		
		include_once APPPATH . "libraries/vendor/autoload.php";
		$google_client = new \Google_Client();	//$google_client = new Google_Client();//object
		$google_client->setClientId('533341713562-jmkn04ujg3395pfnklduig8gkbtt6p0e.apps.googleusercontent.com'); //Define your ClientID
		$google_client->setClientSecret('JA7LsDh-vBhR4zO34Of7TIIe'); //Define Client Secret Key
				// $google_client->setRedirectUri(base_url().'/sidsTech'); 
		$google_client->setRedirectUri(base_url().'/LoginController/loginWithGoogle'); 
		$google_client->addScope('email');
	    $google_client->addScope('profile');
			//if($this->request->getVar('code')){
			//$token= $google_client->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
		
		if(isset($_GET['code'])) //code-query string parameter, google send it
		{ 
			$token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
			if(!isset($token['error'])) 
			{
				$google_client->setAccessToken($token['access_token']);
				$this->session->set('access_token', $token['access_token']);
				
				$google_service = new \Google_Service_Oauth2($google_client);//object->profile data
			  			//$google_service = new Google_Service_Oauth2($google_client);
			    $gdata = $google_service->userinfo->get();
				print_r($gdata);

				if($this->UserModel->Is_already_register($gdata['id']))
					{
						//update data
						$user_data = array(
						'username' => $dgdataata['username'],
						'email' => $gdata['email'],
						'pass'=> $gdata['pass'],
						'Cpass'=> $gdata['Cpass'],
						);
						$this->UserModel->Update_user_data($user_data, $gdata['id']);
					}
				else
					{
						//insert data
						$user_data = array(
						'oauth_id' => $gdata['id'],
						'username' => $gdata['username'],
						'email' => $gdata['email'],
						'pass'=> $gdata['pass'],
						'Cpass'=> $gdata['Cpass'],
						);
						
						$this->UserModel->Insert_user_data($user_data);
					}
					$this->session->set('user_data', $user_data);
					return redirect()->to('/LoginController/home');
			}
		}
		if (!$this->session->get('access_token')) {//session not set, means not login
				$gdata['loginButton'] = $google_client->createAuthUrl();
		}
		return view('login/login', $gdata);
	}
    
    public function login()
	{
		$model = new UserModel();
		$email =  $this->request->getVar('email'); //fetch email from table
		$login = $model->where('email', $email)->first();	
		
		if ($login !=null) { // login process
			if ($login['pass'] == $this->request->getVar('pass')) 
			{
				//echo "welcome ".$login['username'];

				$session = \Config\Services::session(); //or $session = session();
				$session->set('admin', $login['username']); //set session on about us page
				
				$session->setFlashdata('msg', 'Login successfully');	//show session flashdata
				return redirect()->to('/LoginController/home');
			}
			else
			{	 
				$session = \Config\Services::session($config);
				$session->setFlashdata('fail', 'Login failed, please check either email or password is incorrect');	//show session flashdata
				return view('login/login');
			}
		} 
		else
		{
			return view('login/login');
		}
	}

	public function home()
	{
		$session = session();
		if ($session->has('admin')) {
			return view('login/home');
		} else {
			return redirect()->to('/LoginController/login');// or return view('login/login');
		}
		
	}

	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to('/LoginController/login');// or return view('login/login');
	}

    public function signUp()
	{	
		$session = \Config\Services::session();
		helper('form');
		$data = [];
		if ($this->request->getMethod() == 'post' ) {
			//validation proceess
			$input = $this->validate([
				'username' => 'trim|required|min_length[5]|max_length[15]',
				'email' => 'trim|required|valid_email|is_unique[user.email]',
				'pass'  => 'trim|required|min_length[5]|max_length[10]',
				'Cpass'  => 'trim|required|matches[pass]',
			]);

			if ($input == 'true') {
				//validation success, process to save records in DB 
				$session = \Config\Services::session();
				$model = new UserModel();
				$model->save([
					'username' => $this->request->getPost('username'),
					'email' =>  $this->request->getPost('email'),
					'pass' =>  $this->request->getPost('pass'),
					'Cpass' =>  $this->request->getPost('Cpass'),
				]);
				$session->setFlashdata('msg', 'Registration done successfully');
				return redirect()->to('/LoginController/login');
			} else
			{
				//validation error
				$data['validation'] = $this->validator;
			}
		}
		return view('login/signUp', $data);
	}
    
	
}