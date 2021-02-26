<?php
namespace App\Models;

use CodeIgniter\Model;

class ImageModel extends Model{
    
    //protected $db;
    protected $table = 'images';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'image'];

    //protected $createdField = 'created_at';
   // protected $updatedField = 'updated_at';
}
