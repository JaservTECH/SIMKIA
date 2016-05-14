 <?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Catatan_periksa_anak extends CI_Controller
	{
		
		function __CONSTRUCT(){
			parent::__CONSTRUCT();
			$this->load->helper('url');
		}
		public function index(){
			$this->load->view("header_tampilan");
			$this->load->model('kunjungan_model');
			$this->load->model('jenis_pemeriksaan_model');
			$this->load->model('data_pasien_model');
			$temp = $this->kunjungan_model->GetAllContentTable();
			$content='';
			foreach ($temp as $key => $value){
				$content.="<tr>";
				$content.="<td>";
				$content.=$value['tanggal_kunjungan'];
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 23)
					$content.=$value['hasil_pemeriksaan']." kg";
				else
					$content.="-";
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 12)
					$content.=$value['hasil_pemeriksaan']." cm";
				else
					$content.="-";
				$content.="</td>";
				//kurang lingkar kepala
				$content.="<td>";
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 37)
					$content.=$value['hasil_pemeriksaan']." C";
				else
					$content.="-";
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 72)
					$content.=$value['hasil_pemeriksaan']."/menit";
				else
					$content.="-";
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 73)
					$content.=$value['hasil_pemeriksaan']."/menit";
				else
					$content.="-";
				$content.="</td>";
				$content.="<td>";
				//penyakit/masalah
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 33)
					$content.=$value['hasil_pemeriksaan'];
				else
					$content.="-";
				$content.="</td>";
				$content.="</tr>";
			}
			
			$data['content']=$content;
			$this->load->view('catatan_periksa_anak_tampilan',$data);
		}
}