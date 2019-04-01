<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page" >
			<div class="header_guru">
				<div class="" align="left">
					<a href="profil-murid.php">
						<i class="fas fa-arrow-left"></i> Absensi
					</a>	
				</div>
			</div>
			<div class="absensi">
				<div class="banner">
					<p>
						Absen dapat dilakukan dengan melakukan scan QR Code atau foto ketika belajar!
					</p>
				</div>
				<div class="container">
					<div class="scan-barcode">
						
					</div>
					<small>Mencari kode QR...</small>
				</div>
				<div class="btn-outline-blue" style="margin-top: 15px;">
					<button type="button" class="btn "><i class="fas fa-camera"></i> Simpan</button>
				</div>
			</div>
		</div>
	</center>
</div>

<?php
include "footer.php";
?>