<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<a href="profil.php"><i class="fas fa-chevron-left"></i> </a> Saldoku
			</div>
			
			<div class="bg-white">
				<div class="jml-saldo">
					<div class="container">
						<div class="row">
							<div class="col-8 col-sm-8 col-md-8" align="left">
								<small>Total Saldo</small>
								<h5>Rp 150.000</h5>
							</div>
							<div class="col-4 col-sm-4 col-md-4">
								<div class="btn-outline-blue" style="padding-top: 15px;">
									<a class="btn btn-sm" href="tarik-saldo.php" role="button">Tarik</a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<div class="cari-saldo">
					<div class="container">
						<div class="row">
							<div class="col-4 col-sm-4 col-md-4">

							</div>
							<div class="col-4 col-sm-4 col-md-4">

							</div>
							<div class="col-4 col-sm-4 col-md-4">
								<div class="btn-biru" style="padding-top: 15px;">
									<button class="btn btn-sm" type="submit" role="button">Cari</button>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="hasil-cari-saldo">
					<div class="container">
						<div class="list-saldo" align="left">
							<a href="detail-transaksi.php">
								<small>21 November 2018 | Invoice 123456</small>
								<div class="row">
									<div class="col-10 col-sm-10 col-md-10">
										<p>Pemesanan Guru :<b> Gal Gadot</b></p>
									</div>
									<div class="col-2 col-sm-2 col-md-2" align="right">
										<i class="fas fa-chevron-right"></i>
									</div>
								</div>
							</a>
							<div class="blm-konfirmasi">
								Belum Dikonfimasi
							</div>
						</div>

						<div class="list-saldo" align="left">
							<a href="detail-transaksi.php">
								<small>21 November 2018 | Invoice 123456</small>
								<div class="row">
									<div class="col-10 col-sm-10 col-md-10">
										<p>Pemesanan Guru :<b> Gal Gadot</b></p>
									</div>
									<div class="col-2 col-sm-2 col-md-2" align="right">
										<i class="fas fa-chevron-right"></i>
									</div>
								</div>
							</a>
							<div class="dibatalkan">
								Dibatalkan
							</div>
						</div>

						<div class="list-saldo" align="left">
							<a href="detail-transaksi.php">
								<small>21 November 2018 | Invoice 123456</small>
								<div class="row">
									<div class="col-10 col-sm-10 col-md-10">
										<p>Pemesanan Guru :<b> Gal Gadot</b></p>
									</div>
									<div class="col-2 col-sm-2 col-md-2" align="right">
										<i class="fas fa-chevron-right"></i>
									</div>
								</div>
							</a>
							<div class="berhasil">
								Berhasil
							</div>
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