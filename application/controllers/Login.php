<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Login extends CI_Controller
	{
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->library('authenticateparent');
			$this->load->library('gatelogin');
			$this->load->helper('url');
		}
		
		public function index($error=0,$message=''){
			if($error == 0)
				$this->load->view("login_layout");
			else{
				$data['error'] = "<div class='alert alert-warning' role='alert'>".$message."</div>";
				$this->load->view("login_layout",$data);
			}
		}
		
		function login_authenticate(){
			$this->load->model('data_pasien_model');
			if($this->input->post('submit') === NULL){
				$this->index(1,'Anda login illegal metode');
				return;
			}
			$username = $this->input->post("username");
			if($username === NULL){
				$this->index(1,"Username tidah diisi");
				return;
			}
			if($username == ""){
				$this->index(1,"Username tidah Boleh kosong");
				return;
			}
			$password = $this->input->post("password");
			if($password === NULL){
				$this->index(1,"Username tidah diisi");
				return;
			}
			if($password == ""){
				$this->index(1,"Username tidah Boleh kosong");
				return;
			}
			$temp = $this->data_pasien_model->GetAllContentTable($username);
			if(count($temp)==0)
			{
				$this->index(1,"Username atau password anda tidak terdaftar");
				return;
			}else{
				if($username!= $temp['no_RM']){
					$this->index(1,"Username tidak cocok");
					return;
				}
				if(md5($password)!= $temp['password']){
					$this->index(1,"password tidak cocok");
					return;
				}
				redirect('Home/');
			}
		}
}