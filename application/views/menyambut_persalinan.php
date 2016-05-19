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
		//$this->myPdf->Cell(40,11,'MENYAMBUT PERSALINAN');	
		$this->myPdf->setXY($left,$top);
		$this->myPdf->Cell(7.5,0,'MENYAMBUT PERSALINAN',0,2,'C');
		$this->myPdf->SetFont('Arial','',12);
		$this->myPdf->setXY($left,$top+0.3);
		$this->myPdf->Cell(7.5,0,'Agar aman dan selamat',0,2,'C');
		
		//Saya : .............
		$this->myPdf->setXY($leftCont,$top+0.6+$topCont);
		$this->myPdf->Cell(0,0,'Saya',0,2,'L');	
		$this->myPdf->setXY($leftCont+0.7,$top+0.6+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');	
		$this->myPdf->setXY($leftCont+1.0,$top+0.6+$topCont);
		$this->myPdf->Cell(0,0,'.................................................................................................................',0,2,'L');	
		$this->myPdf->setXY($leftCont+1.1,$top+0.55+$topCont);
		$this->myPdf->Cell(0,0,$data['namaibu'],0,2,'L');
		$this->myPdf->SetFont('Arial','',12);
		
		//Alamat : ...........
		$this->myPdf->setXY($leftCont,$top+0.85+$topCont);
		$this->myPdf->Cell(0,0,'Alamat',0,2,'L');	
		$this->myPdf->setXY($leftCont+0.7,$top+0.85+$topCont);
		$this->myPdf->Cell(0,0,':',0,2,'L');	
		$this->myPdf->setXY($leftCont+1.0,$top+0.85+$topCont);
		$this->myPdf->Cell(0,0,'.................................................................................................................',0,2,'L');	
		$this->myPdf->setXY($leftCont+1.1,$top+0.80+$topCont);
		$this->myPdf->Cell(0,0,$data['alamat'],0,2,'L');
		$this->myPdf->SetFont('Arial','',12);
		
		//Memberikan kepercayaan kepada nama-nama ini untuk membantu persalinan saya 
		//agar aman dan selamat, yang diperkirakan pada, Bulan: .....................Tahun: ...........
		
		$leftCont=1.15;
		$this->myPdf->SetFont('Arial','',12);
		$this->myPdf->setXY($leftCont,$top+1.10+$topCont);
		$this->myPdf->Cell(0,0,'Memberikan kepercayaan kepada nama-nama ini untuk membantu persalinan saya ',0,2,'L');
		$this->myPdf->setXY($leftCont,$top+1.35+$topCont);
		$this->myPdf->Cell(0,0,'agar aman dan selamat, yang diperkirakan pada........................................................',0,2,'L');
		$this->myPdf->setXY($leftCont+4,$top+1.30+$topCont);
		$this->myPdf->Cell(0,0,$data['HPL'],0,2,'L'); //HPL=Hari Perkiraan Lahir
	
		//Penolong persalinan:
		//1. Dokter/Bidan: .........................................................................
		//2. Dokter/Bidan: .........................................................................
		$leftCont2=1.5;
		$this->myPdf->SetFont('Arial','',12);
		$this->myPdf->setXY($leftCont+$leftCont2,$top+1.85+$topCont);
		$this->myPdf->Cell(0,0,'Penolong persalinan:',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2,$top+2.1+$topCont);
		$this->myPdf->Cell(0,0,'1.',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+0.7,$top+2.1+$topCont);
		$this->myPdf->Cell(0,0,'/',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+1.3,$top+2.1+$topCont);
		$this->myPdf->Cell(0,0,': .........................................................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+1.5,$top+2.05+$topCont);
		$this->myPdf->Cell(0,0,$data['namatenakes1'],0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+0.7,$top+2.35+$topCont);
		$this->myPdf->Cell(0,0,'/',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+1.3,$top+2.35+$topCont);
		$this->myPdf->Cell(0,0,': .........................................................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+1.5,$top+2.30+$topCont);
		$this->myPdf->Cell(0,0,$data['namatenakes2'],0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2,$top+2.35+$topCont);
		$this->myPdf->Cell(0,0,'2.',0,2,'L');
		//tenaga kesehatan 1
		$this->myPdf->setXY($leftCont+$leftCont2+0.2,$top+2.1+$topCont);
		if($data['tenakes1'] == 1)
		{
			$this->myPdf->SetFont('Arial','',11);
			$this->myPdf->Cell(0.6,0,'Dokter',0,2,'L');
			$this->myPdf->SetFont('Arial','',11);
		}
		else
			$this->myPdf->Cell(0.5,0,'Dokter',1,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+0.8,$top+2.1+$topCont);
		if($data['tenakes1'] == 2)
		{
			$this->myPdf->SetFont('Arial','',11);
			$this->myPdf->Cell(0.5,0,'Bidan',0,2,'L');
			$this->myPdf->SetFont('Arial','',11);
		}
		else
			$this->myPdf->Cell(0.5,0,'Bidan',1,2,'L');
		
		//tenaga kesehatan 2
		$this->myPdf->setXY($leftCont+$leftCont2+0.2,$top+2.35+$topCont);
		if($data['tenakes2'] == 1)
		{
			$this->myPdf->SetFont('Arial','',11);
			$this->myPdf->Cell(0.6,0,'Dokter',0,2,'L');
			$this->myPdf->SetFont('Arial','',11);
		}
		else
			$this->myPdf->Cell(0.5,0,'Dokter',1,2,'L');
		
		$this->myPdf->setXY($leftCont+$leftCont2+0.8,$top+2.35+$topCont);
		if($data['tenakes2'] == 2)
		{
			$this->myPdf->SetFont('Arial','',11);
			$this->myPdf->Cell(0.5,0,'Bidan',0,2,'L');
			$this->myPdf->SetFont('Arial','',11);
		}
		else
			$this->myPdf->Cell(0.5,0,'Bidan',1,2,'L');

		//Untuk Dana Persalinan, disiapkan sendiri/ditanggung JKN/
		//dibantu oleh:
		//.....................................................................................................
		$this->myPdf->setXY($leftCont+$leftCont2,$top+2.85+$topCont);
		$this->myPdf->Cell(0,0,'Untuk Dana Persalinan,',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+1.65,$top+2.85+$topCont);
		if($data['dana'] == 1) //INI IF NYA BELUM JADIIIII!!!!!!
		{
			$this->myPdf->SetFont('Arial','',11);
			$this->myPdf->Cell(0.5,0,'disiapkan sendiri /',0,2,'L');
			$this->myPdf->SetFont('Arial','',11);
		}
		else
			$this->myPdf->Cell(1,0,'disiapkan sendiri /',0,2,'L');
		
		$this->myPdf->setXY($leftCont+$leftCont2+2.9,$top+2.85+$topCont);
		if($data['dana'] == 2)
		{
			$this->myPdf->SetFont('Arial','',11);
			$this->myPdf->Cell(0.5,0,'ditanggung JKN /',0,2,'L');
			$this->myPdf->SetFont('Arial','',11);
		}
		else
			$this->myPdf->Cell(1,0,'ditanggung JKN /',0,2,'L');
		
		$this->myPdf->setXY($leftCont+$leftCont2+4.1,$top+2.85+$topCont);
		if($data['dana'] == 3)
		{
			$this->myPdf->SetFont('Arial','',11);
			$this->myPdf->Cell(0.5,0,'dibantu',0,2,'L');
			$this->myPdf->SetFont('Arial','',11);
		}
		else
			$this->myPdf->Cell(1,0,'dibantu',0,2,'L');
		
		$this->myPdf->setXY($leftCont+$leftCont2,$top+3.1+$topCont);
		$this->myPdf->Cell(0,0,'oleh : ......................................................................................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+0.5,$top+3.05+$topCont);
		$this->myPdf->Cell(0,0,$data['wali'],0,2,'L');
		
		//Untuk kendaraan yang digunakan
		$this->myPdf->setXY($leftCont+$leftCont2,$top+3.6+$topCont);
		$this->myPdf->Cell(0,0,'Untuk kendaraan yang digunakan oleh:',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2,$top+3.85+$topCont);
		$this->myPdf->Cell(0,0,'1.  ...................................................   HP ................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+0.3,$top+3.80+$topCont);
		$this->myPdf->Cell(0,0,$data['kendaraan1'],0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+2.8,$top+3.80+$topCont);
		$this->myPdf->Cell(0,0,$data['HPkendaraan1'],0,2,'L');		
		$this->myPdf->setXY($leftCont+$leftCont2,$top+4.1+$topCont);
		$this->myPdf->Cell(0,0,'2.  ...................................................   HP ................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+0.3,$top+4.05+$topCont);
		$this->myPdf->Cell(0,0,$data['kendaraan2'],0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+2.8,$top+4.05+$topCont);
		$this->myPdf->Cell(0,0,$data['HPkendaraan2'],0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2,$top+4.35+$topCont);
		$this->myPdf->Cell(0,0,'3.  ...................................................   HP ................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+0.3,$top+4.30+$topCont);
		$this->myPdf->Cell(0,0,$data['kendaraan3'],0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+2.8,$top+4.30+$topCont);
		$this->myPdf->Cell(0,0,$data['HPkendaraan3'],0,2,'L');
		
		//Metode KB setelah melahirkan yang dipilih:
		$this->myPdf->setXY($leftCont+$leftCont2,$top+4.85+$topCont);
		$this->myPdf->Cell(0,0,'Metode KB setelah melahirkan yang dipilih:',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2,$top+5.1+$topCont);
		$this->myPdf->Cell(0,0,'......................................................................................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2,$top+5.05+$topCont);
		$this->myPdf->Cell(0,0,$data['KB'],0,2,'L');
		
		//Untuk sumbangan darah (golongan darah ........ ) dibantu oleh:
		$this->myPdf->setXY($leftCont+$leftCont2,$top+5.35+0.25+$topCont);
		$this->myPdf->Cell(0,0,'Untuk sumbangan darah (golongan darah ....... ) dibantu oleh:',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+2.95,$top+5.30+0.25+$topCont);
		$this->myPdf->Cell(0,0,$data['goldar'],0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2,$top+5.6+0.25+$topCont);
		$this->myPdf->Cell(0,0,'1.  ...................................................   HP ................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+0.3,$top+5.55+0.25+$topCont);
		$this->myPdf->Cell(0,0,$data['pendonor1'],0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+2.8,$top+5.55+0.25+$topCont);
		$this->myPdf->Cell(0,0,$data['HPpendonor1'],0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2,$top+5.85+0.25+$topCont);
		$this->myPdf->Cell(0,0,'2.  ...................................................   HP ................................',0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+0.3,$top+5.80+0.25+$topCont);
		$this->myPdf->Cell(0,0,$data['pendonor2'],0,2,'L');
		$this->myPdf->setXY($leftCont+$leftCont2+2.8,$top+5.80+0.25+$topCont);
		$this->myPdf->Cell(0,0,$data['HPpendonor2'],0,2,'L');

		$leftCont2=0.28;
		$leftCont2Sub1=1.2;
		$leftCont2Sub2=0.2;
		//autentikasi
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2+0.25,$top+6.85+$topCont);
		$this->myPdf->Cell(0,0,'Yogyakarta, ............................',0,2,'R');
		$this->myPdf->SetFont('Arial','',11);
		$this->myPdf->setXY($leftCont+$leftCont2+$leftCont2Sub1+$leftCont2Sub2+3.5,$top+6.80+$topCont);
		$this->myPdf->Cell(1.8,0,$data['tanggalsah'],0,2,'C');
		$this->myPdf->SetFont('Arial','',11);
		$this->myPdf->setXY(1.2,$top+7.15+$topCont);
		$this->myPdf->Cell(0,0,'                    Mengetahui,                                Dokter/Bidan                      		       Saya',0,2,'L');
		$this->myPdf->setXY(1.35,$top+7.4+$topCont);
		$this->myPdf->Cell(2.4,0,'Suami/Orang Tua/Wali',0,2,'C');
		$this->myPdf->setXY(1.5,$top+8.45+$topCont);
		$this->myPdf->Cell(0,0,'(............................................)     (.............................................)     (..........................................)',0,2,'L');
		$this->myPdf->SetFont('Arial','',11);
		$this->myPdf->setXY(1.37,$top+8.40+$topCont);
		$this->myPdf->Cell(2.27,0,$data['wali'],0,2,'C');
		$this->myPdf->setXY(3,$top+8.40+$topCont);
		$this->myPdf->Cell(3.3,0,$data['namatenakes1'],0,2,'C');
		$this->myPdf->setXY(5.75,$top+8.40+$topCont);
		$this->myPdf->Cell(2.27,0,$data['namaibu'],0,2,'C');
		$this->myPdf->SetFont('Arial','',12);
		$this->myPdf->Output();
	}
}
$data=array(
'HPL' => '1 Desember 2016',
'alamat' => "Jalan Merah Putih 34 Jakarta",
'namaibu' => "Citra Kirana",
'tenakes1' => 1,//1=dokter; 2= bidan
'tenakes2' => 1,
'namatenakes1' => "Ely Susianingsih",
'namatenakes2' => "",
'dana' => 3, //1=sendiri; 2=ditanggung JKN; 3=dibantu pihak lain
'wali' => "Joko Widodo",
'kendaraan1' => "Bp. Mardiyanto", //penyedia kendaraan/ambulan
'kendaraan2' => "-",
'kendaraan3' => "-",
'HPkendaraan1' => "085643521841",
'HPkendaraan2' => "-",
'HPkendaraan3'=> "-",
'KB' => "Suntik",
'goldar' => "AB",
'pendonor1' => "Dita Ratnasari",
'pendonor2' => "Marta Putri",
'HPpendonor1' => "0852345678",
'HPpendonor2' => "0852098764",
'tanggalsah' => "16 Maret 2016",
);
$r = new Converter();
$r->suratKeteranganLahir($data);

?>