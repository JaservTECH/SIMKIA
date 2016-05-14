<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticateparent {
	protected $CI;
	function __CONSTRUCT(){
		$CI=&get_instance();
	}
	//Control
	public function session($data){
		return $this->CI->session->userdata($data);
	}
	public function hasSession($data){
		return $this->CI->session->has_userdata($data);
	}
	public function setSession($data,$value){
		$this->CI->session->set_userdata($data,$value);
	}
	public function unSetSession($data){
		$this->CI->session->unset_userdata($data);
	}
	public function destroySession(){
		$this->CI->session->sess_destroy();
	}
	public function encryptUser($data=0){
		return md5($data."-jaservTech");
	}
}