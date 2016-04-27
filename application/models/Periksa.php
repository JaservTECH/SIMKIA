<?php
if(!defined('BASEPATH'))
	exit("bla bla bla");
class Periksa extends CI_Model {
	private $TABLE_NAME;
	function __CONSTRUCT(){
		parent::__CONSTRUCT();
		$this->load->database();
		$this->TABLE_NAME = "periksa";
	}
	function getAllContentTable(){
		return $this->db->query("SELECT * FROM ".$this->TABLE_NAME)->result_array();
	}
}