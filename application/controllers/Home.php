<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Home extends CI_Controller
	{
		public function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->library('session');
			$this->load->helper('url');
		}
		public function index(){
			$temp = $this->session->all_userdata();
			if(!array_key_exists("pasien",$temp))
				redirect("Login/");
			if(!array_key_exists("pass",$temp))
				redirect("Login/");
			$data['keluar'] = base_url()."index.php/Home/keluarPasien";
			$this->load->view("header_tampilan",$data);
			$this->load->view("home_tampilan");
		}
		public function keluarPasien(){
			
			$this->session->unset_userdata('pasien');
			$this->session->unset_userdata('pass');
			redirect("Login/");
		}
}