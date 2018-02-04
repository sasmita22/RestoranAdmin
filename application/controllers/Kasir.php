<?php 
	defined('BASEPATH') OR exit("No direct script access allowed");

	/**
	* 
	*/
	class Kasir extends CI_Controller{
		
		public function index(){
			$this->load->view('kasir/daftar_meja');
		}

		public function kasir_page(){
			$this->load->view('kasir/kasir');
		}
	}