<?php 
if (!defined ("BASEPATH"))
	exit ('You dont have access to this content');

class Kmsgabungan extends CI_Controller {
	function __CONSTRUCT(){
		parent::__CONSTRUCT();
		$this->load->helper('url');
	}
	function index() {
		$temp=array(4,4,4,4,4,4,4,4,5,5,5,5,5,6,7,7,7,7,6,6,6,7,7,7,7,7,7,7,7,8,8,8,8,9,9,9,9,9,10,10,10,10,10);
		$temp2 ="";
		foreach ($temp as $value){
			$temp2.=$value.",";
		}
		$temp2 = substr($temp2,0,strlen($temp2)-1);
		$data['dataArray']= $temp2;
		$this->load->view('kms_tampilangabungan',$data);
	}
}
