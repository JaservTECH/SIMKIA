<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Info_bayi extends CI_Controller
	{
		public function index(){
			$this->load->view("header_tampilan");
			$this->load->view("info_bayi_tampilan");
		}
		
}