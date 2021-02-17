<?php
namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model{
    
    //protected $db;
    protected $table = 'books';
    protected $allowedFields = ['title', 'isbn', 'author','mobile'];

    protected $createdField = 'created_at';
   // protected $updatedField = 'updated_at';
}

?>