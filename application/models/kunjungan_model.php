<?php 
if (!defined ("BASEPATH"))
	exit ('You dont have access to this content');

class Kunjungan_model extends CI_Model {
	private $TABLE_NAME;
	function __CONSTRUCT(){
		parent::__CONSTRUCT();
		$this->load->database();
		$this->TABLE_NAME = "kunjungan";
	}
	function GetAllContentTable($norm){
		return $this->db->query("SELECT * FROM ".$this->TABLE_NAME." WHERE no_RM='".$norm."'")->result_array();
	}
}