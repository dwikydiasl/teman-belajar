<?php
include "header.php";
?>
<style type="text/css">
.list-bottom p{
	margin-bottom: -7px;
}
</style>
<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<div class="">
					<a href="saldoku.php"><i class="fas fa-chevron-left"></i> </a> Detil Transaksi
				</div>				
			</div>
			<form>		
				<div class="">
					<div class="bg-white">
						<div class="list-bottom">
							<div class="container">
								<div class="row title" align="left">
									<div class="col-6 col-sm-6 col-md-6">
										<small>Status</small>
										<h6>Belum Dikonfirmasi</h6>
									</div>
									<!-- Tampilkan jika blm melakukan pembayaran -->
									<div class="col-6 col-sm-6 col-md-6 tgl-bayar">
										<small>Batas  Pembayaran</small>
										<h6>12 Januari 2019</h6>
									</div>
								</div>	
							</div>
						</div>
						<div class="container">
							<div class="row title" align="left">
								<div class="col-6 col-sm-6 col-md-6">
									<small>Tanggal pemesanan</small>
									<h6>14 Januari 2019</h6>
								</div>
								<div class="col-6 col-sm-6 col-md-6 ">
									<small>Nama Siswa</small>
									<h6>Daenerys Targaryen</h6>
								</div>
							</div>	
						</div>
						<div class="container">
							<div class="row title" align="left">
								<div class="col-6 col-sm-6 col-md-6">
									<small>Nama Tentor</small>
									<h6>Robert Baratheon</h6>
								</div>
								<div class="col-6 col-sm-6 col-md-6 ">
									<small>Nomor Telepon</small>
									<h6>08123456789</h6>
								</div>
							</div>	
						</div>
						<div class="list-bottom title">
							<div class="container" align="left">
								<small>Alamat Les</small>
								<h6>
									Jalan Raden Mas Said No. 85, Punggawan, Banjarsari, Punggawan, Banjarsari, Kota Surakarta, Jawa Tengah 57132
								</h6>
							</div>
						</div>
						<div class="list-bottom" align="left">
							<div class="container">
								<p>Invoice : 123456789</p>
							</div>
						</div>
						<div class="detail-pembayaran">
							<div class="container">

								<!-- Tampilkan jika melakukan pembayaran dengan saldo-->

								<div class="detail-tagihan" align="left">
									<h6>Les Privat SMP</h6>
									<div class=" tagihan" style="margin-top: 20px;">
										<div class="list-bottom">
											<div class="row" style="margin-bottom: 20px;">
												<div class="col-8  col-sm-8 col-md-8" align="left">
													<h6>Matematika</h6>
													<small>2 Pertemuan x Rp 55.000</small>
												</div>
												<div class="col-4 col-sm-4 col-md-4 harga" align="right" style="padding-top: 13px;">
													<small><span>Rp</span> 110.000</small>
												</div>								
											</div>
											<div class="row">
												<div class="col-8  col-sm-8 col-md-8" align="left">
													<h6>Bahasa Indonesia</h6>
													<small>4 Pertemuan x Rp 55.000</small>
												</div>
												<div class="col-4 col-sm-4 col-md-4 harga" align="right" style="padding-top: 13px;">
													<small><span>Rp</span> 220.000</small>
												</div>								
											</div>
										</div>

										<div class="list-bottom">
											<div class="row">
												<div class="col-8  col-sm-8 col-md-8" align="left">
												</div>
												<div class="col-4 col-sm-4 col-md-4 harga" align="right">
													<small><span>Rp</span> 330.000</small>
												</div>								
											</div>
											<div class="row">
												<div class="col-8  col-sm-8 col-md-8" align="left">
													<small>Menggunakan Saldo</small>
												</div>
												<div class="col-4 col-sm-4 col-md-4 harga" align="right">
													<small><span>Rp</span> 220.000</small>
												</div>								
											</div>
										</div>
										<div class="row">
											<div class="col-8  col-sm-8 col-md-8" align="left" style="padding-top: 15px">
												<h6>Menggunakan Saldo</h6>
											</div>
											<div class="col-4 col-sm-4 col-md-4 harga" align="right">
												<small><span>Rp</span> 220.000</small>
											</div>								
										</div>
									</div>
								</div>

								<!-- Tampilkan jika blm melakukan pembayaran-->

								<div class="detail-tagihan" align="left">
									<h6>Les Privat SMP</h6>
									<div class=" tagihan" style="margin-top: 20px;">
										<div class="list-bottom">
											<div class="row" style="margin-bottom: 20px;">
												<div class="col-8  col-sm-8 col-md-8" align="left">
													<h6>Matematika</h6>
													<small>2 Pertemuan x Rp 55.000</small>
												</div>
												<div class="col-4 col-sm-4 col-md-4 harga" align="right" style="padding-top: 13px;">
													<small><span>Rp</span> 110.000</small>
												</div>								
											</div>
											<div class="row">
												<div class="col-8  col-sm-8 col-md-8" align="left">
													<h6>Bahasa Indonesia</h6>
													<small>4 Pertemuan x Rp 55.000</small>
												</div>
												<div class="col-4 col-sm-4 col-md-4 harga" align="right" style="padding-top: 13px;">
													<small><span>Rp</span> 220.000</small>
												</div>								
											</div>
										</div>
										<div class="row">
											<div class="col-8  col-sm-8 col-md-8" align="left" style="padding-top: 15px">
												<h6>Total Tagihan</h6>
											</div>
											<div class="col-4 col-sm-4 col-md-4 harga" align="right">
												<small><span>Rp</span> 330.000</small>
											</div>								
										</div>
									</div>
								</div>

							</div>
						</div>
						


					</div>
				</div>
				<div class="menu2" align="center">
					<div class="bg-menu2" style="padding-bottom: 20px;">
						<div class="container">
							<div class="btn-pesan-les">
								<a href="konfirmasi-pembayaran.php" type="submit" class="btn btn-biru">Konfirmasi Pembayaran</a>
							</div>

						</div>						
					</div>
				</div>
			</form>
		</div>
	</center>
</div>

<?php
include "footer.php";
?>