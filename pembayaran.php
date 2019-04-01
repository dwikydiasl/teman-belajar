<?php
include "header.php";
?>
<style type="text/css">
	.bg-white h6{
		padding-left: 15px;
	}
</style>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<div class="">
					<a href="detail-pesanan.php"><i class="fas fa-chevron-left"></i> </a> Pembayaran
				</div>				
			</div>
			
			<div class="">
				<div class="bg-white">
					<h6 align="left">Pilih metode pembayaran</h6>
					<div class="daftar-bank" align="left">
						<div class="container">
							<a href="detail-pembayaran.php">
								<img src="assets/img/icon/bca.png"> Transfer ke Bank BCA
							</a>
						</div>						
					</div>
					<div class="daftar-bank" align="left">
						<div class="container">
							<a href="detail-pembayaran.php">
								<img src="assets/img/icon/mandiri.png"> Transfer ke Bank Mandiri
							</a>
						</div>						
					</div>
					<div class="daftar-bank" align="left">
						<div class="container">
							<a href="detail-pembayaran.php">
								<img src="assets/img/icon/bri.png"> Transfer ke Bank BRI
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