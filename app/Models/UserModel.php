<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['username', 'password', 'nama', 'no_hp', 'role_id'];
    protected $useTimestamps = false;
}
