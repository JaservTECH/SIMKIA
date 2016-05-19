 <?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Menyambut_persalinan extends CI_Controller
	{
		
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->helper('url');
		}
		public function index(){
			$this->load->view("menyambut_persalinan");
		}
}