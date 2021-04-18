<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class VideoController extends BaseController {

	public function index()
	{
		return view('image/createVideo');
	}

	public function storeVideo()
	{
		$video = $this->request->getFile('video');
			if ($video->getSize() > 0) 
			{
				$video->move('images/video/', $video->getRandomName());
				//$file->move('./images/video', $file->getRandomName());
			}
		return redirect()->to('/image');
	}

}