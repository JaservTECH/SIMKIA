<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	Class Catatan_hamil extends CI_Controller
	{
		public function index(){
			$this->load->view('header_tampilan');
			$this->load->model('kunjungan_model');
			$this->load->model('jenis_pemeriksaan_model');
			$this->load->model('data_pasien_model');
			$temp = $this->kunjungan_model->GetAllContentTable();
			$content1='';
			foreach ($temp as $key => $value){
				$content1.="<tr>";
				$content1.="<td>";
				$content1.="HPHT :";
				$content1.="</td>";
				$content1.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 9)
					$content1.=$value['hasil_pemeriksaan'];
				else
					$content1.="-";
				$content1.="</td>";
				$content1.="</tr>";
				
				$content1.="<tr>";
				$content1.="<td>";
				$content1.="Hari Taksiran Persalinan :";
				$content1.="</td>";
				$content1.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 10)
					$content1.=$value['hasil_pemeriksaan'];
				else
					$content1.="-";
				$content1.="</td>";
				$content1.="</tr>";
				
				$content1.="<tr>";
				$content1.="<td>";
				$content1.="Lingkar Lengan Atas :";
				$content1.="</td>";				
				$content1.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 11)
					$content1.=$value['hasil_pemeriksaan']." cm";
				else
					$content1.="-";
				$content1.="</td>";
				$content1.="</tr>";
				
				$content1.="<tr>";
				$content1.="<td>";
				$content1.="Tinggi Badan :";
				$content1.="</td>";
				$content1.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 12)
					$content1.=$value['hasil_pemeriksaan']." cm";
				else
					$content1.="-";
				$content1.="</td>";
				$content1.="</tr>";
				
				$content1.="<tr>";
				$content1.="<td>";
				$content1.="Kontrasepsi Terakhir :";
				$content1.="</td>";
				$content1.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 13)
					$content1.=$value['hasil_pemeriksaan'];
				else
					$content1.="-";
				$content1.="</td>";
				$content1.="</tr>";
				
				$content1.="<tr>";
				$content1.="<td>";
				$content1.="Riwayat Penyakit :";
				$content1.="</td>";
				$content1.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 14)
					$content1.=$value['hasil_pemeriksaan'];
				else
					$content1.="-";
				$content1.="</td>";
				$content1.="</tr>";
				
			}
			$content2='';
			foreach ($temp as $key => $value){
				$content2.="<tr>";
				$content2.="<td>";
				$content2.="Gestasi :";
				$content2.="<td>";
				$content2.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 3)
					$content2.=$value['hasil_pemeriksaan'];
				else
					$content2.="-";
				$content2.="</td>";
				$content2.="</tr>";
				
				$content2.="<tr>";
				$content2.="<td>";
				$content2.="Partus :";
				$content2.="<td>";
				$content2.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 1)
					$content2.=$value['hasil_pemeriksaan'];
				else
					$content2.="-";
				$content2.="</td>";
				$content2.="</tr>";
				
				$content2.="<tr>";
				$content2.="<td>";
				$content2.="Abortus :";
				$content2.="<td>";
				$content2.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 2)
					$content2.=$value['hasil_pemeriksaan'];
				else
					$content2.="-";
				$content2.="</td>";
				$content2.="</tr>";
				
			}
			
			$content3='';
			foreach ($temp as $key => $value){
				$content3.="<tr>";
				$content3.="<td>";
				$content3.="Riwayat Alergi :";
				$content3.="<td>";
				$content3.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 15)
					$content3.=$value['hasil_pemeriksaan'];
				else
					$content3.="-";
				$content3.="</td>";
				$content3.="</tr>";
				
				$content3.="<tr>";
				$content3.="<td>";
				$content3.="Jumlah Anak Hidup :";
				$content3.="<td>";
				$content3.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 4)
					$content3.=$value['hasil_pemeriksaan'];
				else
					$content3.="-";
				$content3.="</td>";
				$content3.="</tr>";
				
				$content3.="<tr>";
				$content3.="<td>";
				$content3.="Jumlah Anak Lahir Mati :";
				$content3.="<td>";
				$content3.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 5)
					$content3.=$value['hasil_pemeriksaan'];
				else
					$content3.="-";
				$content3.="</td>";
				$content3.="</tr>";
				
				$content3.="<tr>";
				$content3.="<td>";
				$content3.="Jumlah Anak Lahir Kurang Bulan :";
				$content3.="<td>";
				$content3.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 6)
					$content3.=$value['hasil_pemeriksaan'];
				else
					$content3.="-";
				$content3.="</td>";
				$content3.="</tr>";
				
				$content3.="<tr>";
				$content3.="<td>";
				$content3.="Jarak Persalinan Terakhir :";
				$content3.="<td>";
				$content3.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 7)
					$content3.=$value['hasil_pemeriksaan'];
				else
					$content3.="-";
				$content3.="</td>";
				$content3.="</tr>";
				
				$content3.="<tr>";
				$content3.="<td>";
				$content3.="Cara Persalinan Sebelumnya :";
				$content3.="<td>";
				$content3.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 8)
					$content3.=$value['hasil_pemeriksaan'];
				else
					$content3.="-";
				$content3.="</td>";
				$content3.="</tr>";
			}
			
			$content4='';
			foreach ($temp as $key => $value){
				$content4.="<tr>";
				$content4.="<td>";
				$content4.="Tanggal Pemberian";
				$content4.="</td>";
				$content4.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 16)
					$content4.=$value['hasil_pemeriksaan'];
				else
					$content4.="-";
				$content4.="</td>";
				$content4.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 17)
					$content4.=$value['hasil_pemeriksaan'];
				else
					$content4.="-";
				$content4.="</td>";
				$content4.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 18)
					$content4.=$value['hasil_pemeriksaan'];
				else
					$content4.="-";
				$content4.="</td>";
				$content4.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 19)
					$content4.=$value['hasil_pemeriksaan'];
				else
					$content4.="-";
				$content4.="</td>";
				$content4.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 20)
					$content4.=$value['hasil_pemeriksaan'];
				else
					$content4.="-";
				$content4.="</td>";
				$content4.="</tr>";
			}
			
			$content5='';
			foreach ($temp as $key => $value){
				$content5.="<tr>";
				$content5.="<td>";
				$content5.=$value['tanggal_kunjungan'];
				$content5.="</td>";
				$content5.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 22)
					$content5.=$value['hasil_pemeriksaan']." mmHg";
				else
					$content5.="-";
				$content5.="</td>";
				$content5.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 23)
					$content5.=$value['hasil_pemeriksaan']." kg";
				else
					$content5.="-";
				$content5.="</td>";
				$content5.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 24)
					$content5.=$value['hasil_pemeriksaan']." bulan";
				else
					$content5.="-";
				$content5.="</td>";
				$content5.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 25)
					$content5.=$value['hasil_pemeriksaan']." cm";
				else
					$content5.="-";
				$content5.="</td>";
				if(intval($value['id_jenis_pemeriksaan'])== 26)
					$content5.=$value['hasil_pemeriksaan'];
				if(intval($value['id_jenis_pemeriksaan'])== 27)
					$content5.=$value['hasil_pemeriksaan'];
				if(intval($value['id_jenis_pemeriksaan'])== 28)
					$content5.=$value['hasil_pemeriksaan'];
				else
					$content5.="-";
				$content5.="</td>";
				$content5.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 30)
					$content5.=$value['hasil_pemeriksaan']."/menit";
				else
					$content5.="-";
				$content5.="</td>";
				$content5.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 31)
					$content5.=$value['hasil_pemeriksaan'];
				else
					$content5.="-";
				$content5.="</td>";
				$content5.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 21)
					$content5.=$value['hasil_pemeriksaan'];
				else
					$content5.="-";
				$content5.="</td>";
				$content5.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 32)
					$content5.=$value['hasil_pemeriksaan'];
				else
					$content5.="-";
				$content5.="</td>";
				$content5.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 34)
					$content5.=$value['hasil_pemeriksaan'];
				else
					$content5.="-";
				$content5.="</td>";
				$content5.="<td>";
				if(intval($value['id_jenis_pemeriksaan'])== 89)
					$content5.=$value['hasil_pemeriksaan'];
				else
					$content5.="-";
				$content5.="</td>";	
			}
			$data['content1']=$content1;
			$data['content2']=$content2;
			$data['content3']=$content3;
			$data['content4']=$content4;
			$data['content5']=$content5;
			$this->load->view('catatan_hamil_tampilan',$data);
		}
}