<?php
namespace App\Controllers;
use App\Models\BookModel;
use CodeIgniter\Controller;

class CrudController extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();
		
		// dislpay records
		$model = new BookModel();
		$books = $model->orderBy('id','DESC')->findAll();
		$data['books'] = $books;

		$data['session'] = $session;
		return view('crud/crudPage', $data);
	}

	public function create()
	{
		//  insert records
		$session = \Config\Services::session();
		helper('form');
		$data=[];
		if ($this->request->getMethod()=='post') {
			$input = $this->validate([ 
				# code validation 
				'title'=>'trim|required|min_length[5]',
				'author'=>'trim|required|min_length[5]',
				'isbn'=>'trim|required|min_length[5]|integer',
				'mobile'=>'trim|required|numeric|is_unique[books.mobile]|max_length[10]|min_length[10]',
			]);
			
			if ($input == 'true') {
				# code validation success.Save to DB
				$model = new BookModel();
				$model->save([
					'title' => $this->request->getPost('title'),
					'isbn' =>  $this->request->getPost('isbn'),
					'author' =>  $this->request->getPost('author'),
					'mobile' =>  $this->request->getPost('mobile'),
				]);
				$session->setFlashdata('success', 'record added successfully');
				return redirect()->to('/CrudController/index');
			} else {
				# validation code error...
				$data['validation']= $this->validator;
			}
		}
		
		return view('crud/create', $data);
	}
	
	public function edit($id)
	{	
		// Fetch record as per selected id
		$session = \Config\Services::session();
		helper('form');
		$data=[];

		$model = new BookModel(); // select * from table where id=$id;
		$book = $model->where('id', $id)->first();		//print_r($book);

		if (empty($book)) {
			$session->setFlashdata('fail', 'Record not found');
			return redirect()->to('/CrudController/index');
		}
		$data['book'] = $book;

		// update records as per selected id
		if ($this->request->getMethod()=='post') {
			$input = $this->validate([ 
				# code validation 
				'title'=>'trim|required|min_length[5]',
				'author'=>'trim|required|min_length[5]',
				'isbn'=>'trim|required|min_length[5]|integer',
				'mobile'=>'trim|required|numeric|is_unique[books.mobile]|max_length[10]|min_length[10]',
			]);
			
			if ($input == 'true') {
				# code validation success.Save to DB
				$model = new BookModel();
				$model->update($id, [
					'title' => $this->request->getPost('title'),
					'isbn' =>  $this->request->getPost('isbn'),
					'author' =>  $this->request->getPost('author'),
					'mobile' =>  $this->request->getPost('mobile'),
				]);
				$session->setFlashdata('success', 'record updated successfully');
				return redirect()->to('/CrudController/index');
			} else {
				# validation code error...
				$data['validation']= $this->validator;
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
		$session->setFlashdata('success', 'record deleted successfully');
		return redirect()->to('/CrudController/index');
		
	}
	
}