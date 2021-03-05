<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MobileModel;

class MobileController extends BaseController
{
	
	public function index()
	{
		return view('image/index');
	}

	public function create()
	{
		return view('image/create');
	}

	public function store()
	{
		$session = \Config\Services::session();
		$model = new ImageModel();

		$file = $this->request->getFile('image');
		if ($file->isValid() && ! $file->hasMoved())
		{
			$imageName = $file->getRandomName();
            $file->move('images/', $imageName);
		}

		$data = [
			'name' => $this->request->getPost('name'),
			'price' => $this->request->getPost('price'),
			'status' => $this->request->getPost('status'),
			'description' => $this->request->getPost('description'),
			'image' =>  $imageName,
			];

		$model->save($data);

		$session->setFlashdata('success','Thanks, image saved successfully');
		return redirect()->to('/image');
		//return view('image/create');
	}
}

?>