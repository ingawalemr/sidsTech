<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ImageModel;

class ImageController extends BaseController {

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
			'image' =>  $imageName,
			];

		$model->save($data);

		$session->setFlashdata('success','Thanks, image saved successfully');
		return redirect()->to('/image');
		//return view('image/create');
	}

	public function createMultipleImage()
	{
		return view('image/createMultiImg');
	}

	public function storeMultipleImg()
	{
		/*
		$files = $this->request->getFileMultiple('image');
		foreach ($files as $file) {
			$file->move('images/', $file->getRandomName());
		}
		or below code is also correst
		*/

		$files = $this->request->getFileMultiple('image');
		foreach ($files as $file) {
			if ($file->isValid() && !$file->hasMoved() && $file->getSize() > 0) 
			{
				echo "Image Name :".$file->getName();echo "<br>";
				echo "Image Random Name: ".$file->getRandomName();echo "<br>";
				echo "Image Size :".$file->getSize();echo "<br>";
				echo "Image Extension :".$file->getExtension();echo "<br>........";echo "<br>";		
				$file->move('./public/assets/img', $file->getRandomName());
			}
		}
		return redirect()->to('/image');
	}
}