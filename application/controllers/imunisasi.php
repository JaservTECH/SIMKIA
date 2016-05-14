<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Imunisasi extends CI_Controller
	{
		public function index(){
			$this->load->view("header_tampilan");
			$this->load->view("imunisasi_tampilan");
		}
		
}