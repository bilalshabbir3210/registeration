<?php
namespace App\Controllers;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\Header ;
use App\Models\UsersModel;

class Home extends BaseController
	{
	protected $Auth;
	protected $dd;
	public function index()
		{
		$data =['title' => 'Register'];
		return view('register' , $data);
	}

	public function getRegistered(){
		
		//Accessing private key from headers
		$data = $this->request->getHeaders('header');
		$this->Auth = $data['Authorization'];
		
		//exclude authorized key
		$exploedData = explode(':' , $this->Auth);
		//user & password details
		$fetched = substr($exploedData[1], 6);
		
		$credentials = base64_decode($fetched);
		$credentials = explode(':' , $credentials);
		
		if($credentials[0] =='admin' AND $credentials[1]=="admin123"){

			//get data from ajax request 
			$requestBody=$this->request->getBody('password');
			//decode json object into php array
			$requestBody = json_decode($requestBody , true);

			if($requestBody['firstname'] !='' AND $requestBody['email'] !='' AND $requestBody['number'] !='' AND $requestBody['password'] !=''){

				//check email already exist or not	
				$checkExist = ['email'=>$requestBody['email']];
				//define object of Users Model Class  
				$Users = new UsersModel();
				$isExist = $this->db->table('users')->where($checkExist)->get();
				$isExist = $isExist->getResult();				
					
				if(count($isExist) < 1){

					$toInsert = [
					'firstname'=> $requestBody['firstname'],
					'lastname'=> $requestBody['lastname'],
					'contact'=> $requestBody['number'],
					'email'=> $requestBody['email'],
					'password' => password_hash($requestBody['password'], PASSWORD_DEFAULT)
					];
		
					$isInserted = $Users->insert($toInsert);

					if($isInserted){

						$response =['state'=>1 ,'message'=>'You are registered successfully.'];
						return json_encode($response);
					}else{
						$response =['state'=>0 ,'message'=>'Oops , Some Server Error..'];
						return json_encode($response);
					}//Server Error Check End

				}else{

					$response =['state'=>0,'message'=>'Email Already Exist'];
					return json_encode($response);
				}//Email Already exit check end

			}else{

				$response =['state'=>0,'message'=>'Some fields are missing'];
				return json_encode($response);
			}//Missing field check end
			
		}else{
			$response =['state'=>0 ,'message'=>'Un-Authorized User'];
			return json_encode($response);
		}//Authorization check end
		
	
	
}
}