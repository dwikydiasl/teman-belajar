<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<a href="hasil-pencarian.php"><i class="fas fa-times"></i> </a> Filter
			</div>
			
			<div id="filter-pencarian" align="left">
				<div class="kategori-pelajaran">
					<div class="container">
						<div class="row">
							<div class="col-6 col-sm-6 col-md-6" >
								<h6>Kategori</h6>
							</div>
							<div class="col-6 col-sm-6 col-md-6" align="right">
								<a href="kategori.php">Lihat Semua</a>
							</div>
						</div>
					</div>					
					<ul class="ks-cboxtags">
						<li>
							<input type="checkbox" id="Matematika" value=""><label for="Matematika">Matematika</label>
						</li>
						<li>
							<input type="checkbox" id="Fisika" value="" ><label for="Fisika">Fisika</label>
						</li>
						<li>
							<input type="checkbox" id="Biologi" value="" ><label for="Biologi">Biologi</label>
						</li>
						<li>
							<input type="checkbox" id="BahasaIndonesia" value=""><label for="BahasaIndonesia">Bahasa Indonesia</label>
						</li>
						<li>
							<input type="checkbox" id="Kimia" value=""><label for="Kimia">Kimia</label>
						</li>
					</ul>
				</div>
				<div class="kategori-pelajaran">
					<div class="container">
						<h6>Lokasi</h6>
						<div class="btn-outline-blue">
							<button href="" type="button" class="btn">Jebres, Kota Surakarta</button>
						</div>							
					</div>	
				</div>
				<div class="kategori-pelajaran">
					<div class="container">
						<h6>Harga</h6>
					</div>					
				</div>
				<div class="kategori-pelajaran">
					<div class="container">
						<h6>Jenis Kelamin</h6>
					</div>					
					<ul class="ks-cboxtags">
						<li>
							<input type="checkbox" id="Semua" value=""><label for="Semua">Semua</label>
						</li>
						<li>
							<input type="checkbox" id="LakiLaki" value="" ><label for="LakiLaki">Laki-Laki</label>
						</li>
						<li>
							<input type="checkbox" id="Permepuan" value="" ><label for="Permepuan">Permepuan</label>
						</li>
					</ul>
				</div>
				<div class="kategori-pelajaran">
					<div class="container">
						<h6>Guru</h6>
					</div>					
					<ul class="ks-cboxtags">
						<li>
							<input type="checkbox" id="Semua" value=""><label for="Semua">Semua</label>
						</li>
						<li>
							<input type="checkbox" id="Verifikasi" value="" ><label for="Verifikasi">Sudah Verifikasi</label>
						</li>
						<li>
							<input type="checkbox" id="BelumVerifikasi" value="" ><label for="BelumVerifikasi">Belum Verifikasi</label>
						</li>
					</ul>
				</div>
			</div>
			<div class="menu2" align="center">
				<div class="bg-menu2" style="padding-bottom: 20px;">
					<div class="container">
						<div class="btn-pesan-les">
							<button  type="submit" class="btn btn-biru">Terapkan</button>
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