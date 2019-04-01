<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<div class="container">
					<a href="detail-pesanan.php"><i class="fas fa-chevron-left"></i> </a> Gunakan Kupon/Promo
				</div>				
			</div>
			<div class="konten-kode-kupon">
				<div class="container">
					<div class="input-kode">
						<div class="row">
							<div class="col-8 col-sm-8 col-md-8">
								<input type="text" class="form-control" id="" aria-describedby="" placeholder="Kode promo">
							</div>
							<div class="col-4 col-sm-4 col-md-4" align="right">
								<button type="submit" class="btn ">Cari</button>
							</div>
						</div>
					</div>
					<h6 align="left">Kuponku</h6>
					<div class="list-kupon">
						<h5>Upss</h5>
						<i class="far fa-frown "></i>
						<h6>Kamu tidak memiliki kupon :'(</h6>
						<button type="button" class="btn">Tukar Kupon</button>
					</div>
				</div>
			</div>
			
		</div>
	</center>
</div>

<?php
include "footer.php";
?>