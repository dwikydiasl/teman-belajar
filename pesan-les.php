<?php
include "header.php";
?>
<style type="text/css">
.btn-pesan-les a{
	width: 90%;
}
</style>
<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<div class="">
					<a href="profil-tentor.php"><i class="fas fa-chevron-left"></i> </a> Pesan Les
				</div>				
			</div>
			<form>	
				<div class="konten-pesan-les">
					<div class="container">
						<div class="form-pesanan">
							<div class="nama-tentor">
								<div class="container">
									<div class="row ">
										<div class="col-4 col-sm-4 col-md-3" align="left">
											<img src="assets/img/tentor.jpg">
										</div>
										<div class="col-8 col-sm-8 col-md-9" align="left">
											<h6>Gal Gadot</h6>
											<small>Rp 50.000/jam</small>
										</div>
									</div>
								</div>
							</div>
							<div class="jenis-les" align="left">
								<div class="container">
									<small>Mata Pelajaran</small>
									<h6>Matematika</h6>
								</div>

							</div>
							<div class="list-bottom">
								<div class="container">
									<div class="row">
										<div class="col-7 col-sm-7 col-md-7" align="left">
											<small>Jenjang</small>
										</div>
										<div class="col-5 col-sm-5 col-md-5" align="right">
											<div class="list2">
												<select class="form-control form-control-sm" id="">
													<option>SMP</option>
													<option>SMA</option>
													<option>UMUM</option>
												</select>
											</div>
										</div>
									</div>
								</div>								
							</div>
							<div class="list-bottom">
								<div class="container">
									<div class="row">
										<div class="col-7 col-sm-7 col-md-7" align="left">
											<small>Durasi Les</small>
										</div>
										<div class="col-5 col-sm-5 col-md-5" align="right">
											<div class="list2">
												<select class="form-control form-control-sm" id="">
													<option>60 menit</option>
													<option>90 menit</option>
													<option>120 menit</option>
													<option>150 menit</option>
												</select>
											</div>
										</div>
									</div>
								</div>								
							</div>
							<div class="list-bottom">
								<div class="container">
									<div class="row">
										<div class="col-7 col-sm-7 col-md-7" align="left">
											<small>Jumlah Murid</small>
										</div>
										<div class="col-5 col-sm-5 col-md-5" align="right">
											<div class="list2">
												<select class="form-control form-control-sm" id="">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>											
										</div>
									</div>
								</div>								
							</div>
							<div class="list-bottom">
								<div class="container" align="left">
									<small >Jumlah Pertemuan Per Bulan</small>
									<select class="form-control form-control-sm" id="">
										<option>8 Pertemuan</option>
										<option>12 Pertemuan</option>
										<option>16 Pertemuan</option>
									</select>
								</div>								
							</div>
							<div class="list-bottom">
								<div class="container" align="left">
									<small >Pertemuan Pertama</small>
									
								</div>								
							</div>
						</div>

						<div class=" tempat-les">
							<div class="container">
								<h6 align="left">Kontak dan Tempat Les</h6>
								<div class="row">
									<div class="col-2 col-sm-2 col-md-2">
										<i class="fas fa-home"></i>
									</div>
									<div class="col-10 col-sm-10 col-md-10" align="left"> 
										<h6>John Dae</h6>
										<p>
											Jl. Dr. Soepomo No.64, Punggawan, Banjarsari, Kota Surakarta, Jawa Tengah 57139 012345678900
										</p>
									</div>
								</div>
								<div class="tambah-alamat">
									<a href="ubah-alamat.php" type="" class="">Masukan Alamat </a>
								</div>
							</div>
							
						</div>

					</div>
				</div>
				<div class="menu" align="center">
					<div class="bg-menu2" style="padding-bottom: 20px;">
						<div class="container">
							<div class="btn-pesan-les">
								<a href="detail-pesanan.php" type="submit" class="btn">Selanjutnya</a>
							</div>

						</div>						
					</div>
				</div>
			</form>
		</div>
	</center>
</div>
<script type="text/javascript">
	
</script>
<?php
include "footer.php";
?>