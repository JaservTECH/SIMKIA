<!DOCTYPE html>
<html>
	<div class="section">
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="#">Catatan Kesehatan</a></li>
					<li><a href="#">Ibu</a></li>
					<li class="active"><a href="#">Catatan Kehamilan</a></li>
				</ul>
			</div>
		</div>
		<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
			CATATAN KEHAMILAN
			</div>
		</div>
		<div class="panel panel-info">
				<div class="panel-heading">Informasi Kehamilan Saat Ini</div>
					<div class="panel-body">
						<div class="row">
						<div class="col-md-4">
							<div class="panel-body">
								<table class="table table-striped table-condensed">
									<tbody>
									<?php echo $content1; ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel-body">
								<table class="table table-striped table-condensed">
									<tbody>
										<tr>
											<td>Riwayat Kehamilan :</td>
											<td>
												<table class="table table-condensed">
													<tbody> 
													<?php echo $content2; ?>
													</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-md-4">
							<div class="panel-body">
								<table class="table table-striped table-condensed">
									<tbody>
										<?php echo $content3; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
		</div>
			<div class="panel panel-info">
				<div class="panel-heading">Riwayat Imunisasi TT</div>
					<div class="panel-body">
						<table class="table table-striped table-condensed table-bordered">
							<tbody>
								<tr>
									<td>Status TT</td>
									<td>TT 1</td>
									<td>TT 2</td>
									<td>TT 3</td>
									<td>TT 4</td>
									<td>TT 5</td>
								</tr>
								<tr>
									<?php echo $content4; ?>
								</tr>
							</tbody>
						</table>
					</div>
			</div>
			<div class="panel panel-info">
				<div class="panel-heading">Hasil Pemeriksaan Rutin</div>
					<div class="panel-body">
						<table class="table table-striped table-condensed table-bordered">
							<thead>
								<tr>
									<td>Tanggal Kunjungan</td>
									<td>Tekanan Darah</td>
									<td>Berat Badan</td>
									<td>Umur Kehamilan</td>
									<td>Tinggi Fundus</td>
									<td>Letak Janin</td>
									<td>Denyut Jantung Janin</td>
									<td>Kaki Bengkak</td>
									<td>Keluhan Sekarang</td>
									<td>Hasil Laboratorium</td>
									<td>Nasihat yang Disampaikan</td>
									<td>Jadwal Kembali</td>
								</tr>
							</thead>
							<tbody>
								<?php echo $content5; ?>
							</tbody>								
					</div>
			</div>
		</div>
	</body>
</html>