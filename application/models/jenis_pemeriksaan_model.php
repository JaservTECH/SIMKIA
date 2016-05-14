<?php 
if (!defined ("BASEPATH"))
	exit ('You dont have access to this content');

class Jenis_pemeriksaan_model extends CI_Model {
	private $TABLE_NAME;
	function __CONSTRUCT(){
		parent::__CONSTRUCT();
		$this->load->database();
		$this->TABLE_NAME = "jenis_pemeriksaan";
	}
	function GetAllContentTable($id) {
		return $this->db->query("SELECT * FROM ".$this->TABLE_NAME." WHERE id_jenis_pemeriksaan=".$id)->row_array();
	} 
}	