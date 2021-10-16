<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('model_register');
		$this->load->model('model_user');

		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view('view_register');
	}
	public function validation(){
		$name = $this->input->post('name');
		$pass = $this->input->post('txtpwd');
		$date = $this->input->post('bd');
		$email = $this->input->post('email');
		if ((!empty($name))&&(!empty($pass))&&(!empty($date))&&(!empty($email))){
			$date = explode('-',$date);
			$email = explode('@',$email);
			$uEmail = $email[1];
			$year = $date[0];
			$ndate = date("Y.m.d");
			$ndate = explode('-',$ndate);
			$nyear = $ndate[0];
			$age = ((int)$nyear - (int) $year);

			if($age >= 17 && $uEmail == 'rumahweb.co.id'){

				$insert= json_decode($this->model_register->regis($name),true);
				print_r ($insert);
				if($insert){
					$this->session->set_flashdata('hasil','Register Success');
					redirect('User');}
				}else{
					$this->session->set_flashdata('hasil','Register UnSuccess');
				}
				$this->load->view('view_register');
			}else{
				$this->load->view('view_register');

			}

		}
	}
	?>