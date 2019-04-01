<?php
include "header.php";
?>
<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<div class="">
					<a href="pesan-les.php"><i class="fas fa-chevron-left"></i> </a> Ubah Alamat
				</div>				
			</div>
			
			<div class="container">
				<div class="ubah-alamat" align="left">
					<form>
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" class="form-control" id="" placeholder="">
						</div>
						<div class="form-group">
							<label for="">Nomor Handphone</label>
							<div class="row">
								<div class="col-3 col-sm-3 col-md-3">
									<input type="number" min="0" class="form-control" id="" aria-describedby="" placeholder="+62">
								</div>
								<div class="col-9 col-sm-9 col-md-9">
									<input type="number" min="0" class="form-control" id="" aria-describedby="" placeholder="">
								</div>
							</div>		
						</div>
						<div class="form-group">
							<label for="">Kota/kabupaten</label>
							<input type="text" class="form-control" min="0" id="" placeholder="">
						</div>
						<div class="form-group">
							<label for="">Alamat Lengkap</label>
							<input type="text" class="form-control" min="0" id="" placeholder="">
						</div>
						<div class="form-group">
							<label for="">Lokasi(Opsional)</label>
							<input type="text" class="form-control" min="0" id="" placeholder="">
							<small>Pastikan lokasi yang kamu tandai sesuai dengan alamat yang kamu tulis diatas.</small>
						</div>
					</form>
				</div>
			</div>
			<div class="menu" align="center">
				<div class="bg-menu2" style="padding-bottom: 20px;">
					<div class="container">
						<div class="btn-pesan-les">
							<button href="" type="submit" class="btn">Simpan</button>
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