<?php 

	defined('BASEPATH') OR exit("No direct script access allowed");

	/**
	* 
	*/
	class Login extends CI_Controller{
		
		public function index(){
			$this->load->view('login');
		}

		public function validate(){
			$username = $_POST['username'];
			$password = $_POST['password'];

			if($username == 'admin' && $password == 'admin'){
				$this->session->set_userdata(array("username"=>$username,"status"=>"logged"));
				redirect(base_url('index.php/makanan'));
			}elseif($username == 'kasir' && $password == 'kasir'){
				$this->session->set_userdata(array("username"=>$username,"status"=>"logged"));
				redirect(base_url('index.php/kasir'));
			}else {
				$this->session->set_userdata(array("fail"=>true));
				redirect(base_url('index.php/login'));
			}
			
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url('index.php/login'));
		}
	}