 <?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Catatan_nifas extends CI_Controller
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
				if(intval($value['id_jenis_pemeriksaan'])== 22)
					$content.=$value['hasil_pemeriksaan']." mmHg";
				else
					$content.="-";
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 36)
					$content.=$value['hasil_pemeriksaan']."/menit";
				else
					$content.="-";
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 35)
					$content.=$value['hasil_pemeriksaan']."/menit";
				else
					$content.="-";
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 37)
					$content.=$value['hasil_pemeriksaan']." C";
				else
					$content.="-";
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 38)
					$content.=$value['hasil_pemeriksaan'];
				else
					$content.="-";
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 41)
					$content.=$value['hasil_pemeriksaan'];
				else
					$content.="-";
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 42)
					$content.=$value['hasil_pemeriksaan'];
				else
					$content.="-";
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 39)
					$content.=$value['hasil_pemeriksaan'];
				else
					$content.="-";
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 40)
					$content.=$value['hasil_pemeriksaan'];
				else
					$content.="-";
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 43)
					$content.=$value['hasil_pemeriksaan'];
				else
					$content.="-";
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 33)
					$content.=$value['hasil_pemeriksaan'];
				else
					$content.="-";
				$content.="</td>";
				$content.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 34)
					$content.=$value['hasil_pemeriksaan'];
				else
					$content.="-";
				$content.="</td>";
				$content.="</tr>";
			}
			
			$data['content']=$content;
			$this->load->view('catatan_nifas_tampilan',$data);
		}
}