<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'full_name', 'email', 'created_at'];

    // Get the single demo user
    public function getDemoUser()
    {
        return $this->first();
    }
}