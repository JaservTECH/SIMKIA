<!DOCTYPE html><html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Halaman Utama</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>resource/dist_login/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url();?>resource/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>resource/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>resource/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SIM KIA</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#about" data-toggle="modal" data-target="#ModalAbout">About</a></li>
            <li><a href="#contact" data-toggle="modal" data-target="#ModalContact">Contact</a></li>
          </ul>
		</div><!--/.nav-collapse -->
	  </div>
	</nav>

	<!-- Modal -->
	<div class="modal fade" id="ModalAbout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Informasi</h4>
		  </div>
		  <div class="modal-body">
			SIM KIA merupakan Sistem Informasi Kesehatan Ibu dan Anak yang dimiliki RSKIA Bhakti Ibu Yogyakarta.  
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>
	
	<!-- Modal -->
	<div class="modal fade" id="ModalContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Kontak RSKIA Bhakti Ibu Yogyakarta</h4>
		  </div>
		  <div class="modal-body">
			(0274)376793 (Unit Ibu)
			<br>
			(0274)383008 (Unit Anak)
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>

	<div class="container">

      <div class="starter-template">
        <h1 style='color : #27408b'><b>SIM KIA</b></h1>
		<br>
        <p class="lead" style='color : #27408b;'>Selamat Datang di Sistem Informasi Manajemen Kesehatan Ibu dan Anak 
		   <br> RSKIA Bhakti Ibu Yogyakarta</p>      
		<div class="row">
			<div class="col-lg-12> 
				<div class="panel panel-default" style="max-width: 300px; margin-left:auto; margin-right:auto;">
					<?php
					if(isset($error))
						echo $error;
					?>
					
						<h3 class="form-signin-heading" style='color : #27408b;'>Silahkan Login</h3>
					
						<form action="<?php echo base_url();?>index.php/login/login_authenticate" method="post">
							  <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus> 
							  
							  <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
							  
							  <select class="form-control">
								<option>Admin</option>
								<option>Petugas</option>
								<option>Pasien</option>
							  </select>
							<div class="checkbox">
							<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
						</form>
					
				</div>
			</div> 
		</div>
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="resource/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url();?>resource/dist_login/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>resource/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
