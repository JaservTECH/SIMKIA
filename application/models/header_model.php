<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
	class Header_model extends CI_Model{
		
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->database();
		}