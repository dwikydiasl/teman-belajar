<?php
include "header.php";
?>
<style type="text/css">
.banner{
	height: 150px;
}
.banner p{
	padding-top: 20px;
}
</style>
<div id="index">
	<center>
		<div class="page" >
			<div class="header_guru">
				<div class="row">
					<div class="col-6 col-sm-6 col-md-6" align="left">
						<a href="profil-murid.php">
							<i class="fas fa-arrow-left"></i> Penilaian
						</a>	
					</div>
					<div class="col-6 col-sm-6 col-md-6" align="right">
						<i class="fas fa-check"></i>
					</div>
				</div>
			</div>
			<form>
				<div class="penilaian">
					<div class="banner">
						<p>
							Bagaimana hasil belajar<b> Bagas </b> bulan ini?
						</p>
					</div>
					<div class="container">
						<div class="row nama-murid">
							<div class="col-3 col-sm-3 col-md-3">
								<img src="assets/img/profil2.jpg">
							</div>
							<div class="col-9 col-sm-9 col-md-9" align="left">
								<h6>Bagas</h6>
								<p>
									Jl. Dr. Soepomo No.64, Punggawan, Banjarsari, Kota Surakarta, Jawa Tengah 57139
								</p>
							</div>
						</div>
						<h6 align="left">Hasil les bulan ini</h6>
						<textarea class="form-control" id="" rows="3"></textarea>
					</div>
					<div class="menu2" align="center">
						<div class="bg-menu2" style="padding-bottom: 20px;">
							<div class="container">
								<div class="btn-outline-blue">
									<button  type="submit" class="btn btn-biru">Simpan</button>
								</div>

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