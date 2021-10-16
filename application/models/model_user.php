<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_user extends CI_Model
{
	public function __construct(){
		parent::__construct();

	}
	public function getData(){
		$url = 'https://reqres.in/api/users?page=1';
		$get =  $this->curl->simple_get($url); 

		return $get;
	}
	public function getUser($id){
		$url = 'https://reqres.in/api/users/'.$id;
		$get =  $this->curl->simple_get($url); 
		return $get;
	}
	public function deleteData($id){
		$url = 'https://reqres.in/api/users/'.$id;
		$get =  $this->curl->simple_delete($url); 

		return $get;
	}
	public function editData($id){
		$url = 'https://reqres.in/api/users/'.$id;
		$get =  $this->curl->simple_put($url); 
		return $get;
	}
	public function login($email,$user){
		$url = 'https://reqres.in/api/login';
		$data = [ 'email'=>'eve.holt@reqres.in', 'password'=>'cityslicka'];
		$get =  $this->curl->simple_post($url, $data, array(CURLOPT_BUFFERSIZE => 10));
		return $get;

	}
}
?>