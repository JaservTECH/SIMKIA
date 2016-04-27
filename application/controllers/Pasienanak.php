<?php
if(!defined("BASEPATH"))
	exit('You dont have access to this content');
class Pasienanak extends CI_Controller {
	function __CONSTRUCT(){
		parent::__CONSTRUCT();
		$this->load->helper('url');
	}
	function index(){
		$temp = array(12,12.5,12);
		$temp2 = "";
		foreach($temp as $value){
			$temp2.=$value.",";
		}
		$temp2 = substr($temp2,0,strlen($temp2)-1);
		$data['dataArray'] = $temp2;
		$this->load->view('grafik',$data);
	}
	function showMeTable(){
		$this->load->model('periksa');
		$this->load->model('jenispemeriksaan');
		$this->load->model('datapasien');
		$temp = $this->periksa->getAllContentTable();
		$content='';
		foreach ($temp as $key => $value) {
			$content.="<tr>";
			$content.="<td>";
			$content.=$value['tanggal_kunjungan'];
			$content.="</td>";
			$content.="<td>";
			$content.="-";
			$content.="</td>";
			$content.="<td>";
			if(intval($value['id_jenis_pemeriksaan']) == 38)
				$content.=$value['hasil_pemeriksaan']."/menit";
			else
				$content.="-";
			$content.="</td>";
			$content.="<td>";
			if(intval($value['id_jenis_pemeriksaan']) == 37)
				$content.=$value['hasil_pemeriksaan']."/menit";
			else
				$content.="-";
			$content.="</td>";
			$content.="<td>";
			if(intval($value['id_jenis_pemeriksaan']) == 39)
				$content.=$value['hasil_pemeriksaan']." C";
			else
				$content.="-";
			$content.="</td>";
			$content.="<td>";
			if(intval($value['id_jenis_pemeriksaan']) == 40)
				$content.=$value['hasil_pemeriksaan'];
			else
				$content.="-";
			$content.="</td>";
			$content.="<td>";
			if(intval($value['id_jenis_pemeriksaan']) == 43)
				$content.=$value['hasil_pemeriksaan'];
			else
				$content.="-";
			$content.="</td>";
			$content.="<td>";
			if(intval($value['id_jenis_pemeriksaan']) == 44)
				$content.=$value['hasil_pemeriksaan'];
			else
				$content.="-";
			$content.="</td>";
			$content.="<td>";
			if(intval($value['id_jenis_pemeriksaan']) == 41)
				$content.=$value['hasil_pemeriksaan'];
			else
				$content.="-";
			$content.="</td>";
			$content.="<td>";
			if(intval($value['id_jenis_pemeriksaan']) == 42)
				$content.=$value['hasil_pemeriksaan'];
			else
				$content.="-";
			$content.="</td>";
			$content.="<td>";
			if(intval($value['id_jenis_pemeriksaan']) == 45)
				$content.=$value['hasil_pemeriksaan'];
			else
				$content.="-";
			$content.="</td>";
			$content.="<td>";
			$content.="-";
			$content.="</td>";
			$content.="<td>";
			$content.="-";
			$content.="</td>";
			$content.="</tr>";
		}
		
		
		
		
		
		
		
		$data['content'] = $content;
		$this->load->view('table',$data);
	}
}