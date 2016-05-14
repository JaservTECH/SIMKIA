<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
	class Login_model extends CI_Model{
		
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->database();
		}
		
		function getData($username,$password){
			$password = md5($password);
			$temp = $this->db->query("SELECT id_user as id,username as user,password as pass,level as cat FROM user WHERE password='".$password."' AND username='".$username."'")->row_array();
			foreach($temp as $val){echo $val['Id'];};
			return$temp;
		}
}