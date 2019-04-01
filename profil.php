<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header">
				<div class="header3" align="left">
					<a href=""><i class="fas fa-chevron-left"></i> </a> <b>Profil</b>
				</div>	
			</div>
			<div class="container">
				<div class="info-profil">
					<div class="container">
						<div class="row avatar">
							<div class="col-3 col-sm-3 col-md-3 ">
								<img src="assets/img/profil2.jpg">
							</div>
							<div class="col-9 col-sm-9 col-md-9" align="left" style="padding-top: 5px;">
								<h6>Daenerys Targaryen</h6>
								<small>SMAN 1 King's Landing</small>
							</div>
						</div>
						<div class="row info-point">
							<div class="col-6 col-sm-6 col-md-6 list">
								<small>Point</small>
								<h6>5241 pts</h6>
							</div>
							<div class="col-6 col-sm-6 col-md-6" >
								<small>Saldo</small>
								<h6>Rp 150.000,-</h6>
							</div>
						</div>
					</div>
					
					<div class="barcode">
						<img src="assets/img/barcode.jpg">
					</div>
				</div>
			</div>

			<div class="container" align="left">
				<ul class="menu-profil" >
					<li>
						<a href="guruku.php"> 
							<div class="row">
								<div class="col-10 col-sm-10 col-md-10">
									Guruku
								</div>
								<div class="col-2 col-sm-2 col-md-2" align="right">
									<i class="fas fa-chevron-right"></i>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href="saldoku.php"> 
							<div class="row">
								<div class="col-10 col-sm-10 col-md-10">
									Saldo
								</div>
								<div class="col-2 col-sm-2 col-md-2" align="right">
									<i class="fas fa-chevron-right"></i>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href="riwayat-les.php"> 
							<div class="row">
								<div class="col-10 col-sm-10 col-md-10">
									Riwayat Les
								</div>
								<div class="col-2 col-sm-2 col-md-2" align="right">
									<i class="fas fa-chevron-right"></i>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href="bayar.php"> 
							<div class="row">
								<div class="col-10 col-sm-10 col-md-10">
									Pembayaran
								</div>
								<div class="col-2 col-sm-2 col-md-2" align="right">
									<i class="fas fa-chevron-right"></i>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href="edit-profil.php"> 
							<div class="row">
								<div class="col-10 col-sm-10 col-md-10">
									Edit Profil
								</div>
								<div class="col-2 col-sm-2 col-md-2" align="right">
									<i class="fas fa-chevron-right"></i>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href="pusat-bantuan.php"> 
							<div class="row">
								<div class="col-10 col-sm-10 col-md-10">
									Pusat Bantuan
								</div>
								<div class="col-2 col-sm-2 col-md-2" align="right">
									<i class="fas fa-chevron-right"></i>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href=""> 
							<div class="row">
								<div class="col-10 col-sm-10 col-md-10">
									Keluar
								</div>
								<div class="col-2 col-sm-2 col-md-2" align="right">
									<i class="fas fa-chevron-right"></i>
								</div>
							</div>
						</a>
					</li>
				</ul>	
			</div>
			
			<div class="menu" align="center">
				<div class="bg-menu">
					<ul>
						<li>
							<a href="home.php" ><i class="fas fa-home "></i>

							</a>
						</li>
						<li>
							<a href="kategori.php"><i class="fas fa-th-list "></i>

							</a>
						</li>
						<li>
							<a href="kotak-pesan.php"><i class="fas fa-envelope "></i>
								<div class="circle" align="right"></div>
							</a>
						</li>
						<li>
							<a href="profil.php" class="active"><i class="fas fa-user "></i>
								<div class="circle" align="right"></div>
							</a>
						</li>
					</ul>
				</div>
		</div>
	</center>
</div>

<?php
include "footer.php";
?>