<?php 

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
	
	protected $table='users';
	protected $primaryKey = 'id';
	protected $DBGroup='default';
	protected $useTimestamps = true;
	protected $allowedFields = ['firstname','lastname','contact','email','password'];
	//protected $validationRules = [];
	//protected $validationMessages = [];


}


?>