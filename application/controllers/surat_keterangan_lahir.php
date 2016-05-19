 <?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Surat_keterangan_lahir extends CI_Controller
	{
		
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->helper('url');
		}
		public function index(){
			$this->load->view("surat_keterangan_lahir");
		}
}