<?php
include "header.php";
?>

<div id="">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<a href="profil.php"><i class="fas fa-chevron-left"></i> </a> Edit Profil
			</div>
			
			<div class="container">
				<div class="bg-white">
					<div class="edit-profil">
						<label class=newbtn>
							<img id="foto" src="http://placehold.it/120x120" >
							<input id="pic" class='pis' onchange="readURL(this);" type="file" >
						</label>
						<div class="form-group" align="left">
							<label for="">Nama</label>
							<input type="text" class="form-control" id="" aria-describedby="" placeholder="">
						</div>
						<div class="form-group" align="left">
							<label for="">Email</label>
							<input type="email" class="form-control" id="" aria-describedby="" placeholder="">
						</div>
						<div class="form-group" align="left">
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
						<div class="form-group" align="left">
							<label for="">Kota/Kabupaten</label>
							<input type="text" class="form-control" id="" aria-describedby="" placeholder="">
						</div>
						<div class="form-group" align="left">
							<label for="">Alamat Lengkap</label>
							<input type="text" class="form-control" id="" aria-describedby="" placeholder="">
						</div>
						<div class="form-group" align="left">
							<label for="">Sekolah</label>
							<input type="text" class="form-control" id="" aria-describedby="" placeholder="">
						</div>
						<div class="form-group" align="left">
							<label for="">Kelas</label>
							<input type="text" class="form-control" id="" aria-describedby="" placeholder="">
						</div>
					</div>
					
				</div> 
			</div>

			<div class="menu2" align="center">
				<div class="bg-menu2" style="padding-bottom: 20px;">
					<div class="container">
						<div class="btn-pesan-les">
							<button  type="submit" class="btn">Simpan</button>
						</div>

					</div>						
				</div>
			</div>
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