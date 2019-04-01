<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="bg-blue">
				<div class="container">
					<div class="header-login-guru" align="left">
						<a href="atur-profil5.php"><i class="fas fa-arrow-left"></i></a>
					</div>
					<div class="form-daftar-guru" >
						<h5>Masukan NIK kamu</h5><br>
						<div class="input-group">
							<input type="text" class="form-control" id="" aria-describedby="" placeholder="NIK" required>
						</div>
						<div class="input-group upload-file-transfer">						
							<input class="form-control" type="file" id="files-input-upload" style="display:none">
							<input class="form-control" type="text" id="fake-file-input-name" disabled="disabled" placeholder="Scan Ijasah/Kartu Mahasiswa (Optional)" class="form-control">
							<span class="input-group-btn">
								<button id="fake-file-button-browse" type="button" class="btn btn-default">
									<i class="fas fa-paperclip"></i>
								</button>
							</span>
						</div>
						<div class="input-group">
							<select class="form-control" id="">
								<option>Nama Bank</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<div class="input-group">
							<input type="number" class="form-control" id="" aria-describedby="" placeholder="Nomor Rekening Bank" required>
						</div>
						<div class="input-group">
							<input type="text" class="form-control" id="" aria-describedby="" placeholder="Nama Pemilik Rekening Bank" required>
						</div>
					</div>
				</div>		
				<div class="bg-transparan">
					<div class="btn-white" style="margin-top: 30px;">
						<a href="dashboard-guru.php" class="btn ">Selesai</a>
					</div>
				</div>		
			</div>
		</div>
	</center>
</div>

<script type="text/javascript">
	document.getElementById('fake-file-button-browse').addEventListener('click', function() {
		document.getElementById('files-input-upload').click();
	});

	document.getElementById('files-input-upload').addEventListener('change', function() {
		document.getElementById('fake-file-input-name').value = this.value;

		document.getElementById('fake-file-button-upload').removeAttribute('disabled');
	});
</script>
<?php
include "footer.php";
?>