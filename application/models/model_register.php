<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_register extends CI_Model
{
	public function __construct(){
		parent::__construct();

	}
	public function regis($data){
		$url = 'https://reqres.in/api/register';
		$data = [ 'email'=>'eve.holt@reqres.in', 'password'=>'cityslicka'];
		$get =  $this->curl->simple_post($url, $data, array(CURLOPT_BUFFERSIZE => 10));
		
		return $get;
	}
}
?>