<?php
if(!defined('BASEPATH'))
	exit("bla bla bla");
class Datapasien extends CI_Model {
	private $TABLE_NAME;
	function __CONSTRUCT(){
		parent::__CONSTRUCT();
		$this->load->database();
		$this->TABLE_NAME = "data_pasien";
	}
	function getAllContentTable($noRM){
		return $this->db->query("SELECT * FROM ".$this->TABLE_NAME."  WHERE no_RM=".$noRM)->row_array();
	}
}