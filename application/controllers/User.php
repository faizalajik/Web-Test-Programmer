<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('model_user');
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');

	}
	public function index(){
		if($this->session->userdata('status') != "login"){
			redirect('User/Login');
			
		}else{
			$user= json_decode($this->model_user->getData(),True);
			$this->load->view('view_alluser',$user);}

		}
		public function edit($id){
			$user= json_decode($this->model_user->getUser($id),True);

			$this->load->view('view_edit',$user);


		}
		public function editData(){

			$id = $this->input->post('id');
			$fName = $this->input->post('fname');
			$lname = $this->input->post('lname');
			$email = $this->input->post('email');
			if (isset($_POST['save'])){
				$edit= $this->model_user->editData($id);

				if($edit)
				{
					$this->session->set_flashdata('hasil','Edit Data success');
					redirect('User');

				}else
				{
					$this->session->set_flashdata('hasil','Edit Data Unsuccessful');
				}

			}else{
				redirect('User');
			}
		}
		public function delete($id){
			$id = floatval($id);
			$del = $this->model_user->deleteData($id);
			if($del)
			{
				$this->session->set_flashdata('hasil','Delete Data success');

			}else
			{
				$this->session->set_flashdata('hasil','Delete Data Unsuccessful');
			}
			redirect('User');


		}
		public function login(){
			$this->load->view('view_login');
		}
		public function loginUser(){
			$email = $this->input->post('email');
			$pass = $this->input->post('pass');

			$login= $this->model_user->login($email,$pass);
			if($login)
			{
				$this->session->set_flashdata('hasil','Login User Success');
				$data_session = array(
					'email' => $email,
					'status' => "login"
					);

				$this->session->set_userdata($data_session);
				redirect('User');

			}else
			{
				$this->session->set_flashdata('hasil','Login User Unsuccessful');
			}
			$this->load->view('view_login');

		}
		function logout(){
			$this->session->sess_destroy();
			redirect('User/Login');
		}
	}
	?>
