<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header_guru">
				<div class="row">
					<div class="col-4 col-sm-4 col-md-4" align="left">
						<a href="menu-dashboard.php">
							<i class="fas fa-bars"></i>
						</a>						
					</div>
					<div class="col-4 col-sm-4 col-md-4">
						<img src="assets/img/icon.png">
					</div>
					<div class="col-4 col-sm-4 col-md-4" align="right">
						<a href="notifikasi.php">
							<i class="fas fa-bell"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="bg-grey">
				<div class="banner">
					<p>
						Selamat pagi, <br> <b> John Dae ! </b>
					</p>
				</div>
				<div class="container">
					<div class="row " style="margin-top: -45px">
						<div class="col-6 col-sm-6 col-md-6">
							<div class="box-white">
								<small>Murid</small>
								<h4>5</h4>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-6">
							<div class="box-white">
								<small>Penilaian</small>
								<h4>4.5</h4>
							</div>
						</div>
					</div>
					<div class="box-white" >
						<div class="container">
							<div class="row">
								<div class="col-6 col-sm-6 col-md-6" align="left">
									<small>Saldo</small>
									<h6>Rp. 1.500.000</h6>
								</div>
								<div class="col-6 col-sm-6 col-md-6" align="right">
									<div class="btn-biru2" style="margin-top: 20px;">
										<a href="tarik-saldo-guru.php" >Tarik</a>
									</div>
								</div>
							</div>
						</div>						
					</div>

					<h6 align="left">Siswa Baru</h6>

					<div class="box-white">
						<div class="container siswa-baru">
							<div class="row">
								<div class="col-8 col-sm-8 col-md-8">
									<div style="float: left;">
										<img src="assets/img/profil2.jpg">
									</div>
									<div align="left">
										<h6>Bagas</h6>
										<label>Matematika</label>
									</div>
								</div>
								<div class="col-4 col-sm-4 col-md-4">
									<small>Kelas</small>
									<h6>X</h6>
								</div>
							</div>
							<div class="row">
								<div class="col-8 col-sm-8 col-md-8" align="left">
									<small>Hari tanggal pertemuan</small>
									<h6>Selasa, 8 Agustus 2018</h6>
								</div>
								<div class="col-4 col-sm-4 col-md-4">
									<small>Jam</small>
									<h6>16.00</h6>
								</div>
							</div>
							<div class="btn-biru2" align="right" style="margin-top: 20px;">
								<a href="murid-baru.php" class="">Detail</a>
							</div>
						</div>
					</div>

					<h6 align="left">Siswa Aktif</h6>

					<div class="">
						<div class="siswa-aktif">
							<a href="profil-murid.php">
								<div class="row">
									<div class="col-10 col-sm-10 col-md-10">
										<div style="float: left;">
											<img src="assets/img/profil2.jpg">
										</div>
										<div align="left">
											<h6>Bagas</h6>
											<label>Matematika</label>
										</div>
									</div>
									<div class="col-2 col-sm-2 col-md-2" style="padding-top: 10px;">
										<i class="fas fa-chevron-right"></i>
									</div>
								</div>
							</a>
						</div>

						<div class="siswa-aktif">
							<a href="profil-murid.php">
								<div class="row">
									<div class="col-10 col-sm-10 col-md-10">
										<div style="float: left;">
											<img src="assets/img/profil2.jpg">
										</div>
										<div align="left">
											<h6>Bagas</h6>
											<label>Matematika</label>
										</div>
									</div>
									<div class="col-2 col-sm-2 col-md-2" style="padding-top: 10px;">
										<i class="fas fa-chevron-right"></i>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</center>
</div>
<?php
include "footer.php";
?>