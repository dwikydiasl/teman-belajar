<?php
include "header.php";
?>
<style type="text/css">
.banner2{
	padding-top: 50px;
}
.btn-outline-blue button{
	width: 50%;
}
}
</style>
<div id="index">
	<center>
		<div class="page" >
			<div class="header_guru">
				<div class="row">
					<div class="col-9 col-sm-9 col-md-9" align="left">
						<a href="pengaturan.php">
							<i class="fas fa-arrow-left"></i> Identitas
						</a>	
					</div>
					<div class="col-3 col-sm-3 col-md-3" align="right">
						<i class="fas fa-check"></i>
					</div>
				</div>
			</div>
			<form>
				<div class="bg-white">
					<div class="banner2" >
						<p>
							Lengkapi<b> identitas</b> kamu <br> agar kami dapat melakukan proses <b> verifikasi!</b>
						</p>
					</div>
					<form>
						<div class="container identitas" style="margin-top: 20px;" align="left">
							<div class="form-group">
								<label for="">Nomor NIK</label>
								<input type="number" min=0 class="form-control" id="" aria-describedby="" placeholder="">
							</div>
							<label for="">Unggah Bukti Foto Ijazah / Kartu Mahasiswa</label>	
							<div class="input-group upload-file-transfer">						
								<input type="file" id="files-input-upload" style="display:none">
								<input type="text" id="fake-file-input-name" disabled="disabled" placeholder="" class="form-control">
								<span class="input-group-btn">
									<button id="fake-file-button-browse" type="button" class="btn btn-default">
										<i class="fas fa-paperclip"></i>
									</button>
								</span>
							</div>
							<div class="form-group">
								<label for="">Nama Bank</label>
								<select class="form-control" id="">
									<option>Bank BCA</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Nomor Rekening</label>
								<input type="number" min=0 class="form-control" id="" aria-describedby="" placeholder="">
							</div>
							<div class="form-group">
								<label for="">Nama Pemilik Rekening</label>
								<input type="text" class="form-control" id="" aria-describedby="" placeholder="">
							</div>
						</div>
						<div class="btn-outline-blue">
							<button type="submit" class="btn ">Simpan</button>
						</div>
					</form>


				</div>

			</div>
		</form>
	</div>
</center>
<script type="text/javascript">
	document.getElementById('fake-file-button-browse').addEventListener('click', function() {
		document.getElementById('files-input-upload').click();
	});

	document.getElementById('files-input-upload').addEventListener('change', function() {
		document.getElementById('fake-file-input-name').value = this.value;

		document.getElementById('fake-file-button-upload').removeAttribute('disabled');
	});
</script>
</div>
<?php
include "footer.php";
?>