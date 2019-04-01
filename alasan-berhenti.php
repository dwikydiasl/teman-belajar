<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<div class="">
					<a href="detail-guru.php"><i class="fas fa-chevron-left"></i> </a> Berhenti Berlangganan
				</div>				
			</div>
			<form>		
				<div class="container">
					<div class="bg-white">
						<h5>Ups</h5>
						<p>Kenapa kamu ingin berhenti berlangganan?</p>
						<textarea class="form-control" id="" placeholder="Berikanlah alasanya" rows="3"></textarea>

					</div>
				</div>
				<div class="menu2" align="center">
					<div class="bg-menu2" style="padding-bottom: 20px;">
						<div class="container">
							<div class="btn-pesan-les">
								<a href="konfirmasi-pembayaran.php" type="submit" class="btn btn-biru">Selanjutnya</a>
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