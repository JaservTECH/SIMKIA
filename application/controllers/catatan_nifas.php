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
			$code = '';
			$cursor = count($temp);
			$cursor_now = 1;
			foreach ($temp as $key => $value){
				if($code == ""){
					$code = $value['tanggal_kunjungan'];
					$codd[22] = "<td>-</td>";	
					$codd[36] = "<td>-</td>";	
					$codd[35] = "<td>-</td>";	
					$codd[37] = "<td>-</td>";	
					$codd[38] = "<td>-</td>";	
					$codd[41] = "<td>-</td>";	
					$codd[42] = "<td>-</td>";	
					$codd[39] = "<td>-</td>";	
					$codd[40] = "<td>-</td>";	
					$codd[43] = "<td>-</td>";	
					$codd[33] = "<td>-</td>";	
					$codd[34] = "<td>-</td>";	
				}else if($code != $value['tanggal_kunjungan']){
					$content.="<tr>";
					$content.="<td>".$code."</td>";
					$content.=$codd[22];
					$content.=$codd[36];
					$content.=$codd[35];
					$content.=$codd[37];
					$content.=$codd[38];
					$content.=$codd[41];
					$content.=$codd[42];
					$content.=$codd[39];
					$content.=$codd[40];
					$content.=$codd[43];
					$content.=$codd[33];
					$content.=$codd[34];
					$content.="</tr>";
					$code = $value['tanggal_kunjungan'];
					$codd[22] = "<td>-</td>";	
					$codd[36] = "<td>-</td>";	
					$codd[35] = "<td>-</td>";	
					$codd[37] = "<td>-</td>";	
					$codd[38] = "<td>-</td>";	
					$codd[41] = "<td>-</td>";	
					$codd[42] = "<td>-</td>";	
					$codd[39] = "<td>-</td>";	
					$codd[40] = "<td>-</td>";	
					$codd[43] = "<td>-</td>";	
					$codd[33] = "<td>-</td>";	
					$codd[34] = "<td>-</td>";	
				}
				if(intval($value['id_jenis_pemeriksaan'])== 22)	$codd[22] = "<td>".$value['hasil_pemeriksaan']." mmHg"."</td>";
				if(intval($value['id_jenis_pemeriksaan'])== 36)	$codd[36] = "<td>".$value['hasil_pemeriksaan']." /menit"."</td>";
				if(intval($value['id_jenis_pemeriksaan'])== 35)	$codd[35] = "<td>".$value['hasil_pemeriksaan']." /menit"."</td>";
				if(intval($value['id_jenis_pemeriksaan'])== 37)	$codd[37] = "<td>".$value['hasil_pemeriksaan']." C"."</td>";
				if(intval($value['id_jenis_pemeriksaan'])== 38)	$codd[38] = "<td>".$value['hasil_pemeriksaan']."</td>";
				if(intval($value['id_jenis_pemeriksaan'])== 41)	$codd[41] = "<td>".$value['hasil_pemeriksaan']."</td>";
				if(intval($value['id_jenis_pemeriksaan'])== 42)	$codd[42] = "<td>".$value['hasil_pemeriksaan']."</td>";
				if(intval($value['id_jenis_pemeriksaan'])== 39)	$codd[39] = "<td>".$value['hasil_pemeriksaan']."</td>";
				if(intval($value['id_jenis_pemeriksaan'])== 40)	$codd[40] = "<td>".$value['hasil_pemeriksaan']."</td>";
				if(intval($value['id_jenis_pemeriksaan'])== 43)	$codd[43] = "<td>".$value['hasil_pemeriksaan']."</td>";
				if(intval($value['id_jenis_pemeriksaan'])== 33)	$codd[33] = "<td>".$value['hasil_pemeriksaan']."</td>";
				if(intval($value['id_jenis_pemeriksaan'])== 34)	$codd[34] = "<td>".$value['hasil_pemeriksaan']."</td>";
				if($cursor_now == $cursor){
					$content.="<tr>";
					$content.="<td>".$code."</td>";
					$content.=$codd[22];
					$content.=$codd[36];
					$content.=$codd[35];
					$content.=$codd[37];
					$content.=$codd[38];
					$content.=$codd[41];
					$content.=$codd[42];
					$content.=$codd[39];
					$content.=$codd[40];
					$content.=$codd[43];
					$content.=$codd[33];
					$content.=$codd[34];
					$content.="</tr>";
				}else{
					$cursor_now+=1;
				}
			}
			$data['content']=$content;
			$this->load->view('catatan_nifas_tampilan',$data);
		}
}