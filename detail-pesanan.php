<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<div class="">
					<a href="pesan-les.php"><i class="fas fa-chevron-left"></i> </a> Periksa Pesanan
				</div>				
			</div>
			<form>
				<div class="detail-pesanan">
					<div class=" container">
						<div class="kupon">
							<a href="gunakan-kupon.php">
								<i class="fas fa-ticket-alt"></i> Gunakan kupon atau kode promo
							</a>					
						</div>
						<!--Muncul jika sudah memilih kupon-->
						<div class="kupon-dipakai" align="left">
							<h6>Kode Promo : TBMURAH</h6>	
							<p>
								Potensi mendapatkan cashback Rp 25.410
							</p>				
						</div>

						<div class="form-pesanan">
							<div class="nama-tentor">
								<div class="container">
									<div class="edit-pesanan" align="right">
										<a href="#">Ubah <i class="fas fa-edit"></i></a>
									</div>
									<div class="row ">
										<div class="col-4 col-sm-4 col-md-4" align="left">
											<img src="assets/img/tentor.jpg">
										</div>
										<div class="col-8 col-sm-8 col-md-8" align="left">
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

						<div class=" tempat-les" align="left">
							<div class="container">
								<div class="edit-pesanan" align="right">
									<a href="ubah-alamat.php">Ubah <i class="fas fa-edit"></i></a>
								</div>
								<h6 align="left">Kontak dan Tempat Les</h6>
								<div class="row" style="margin-top: 10px;">
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
							</div>							
						</div>

						<div class="saldo" align="left">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
								<label class="form-check-label" for="defaultCheck1">
									Gunakan sisa saldo
								</label>
							</div>			
						</div>

						<div class="detail-tagihan" align="left">
							<h6>Les Privat SMP</h6>
							<small>Matematika</small>
							<div class=" tagihan">
								<div class="row" style="padding-right: 15px;">
									<div class="col-8  col-sm-8 col-md-8" align="left">
										<label>Tarif per-jam setiap pertemuan</label>
									</div>
									<div class="col-4 col-sm-4 col-md-4 harga" align="right">
										<h6><span>Rp</span> 50.000</h6>
									</div>								
								</div>
								<div class="row" style="padding-right: 15px;">
									<div class="col-8  col-sm-8 col-md-8" align="left">
										<label>Total pertemuan</label>
									</div>
									<div class="col-4 col-sm-4 col-md-4 harga" align="right">
										<h6> 8</h6>
									</div>								
								</div>
								<div class="list3" align="right"> 
									x
								</div>

								<div class="row" style="padding-right: 15px;">
									<div class="col-8  col-sm-8 col-md-8" align="left">
										<label>Total</label>
									</div>
									<div class="col-4 col-sm-4 col-md-4 harga" align="right">
										<h6>
											<span>Rp</span> 400.000
										</h6>
									</div>								
								</div>
								<div class="row" style="padding-right: 15px;">
									<div class="col-8  col-sm-8 col-md-8" align="left">
										<label>Jumlah Murid</label>
									</div>
									<div class="col-4 col-sm-4 col-md-4 harga" align="right">
										<h6> 2</h6>
									</div>								
								</div>
								<div class="list3" align="right"> 
									x
								</div>

								<div class="row" style="padding-right: 15px;">
									<div class="col-8  col-sm-8 col-md-8" align="left">
										<label>Total</label>
									</div>
									<div class="col-4 col-sm-4 col-md-4 harga" align="right">
										<h6>
											<span>Rp</span> 800.000
										</h6>
									</div>								
								</div>
								<div class="row" style="padding-right: 15px;">
									<div class="col-8  col-sm-8 col-md-8" align="left">
										<label>Diskon</label>
									</div>
									<div class="col-4 col-sm-4 col-md-4 harga" align="right">
										<h6 style="color: #03A9F4">
											<span>Rp</span> 50.000
										</h6>
									</div>								
								</div>
								<div class="list3" align="right"> 
									-
								</div>

								<div class="row" style="padding-right: 15px; color: #03A9F4">
									<div class="col-8  col-sm-8 col-md-8" align="left">
										<label style="color: #03A9F4;font-weight: bold;">
											Total tagihan 
											<span style="color: #555555">
												<i class="fas fa-question-circle"></i>
											</span>
										</label>
									</div>
									<div class="col-4 col-sm-4 col-md-4 harga" align="right">
										<h6><span>Rp</span> 750.000</h6>
									</div>								
								</div>
							</div>
						</div>

						

					</div>				
				</div>

				<div class="menu" align="center">
					<div class="bg-menu2" style="padding-bottom: 20px;">
						<div class="container">
							<div class="btn-pesan-les">
								<a href="pembayaran.php" type="submit" class="btn btn-biru">Bayar</a>
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