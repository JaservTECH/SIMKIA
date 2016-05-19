<?php
require('fpdf.php');
class Converter {
	private $myPdf;
	function __CONSTRUCT(){
	}
	function suratKeteranganLahir($data){
		$this->myPdf = new FPDF('P','in',array(8.27,11.69));
		$this->myPdf->AddPage();
		$top=1; //top all
		$left=0.4;
		$topCont=0.1; //top content
		$leftCont=1.15;
		$this->myPdf->SetFont('Arial','B',16);
		//$this->myPdf->Cell(40,11,'SURAT KETERANGAN LAHIR');	
		$this->myPdf->setXY($left,$top);
		$this->myPdf->Cell(7.5,0,'SURAT KETERANGAN LAHIR',0,2,'C');
		$this->myPdf->SetFont('Arial','',12);
		$this->myPdf->setXY($left,$top+0.3);
		$this->myPdf->Cell(7.5,0,'No. .........................................',0,2,'C');
		$this->myPdf->setXY($leftCont,$top+0.6+$topCont);
		$this->myPdf->Cell(0,0,'Yang bertandatangan dibawah ini, menerangkan bahwa;',0,2,'L');		
		$this->myPdf->setXY($leftCont,$top+0.85+$topCont);
		$this->myPdf->Cell(0,0,'Pada hari ini ...............................,tanggal ...............................,Pukul ....................',0,2,'L');
		$this->myPdf->SetFont('Arial','B',11);
		$this->myPdf->setXY($leftCont+1,$top+0.72+$topCont);
		$this->myPdf->Cell(1.46,0.2,$data['hari'],0,1,'C');
		$this->myPdf->setXY($leftCont+3.07,$top+0.72+$topCont);
		$this->myPdf->Cell(1.46,0.2,$data['tanggal'],0,1,'C');
		$this->myPdf->setXY($leftCont+5.03,$top+0.72+$topCont);
		$this->myPdf->Cell(0.9,0.2,$data['pukul'],0,1,'C');
		$this->myPdf->SetFont('Arial','',12);
		$this->myPdf->setXY($leftCont,$top+1.1+$topCont);
		$this->myPdf->Cell(0,0,'telah lahir seorang bayi:',0,2,'L');
		
		
		$leftCont2=0.28;
		$leftCont2Sub1=1.2;
		$leftCont2Sub2=0.2;
		$this->myPdf->SetFont('Arial','',12);
		$this->myPdf->setXY($leftCont+$leftCont2,$top+1.35+$topCont);
		$this->myPdf->Cell(0,0,'Jenis Kelamin',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+1.35+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+1.35+$topCont);
		if($data['jenkel'] == 1)
		{
			$this->myPdf->SetFont('Arial','B',11);
			$this->myPdf->Cell(0.7,0,'Laki-laki /',0,2,'L');
			$this->myPdf->SetFont('Arial','',12);
		}
		else
			$this->myPdf->Cell(0.69,0,'Laki-laki /',1,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2+0.75,$top+1.35+$topCont);
		if($data['jenkel'] == 2)
		{
			$this->myPdf->SetFont('Arial','B',11);
			$this->myPdf->Cell(0.94,0,'Perempuan',0,2,'L');
			$this->myPdf->SetFont('Arial','',12);
		}
		else
			$this->myPdf->Cell(0.94,0,'Perempuan',1,2,'L');
		
		
		
		$this->myPdf->setXY($leftCont+$leftCont2,$top+1.6+$topCont);
		$this->myPdf->Cell(0,0,'Jenis Kelahiran',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+1.6+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+1.6+$topCont);
		if($data['jenkelh'] == 1)
		{
			$this->myPdf->SetFont('Arial','B',11);
			$this->myPdf->Cell(0.7,0,'Tunggal /',0,2,'L');
			$this->myPdf->SetFont('Arial','',12);
		}
		else
			$this->myPdf->Cell(0.69,0,'Tunggal /',1,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2+0.75,$top+1.6+$topCont);
		if($data['jenkelh'] == 2)
		{
			$this->myPdf->SetFont('Arial','B',11);
			$this->myPdf->Cell(0.79,0,'Kembar 2 /',0,2,'L');
			$this->myPdf->SetFont('Arial','',12);
		}
		else
			$this->myPdf->Cell(0.79,0,'Kembar 2 /',1,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2+1.61,$top+1.6+$topCont);
		if($data['jenkelh'] == 3)
		{
			$this->myPdf->SetFont('Arial','B',11);
			$this->myPdf->Cell(0.79,0,'Kembar 3 /',0,2,'L');
			$this->myPdf->SetFont('Arial','',12);
		}
		else
			$this->myPdf->Cell(0.79,0,'Kembar 3 /',1,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2+2.47,$top+1.6+$topCont);
		if($data['jenkelh'] == 4)
		{
			$this->myPdf->SetFont('Arial','B',11);
			$this->myPdf->Cell(0.65,0,'Lainnya*',0,2,'L');
			$this->myPdf->SetFont('Arial','',12);
		}
		else
			$this->myPdf->Cell(0.65,0,'Lainnya*',1,2,'L');
		
		
		
		
		
		$this->myPdf->setXY($leftCont+$leftCont2,$top+1.85+$topCont);
		$this->myPdf->Cell(0,0,'Kelahiran ke',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+1.85+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+1.85+$topCont);
		$this->myPdf->Cell(0,0,'..............................................',0,2,'L');
		$this->myPdf->SetFont('Arial','B',11);
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+1.82+$topCont);
		$this->myPdf->Cell(2.2,0,$data['kelke'],0,2,'C');
		$this->myPdf->SetFont('Arial','',12);
		
