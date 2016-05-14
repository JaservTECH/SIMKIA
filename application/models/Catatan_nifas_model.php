<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
	class Catatan_nifas_model extends CI_Model{
		
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->database();
		}
		
		public  function getdata($key)
		{   
			$nifas=array(22);
			$this->db->where("id_jenis_pemeriksaan=".$nifas."");
			$hasil = $this->db->get('hasil_pemeriksaan');
			return $hasil;
		}
}