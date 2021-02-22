<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['username', 'email', 'pass','Cpass'];
    protected $createdField = 'created_at';
}               

function Is_already_register($id)
{
    $query = $this->db->table('user');
    $query->where('oauth_id', $id);
    if($query->countAllResults() == 1)
    {
    return true;
    }    else    {
    return false;
    }
}

function Update_user_data($data, $id)
 {
    $query = $this->db->table('user');
    $query->where('oauth_id', $id);
    $query->update($data);
    if($this->db->affectedRows() == 1)
    {
    return true;
    }    else    {
    return false;
    }
 }

 function Insert_user_data($data)
 {
    $query = $this->db->table('user');
    $query->insert($data);
    if($this->db->affectedRows() == 1)
    {
    return true;
    }    else    {
    return false;
    }
 }

?>