		//Berat lahir
		$this->myPdf->setXY($leftCont+$leftCont2,$top+2.1+$topCont);
		$this->myPdf->Cell(0,0,'Berat lahir',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+2.1+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+2.1+$topCont);
		$this->myPdf->Cell(0,0,'.............................................. gram',0,2,'L');
		$this->myPdf->SetFont('Arial','B',11);
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+2.07+$topCont);
		$this->myPdf->Cell(2.2,0,$data['berla'],0,2,'C');
		$this->myPdf->SetFont('Arial','',12);
		
		
		//Panjang badan
		
		$this->myPdf->setXY($leftCont+$leftCont2,$top+2.35+$topCont);
		$this->myPdf->Cell(0,0,'Panjang badan',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+2.35+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+2.35+$topCont);
		$this->myPdf->Cell(0,0,'.................... cm',0,2,'L');
		$this->myPdf->SetFont('Arial','B',11);
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+2.32+$topCont);
		$this->myPdf->Cell(1.1,0,$data['panbad'],0,2,'C');
		$this->myPdf->SetFont('Arial','',12);
		
		
		//di
		$this->myPdf->setXY($leftCont+$leftCont2,$top+2.6+$topCont);
		$this->myPdf->Cell(0,0,'di',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+0.18,$top+2.6+$topCont);
		if($data['di'] == 1)
		{
			$this->myPdf->SetFont('Arial','B',11);
			$this->myPdf->Cell(1.0,0,'Rumah sakit /',0,2,'L');
			$this->myPdf->SetFont('Arial','',12);
		}
		else
			$this->myPdf->Cell(1.0,0,'Rumah sakit /',1,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+1.24,$top+2.6+$topCont);
		if($data['di'] == 2)
		{
			$this->myPdf->SetFont('Arial','B',11);
			$this->myPdf->Cell(0.93,0,'Puskesmas /',0,2,'L');
			$this->myPdf->SetFont('Arial','',12);
		}
		else
			$this->myPdf->Cell(0.93,0,'Puskesmas /',1,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+2.24,$top+2.6+$topCont);
		if($data['di'] == 3)
		{
			$this->myPdf->SetFont('Arial','B',11);
			$this->myPdf->Cell(1.24,0,'Rumah bersalin /',0,2,'L');
			$this->myPdf->SetFont('Arial','',12);
		}
		else
			$this->myPdf->Cell(1.24,0,'Rumah bersalin /',1,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+3.54,$top+2.6+$topCont);
		if($data['di'] == 4)
		{
			$this->myPdf->SetFont('Arial','B',11);
			$this->myPdf->Cell(0.71,0,'Polindes /',0,2,'L');
			$this->myPdf->SetFont('Arial','',12);
		}
		else
			$this->myPdf->Cell(0.71,0,'Polindes /',1,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+4.31,$top+2.6+$topCont);
		if($data['di'] == 5)
		{
			$this->myPdf->SetFont('Arial','B',11);
			$this->myPdf->Cell(1.07,0,'Rumah bidan /',0,2,'L');
			$this->myPdf->SetFont('Arial','',12);
		}
		else
			$this->myPdf->Cell(1.07,0,'Rumah bidan /',1,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+5.43,$top+2.6+$topCont);
		if($data['di'] == 6)
		{
			$this->myPdf->SetFont('Arial','B',11);
			$this->myPdf->Cell(0.2,0,'di*',0,2,'L');
			$this->myPdf->SetFont('Arial','',12);
		}
		else
			$this->myPdf->Cell(0.2,0,'di*',1,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2,$top+2.85+$topCont);
		$this->myPdf->Cell(0,0,'.........................................................................................................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2,$top+2.82+$topCont);
		$this->myPdf->SetFont('Arial','B',11);
		if($data['di'] == 6)
			$this->myPdf->Cell(5.68,0,$data['lokasi'],0,2,'C');
		else
			$this->myPdf->Cell(5.68,0,"",1,2,'C');
		$this->myPdf->SetFont('Arial','',12);
		
		//Alamat
		$this->myPdf->setXY($leftCont+$leftCont2,$top+3.1+$topCont);
		$this->myPdf->Cell(0,0,'Alamat',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+3.1+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+3.1+$topCont);
		$this->myPdf->Cell(0,0,'...........................................................................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+3.08+$topCont);
		$this->myPdf->SetFont('Arial','B',11);
		$this->myPdf->Cell(4.3,0,$data['alamat'],0,2,'L');
		$this->myPdf->SetFont('Arial','',12);
		//diberinama
		
		$this->myPdf->setXY($leftCont+$leftCont2,$top+3.35+$topCont);
		$this->myPdf->Cell(0,0,'Diberi nama',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+3.35+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2,$top+3.85+$topCont);
		$this->myPdf->Cell(0,0,'.........................................................................................................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2,$top+3.81+$topCont);
		$this->myPdf->SetFont('Arial','B',17);
		$this->myPdf->Cell(5.68,0,$data['nanak'],0,2,'C');
		$this->myPdf->SetFont('Arial','',12);
		
		//dari orang tua
		
		$this->myPdf->setXY($leftCont+$leftCont2,$top+4.1+$topCont);
		$this->myPdf->Cell(0,0,'Dari Orang Tua',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+4.1+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		
		$leftCont2Sub3=2.1;
		$this->myPdf->setXY($leftCont+$leftCont2,$top+4.35+$topCont);
		$this->myPdf->Cell(0,0,'Nama Ibu',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+4.35+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+4.35+$topCont);
		$this->myPdf->Cell(0,0,'..............................................  Umur : ....................  tahun',0,2,'L');
		$this->myPdf->SetFont('Arial','B',11);
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+4.32+$topCont);
		$this->myPdf->Cell(2.2,0,$data['namaibu'],0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2+2.8,$top+4.32+$topCont);
		$this->myPdf->Cell(0.95,0,$data['umuribu'],0,2,'C');
		$this->myPdf->SetFont('Arial','',12);
		//pekerjaan
		
		$this->myPdf->setXY($leftCont+$leftCont2,$top+4.6+$topCont);
		$this->myPdf->Cell(0,0,'Pekerjaan',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+4.6+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+4.6+$topCont);
		$this->myPdf->Cell(0,0,'...........................................................................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+4.57+$topCont);
		$this->myPdf->SetFont('Arial','B',11);
		$this->myPdf->Cell(4.3,0,$data['pekerjaanibu'],0,2,'L');
		$this->myPdf->SetFont('Arial','',12);
		//KTP/NIK No.
		$this->myPdf->setXY($leftCont+$leftCont2,$top+4.85+$topCont);
		$this->myPdf->Cell(0,0,'KTP/NIK No.',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+4.85+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+4.85+$topCont);
		$this->myPdf->Cell(0,0,'...........................................................................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+4.82+$topCont);
		$this->myPdf->SetFont('Arial','B',11);
		$this->myPdf->Cell(4.3,0,$data['ktpnikibu'],0,2,'L');
		$this->myPdf->SetFont('Arial','',12);
		
		//Ayah
		$this->myPdf->setXY($leftCont+$leftCont2,$top+5.1+$topCont);
		$this->myPdf->Cell(0,0,'Nama Ayah',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+5.1+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+5.1+$topCont);
		$this->myPdf->Cell(0,0,'..............................................  Umur : ....................  tahun',0,2,'L');
		$this->myPdf->SetFont('Arial','B',11);
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+5.08+$topCont);
		$this->myPdf->Cell(2.2,0,$data['namaayah'],0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2+2.8,$top+5.08+$topCont);
		$this->myPdf->Cell(0.95,0,$data['umurayah'],0,2,'C');
		$this->myPdf->SetFont('Arial','',12);
		//pekerjaan
		
		$this->myPdf->setXY($leftCont+$leftCont2,$top+5.35+$topCont);
		$this->myPdf->Cell(0,0,'Pekerjaan',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+5.35+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+5.35+$topCont);
		$this->myPdf->Cell(0,0,'...........................................................................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+5.32+$topCont);
		$this->myPdf->SetFont('Arial','B',11);
		$this->myPdf->Cell(4.3,0,$data['pekerjaanayah'],0,2,'L');
		$this->myPdf->SetFont('Arial','',12);
		//KTP/NIK No.
		$this->myPdf->setXY($leftCont+$leftCont2,$top+5.6+$topCont);
		$this->myPdf->Cell(0,0,'KTP/NIK No.',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+5.6+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+5.6+$topCont);
		$this->myPdf->Cell(0,0,'...........................................................................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+5.57+$topCont);
		$this->myPdf->SetFont('Arial','B',11);
		$this->myPdf->Cell(4.3,0,$data['ktpnikayah'],0,2,'L');
		$this->myPdf->SetFont('Arial','',12);
		//alamat ortu
		$this->myPdf->setXY($leftCont+$leftCont2,$top+5.85+$topCont);
		$this->myPdf->Cell(0,0,'Alamat',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+5.85+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+5.85+$topCont);
		$this->myPdf->Cell(0,0,'...........................................................................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+5.82+$topCont);
		$this->myPdf->SetFont('Arial','B',11);
		$this->myPdf->Cell(4.3,0,$data['alamatortu'],0,2,'L');
		$this->myPdf->SetFont('Arial','',12);
		//kecamatan
		
		$this->myPdf->setXY($leftCont+$leftCont2,$top+6.1+$topCont);
		$this->myPdf->Cell(0,0,'Kecamatan',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+6.1+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+6.1+$topCont);
		$this->myPdf->Cell(0,0,'...........................................................................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+6.08+$topCont);
		$this->myPdf->SetFont('Arial','B',11);
		$this->myPdf->Cell(4.3,0,$data['kecamatan'],0,2,'L');
		$this->myPdf->SetFont('Arial','',12);
		//Kab. /Kota
		
		$this->myPdf->setXY($leftCont+$leftCont2,$top+6.35+$topCont);
		$this->myPdf->Cell(0,0,'Kab./Kota',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1,$top+6.35+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+6.35+$topCont);
		$this->myPdf->Cell(0,0,'...........................................................................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2,$top+6.32+$topCont);
		$this->myPdf->SetFont('Arial','B',11);
		$this->myPdf->Cell(4.3,0,$data['kabkot'],0,2,'L');
		$this->myPdf->SetFont('Arial','',12);
		
		
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2+0.25,$top+6.85+$topCont);
		$this->myPdf->Cell(0,0,'...................................., Tanggal .......................................',0,2,'L');
		$this->myPdf->SetFont('Arial','B',11);
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2+0.25,$top+6.82+$topCont);
		$this->myPdf->Cell(1.75,0,$data['lokasisah'],0,2,'C');
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2+2.7,$top+6.82+$topCont);
		$this->myPdf->Cell(1.8,0,$data['tanggalsah'],0,2,'C');
		$this->myPdf->SetFont('Arial','',12);
		$this->myPdf->setXY(0.5,$top+7.65+$topCont);
		$this->myPdf->Cell(0,0,'                    Saksi I                                        Saksi II                             Penolong persalinan',0,2,'L');
		$this->myPdf->setXY(0.57,$top+9.45+$topCont);
		$this->myPdf->Cell(0,0,'(.............................................)     (.............................................)     (.............................................)',0,2,'L');
		$this->myPdf->SetFont('Arial','B',11);
		$this->myPdf->setXY(0.57,$top+9.42+$topCont);
		$this->myPdf->Cell(2.27,0,$data['saksi1'],0,2,'C');
		$this->myPdf->setXY(3,$top+9.42+$topCont);
		$this->myPdf->Cell(2.27,0,$data['saksi2'],0,2,'C');
		$this->myPdf->setXY(5.425,$top+9.42+$topCont);
		$this->myPdf->Cell(2.27,0,$data['penolper'],0,2,'C');
		$this->myPdf->SetFont('Arial','',12);
		
		$this->myPdf->Output();
	}
}
$data=array(
'hari' => 'Senin',
'tanggal' => "2 Juli",
'pukul' => "12.00",
'jenkel' => 2 ,//1=laki-laki 2=perempuan
'jenkelh' => 1 ,//1=tunggal 2=kembar 2 3=kembar 3 4=lainnya
'kelke' => "1 ( Satu )",
'berla' => "3,57",
'panbad' => "50,54",
'lokasi' => "Rumah idaman keluarga bahagia",
'di' => 6, //1=Rumah sakit, 2=Puskesmas, 3=Rumah bersalin, 4=Polindes, 5=Rumah bidan, 6=di
'alamat' => "Jalan menuju kebaikan kita semua",
'nanak' => "IQBAL",
'namaibu' => "Annisa Larasati",
'namaayah' => "Siapa hayo",
'umuribu' => 24,
'umurayah' => 25,
'pekerjaanibu' => "Petugas Rekam Medik",
'pekerjaanayah' => "Dokter Cinta",
'ktpnikibu' => "000000892839283989898921",
'ktpnikayah' => "000000700304003043040921",
'alamatortu' => "Rumah damai bersama bahagia",
'kecamatan' => "Semarang Selatan",
'kabkot' => "Semarang",
'saksi1' => "Jafar Abdurrahman",
'saksi2' => "Zulafa Harumbia Sari",
'penolper' => "Siti Husnul Khotimah",
'lokasisah' => "Yogyakarta",
'tanggalsah' => "15 July 2016"
);
$r = new Converter();
$r->suratKeteranganLahir($data);

?>