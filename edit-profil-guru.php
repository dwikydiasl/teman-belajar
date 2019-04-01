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
						<a href="pengaturan.php">
							<i class="fas fa-arrow-left"></i> Edit Profil
						</a>	
					</div>
					<div class="col-6 col-sm-6 col-md-6" align="right">
						<i class="fas fa-check"></i>
					</div>
				</div>
			</div>
			<form>
				<div class="bg-white">
					<div class="banner2" style="padding-bottom: 15px;">
						<p>
							Lengkapilah <b>profil</b> kamu! <br> <b>profil</b> akan ditampilkan pada halaman pencarian tentor!
						</p>
					</div>
					<div class="ganti-foto">
						<label class=newbtn>
							<img id="foto" src="http://placehold.it/120x120" >
							<input id="pic" class='pis' onchange="readURL(this);" type="file" >
						</label>
					</div>
					<div class="container"  align="left">
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" class="form-control" id="" aria-describedby="" placeholder="">
						</div>
						<div class="form-group">
							<label for="">Jenis Kelamin</label>
							<select class="form-control" id="exampleFormControlSelect1">
								<option>Laki</option>
								<option>Perempuan</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Nomor Handphone</label>
							<input type="number" min="0" class="form-control" id="" aria-describedby="" placeholder="">
						</div>
						<div class="form-group">
							<label for="">Tentang saya</label>
							<textarea class="form-control" id="" rows="3"></textarea>
						</div>
						<div class="form-group">
							<label for="">Pengalaman mengajar</label>
							<textarea class="form-control" id="" rows="3"></textarea>
						</div>
						<div class="form-group">
							<label for="">Pendidikan</label>
							<input type="text" class="form-control" id="" aria-describedby="" placeholder="">
						</div>
						<div class="form-group">
							<label for="">Prestasi dalam bidang pendidikan</label>
							<input type="text" class="form-control" id="" aria-describedby="" placeholder="">
						</div>
						<div class="form-group">
							<label for="">Pekerjaan</label>
							<input type="text" class="form-control" id="" aria-describedby="" placeholder="">
						</div>
					</div>
					<div class="btn-outline-blue">
						<button type="submit" class="btn">Simpan</button>
					</div>
					
				</div>
			</form>
		</div>
	</center>
</div>
<script>

	$('.newbtn').bind("click" , function () {
		$('#pic').click();
	});

	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#foto')
				.attr('src', e.target.result);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
<?php
include "footer.php";
?>