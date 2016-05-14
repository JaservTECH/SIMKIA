<?php 
if (!defined ("BASEPATH"))
	exit ('You dont have access to this content');

class Data_pasien_model extends CI_Model {
	private $TABLE_NAME;
	function __CONSTRUCT(){
		parent::__CONSTRUCT();
		$this->load->database();
		$this->TABLE_NAME = "data_pasien";
	}
	function GetAllContentTable($noRM) {
		return $this->db->query("SELECT * FROM ".$this->TABLE_NAME." WHERE no_RM=".$noRM)->row_array();
	}   
}