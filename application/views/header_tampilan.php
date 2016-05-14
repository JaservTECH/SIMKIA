       <link href="<?php echo base_url();?>resource/dist/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo base_url();?>resource/dist/js/jquery-2.2.0.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>resource/dist/js/bootstrap.min.js"></script>
        <style>
            .dropdown-submenu{
            			position:relative;
            		}
            		.dropdown-submenu .dropdown-menu{
            			top:0;
            			left:100%;
            			margin-top:-1px;
            		}
        </style>
        <script>
            function reset (){
            			$("#sub-1").next('ul').fadeOut();
            			$("#sub-2").next('ul').fadeOut();
						$("#sub-3").next('ul').fadeOut();
            			$("#sub-4").next('ul').fadeOut();
            		}
            		function tryS(b){
            			if(b==1){
            				$("#sub-1").next('ul').fadeIn();
            				$("#sub-2").next('ul').fadeOut();	
            			}
						if(b==2){
            				$("#sub-2").next('ul').fadeIn();
            				$("#sub-1").next('ul').fadeOut();	
            			}
						if(b==3){
            				$("#sub-3").next('ul').fadeIn();
            				$("#sub-4").next('ul').fadeOut();	
            			}
						else
            			{
            				$("#sub-4").next('ul').fadeIn();
            				$("#sub-3").next('ul').fadeOut();	
            			}
            		}
            		
            		$(document).ready(function(){
            		  $('.dropdown-submenu a.navbar').on("click",function(e){
            		  	e.stopPropagation();
            			e.preventDefault();
            		  });
            		});
        </script>
    </head><body>
        <div class="container">
            <div style="width:100%;">
                <img style="width:100%; height:300px; background-color:white;" src="">
            </div>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?php echo base_url();?>index.php/Home">Home</a>
                            </li>
                            <li class="dropdown">
                                <a onclick="reset();" class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true" href="#" data-toggle="dropdown">Informasi Kesehatan<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a id="sub-1" onclick="tryS(1);" class="navbar" href="#" tabindex="-1" width="0.5 cm">Ibu<span class="caret"></span></a>
                                        <ul class="dropdown-menu" >
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/info_hamil">Ibu Hamil</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/info_bersalin">Ibu Bersalin</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/info_nifas">Ibu Nifas</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a id="sub-2" onclick="tryS(2);" class="navbar" href="#" tabindex="-1">Anak<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/info_bayi">Bayi Baru Lahir (Neonatus)</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/info_bayi_lanjutan">Usia 29 hari-5 tahun</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/info_gizi">Gizi dan Perkembangan</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a onclick="reset();" class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true" href="#" data-toggle="dropdown">Catatan Kesehatan<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a id="sub-3" onclick="tryS(3);" class="navbar" href="#" tabindex="-1">Ibu<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/catatan_hamil">Catatan Kehamilan</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/catatan_nifas">Catatan Nifas</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a id="sub-4" onclick="tryS(4);" class="navbar" href="#" tabindex="-1">Anak<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/catatan_periksa_anak">Pemeriksaan Anak</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/imunisasi.php">Imunisasi</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a onclick="reset();" class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true" href="#" data-toggle="dropdown">Grafik Perkembangan<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo base_url();?>index.php/kms">Kartu Menuju Sehat</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/surat_keterangan_lahir">Surat Keterangan Lahir</a>
                            </li>
							<li>
								<a href="<?php echo base_url();?>index.php/menyambut_persalinan.php">Rencana Persalinan</a>
							</li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true" href="#" data-toggle="dropdown">Pevita Pearce, Ny<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Keluar</a>
                                    </li>
                                </ul>
                            </li>			
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
        </div>