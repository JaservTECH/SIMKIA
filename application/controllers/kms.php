<?php 
if (!defined ("BASEPATH"))
	exit ('You dont have access to this content');

class Kms extends CI_Controller {
	function __CONSTRUCT(){
		parent::__CONSTRUCT();
		$this->load->helper('url');
	}
	function index() {
		$temp=array(12,12.4,14,15,16,17,16);
		$temp2 ="";
		foreach ($temp as $value){
			$temp2.=$value.",";
		}
		$temp2 = substr($temp2,0,strlen($temp2)-1);
		$data['dataArray']= $temp2;
		$this->load->view('kms_tampilan',$data);
	}
}
