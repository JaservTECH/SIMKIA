<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Home extends CI_Controller
	{
		public function index(){
			$this->load->view("header_tampilan");
			$this->load->view("home_tampilan");
		}
		
}