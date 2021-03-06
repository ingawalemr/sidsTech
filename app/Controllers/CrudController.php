<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\Controller;

class CrudController extends BaseController
{
	public function index()
	{
		$pager = \Config\Services::pager();//pagination
		$session = \Config\Services::session();
		$model = new BookModel();
		if (!empty($this->request->getGet('q'))) { //pagination
			$q = $this->request->getGet('q');
			$query = $model->Like('title', $q)->findAll(); //pass this query in view page
			$data = ['users' => $model->paginate(3), 'pager' => $model->pager];//pagination
			$data['query'] = $query;
			return view('crud/crudPage', $data);
		} else {
			/* fetch data, pagination old has been created
			 $books = $model->orderBy('id', 'DESC')->findAll(); // dislpay (fetch) records
			 $data = ['users' => $model->paginate(3), 'pager' => $model->pager];//pagination
			 $data['books'] = $books;
			 $data['session'] = $session;
			*/
			$data['books'] = $model->orderBy('id', 'DESC')->paginate(5);
			$data['pagination_link'] = $model->pager;
			$data['session'] = $session;
		}
		return view('crud/crudPage', $data);
	}

	public function create()
	{
		//  insert records
		$session = \Config\Services::session();
		helper('form');
		$data = [];
		if ($this->request->getMethod() == 'post') {
			$input = $this->validate([
				# code validation 
				'title' => 'trim|required|min_length[5]',
				'author' => 'trim|required|min_length[5]',
				'isbn' => 'trim|required|min_length[5]|integer',
				'mobile' => 'trim|required|numeric|is_unique[books.mobile]|max_length[10]|min_length[10]',
				'destination_name' => 'trim|required',
				'photo' => 'uploaded[photo]|max_size[photo,2024]|ext_in[photo,jpg,jpeg,png],'
			]);

			if ($input == 'true') {
				# code validation success.Save to DB
				$model = new BookModel();
				if ($image = $this->request->getFile('photo')) { // image upload
					if ($image->isValid() && ! $image->hasMoved())
					{
						$imageName = $image->getRandomName();
						$image->move('./public/assets/img/', $imageName);
					}
				$model->save([
					'title' => $this->request->getPost('title'),
					'isbn' =>  $this->request->getPost('isbn'),
					'author' =>  $this->request->getPost('author'),
					'mobile' =>  $this->request->getPost('mobile'),
					'destination_name' =>  $this->request->getPost('destination_name'),
					'photo' =>  $imageName,
				]);
					
				$session->setFlashdata('success', 'record added successfully');
				return redirect()->to('/CrudController/index');
				}
			} else {
				# validation code error...
				$data['validation'] = $this->validator;
			}
		}

		return view('crud/create', $data);
	}

	public function edit($id)
	{
		// Fetch record as per selected id
		$session = \Config\Services::session();
		helper('form');
		$data = [];

		$model = new BookModel(); // select * from table where id=$id;
		$book = $model->where('id', $id)->first();		//print_r($book);

		if (empty($book)) {
			$session->setFlashdata('fail', 'Record not found');
			return redirect()->to('/CrudController/index');
		}
		$data['book'] = $book;

		// update records as per selected id
		if ($this->request->getMethod() == 'post') {
			$input = $this->validate([
				# code validation 
				'title' => 'trim|required|min_length[5]',
				'author' => 'trim|required|min_length[5]',
				'isbn' => 'trim|required|min_length[5]|integer',
				'mobile' => 'trim|required|numeric|is_unique[books.mobile]|max_length[10]|min_length[10]',
				'destination_name' => 'trim|required',
				'photo' => 'uploaded[photo]|max_size[photo,2024]'
			]);

			if ($input == 'true') {
				# code validation success.Update to DB
				$model = new BookModel();
				if ($image = $this->request->getFile('photo')) 
				{ // image upload
					if ($image->isValid() && ! $image->hasMoved())
					{
						$imageName = $image->getRandomName();
						$image->move('./public/assets/img/', $imageName);
					}

				$model->update($id, [
					'title' => $this->request->getPost('title'),
					'isbn' =>  $this->request->getPost('isbn'),
					'author' =>  $this->request->getPost('author'),
					'mobile' =>  $this->request->getPost('mobile'),
					'destination_name' =>  $this->request->getPost('destination_name'),
					'photo' =>  $imageName,
				]);

				// if (file_exists('./public/assets/img/'.$book['photo'])) 
				// {
				// 	unlink('./public/assets/img/'.$book['photo']);
				// }

				$session->setFlashdata('success', 'record updated successfully');
				return redirect()->to('/CrudController/index');
				}
			} else {
				# validation code error...
				$data['validation'] = $this->validator;
			}
		}

		return view('crud/edit', $data);
	}

	public function delete($id)
	{
		// Fetch record as per selected id
		$session = \Config\Services::session();

		$model = new BookModel(); // select * from table where id=$id;
		$book = $model->where('id', $id)->first();		//print_r($book);
		if (empty($book)) {
			$session->setFlashdata('fail', 'Record not found');
			return redirect()->to('/CrudController/index');
		}

		// Delete record as per selected id
		$model = new BookModel();
		$model->delete($id);
		$session->setFlashdata('fail', 'Record deleted successfully');
		return redirect()->to('/CrudController/index');
	}
}
