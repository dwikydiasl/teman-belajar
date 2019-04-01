<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<div class="">
					<a href="saldoku.php"><i class="fas fa-chevron-left"></i> </a> Tarik Saldo
				</div>				
			</div>
			<form>		
				<div class="container">
					<div class="bg-white">
						<div class="tarik-saldo" align="left">
							<div class="form-group">
								<label for="">Masukan jumlah saldo yang ingin ditarik</label>
								<input type="number" min="0" class="form-control" id="" placeholder="">
							</div>
							<h6>Masukan info Bank anda</h6>
							<div class="form-group">
								<label for="">Nama Bank</label>
								<select class="form-control" id="">
									<option>Bank Central Asia, Tbk</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Nomor Rekening</label>
								<input type="number" min="0" class="form-control" id="" placeholder="">
							</div>
							<div class="form-group">
								<label for="">Nama Pemilik Rekening</label>
								<input type="text" class="form-control" id="" placeholder="">
							</div>

							<h6>Pilih Akun Bank</h6>
							<div class="row pilih-bank">
								<div class="col-10 col-sm-10 sol-md-10">
									<img src="assets/img/icon/bca.png">
									<p>
										Nomor Rekening 1234567890 <br>
										Atas Nama Daenerys Targaryen
									</p>
								</div>
								<div class="col-2 col-sm-2 sol-md-2" align="right" style="padding-top: 25px;">
									<p class="checkboxes" align="left">							
										<input type="checkbox" class="checkbox checkbox-circle" id="circle">
									</p>
								</div>
							</div>

							<div class="row pilih-bank">
								<div class="col-10 col-sm-10 sol-md-10">
									<img src="assets/img/icon/mandiri.png">
									<p>
										Nomor Rekening 1234567890 <br>
										Atas Nama Daenerys Targaryen
									</p>
								</div>
								<div class="col-2 col-sm-2 sol-md-2" align="right" style="padding-top: 25px;">
									<p class="checkboxes" align="left">							
										<input type="checkbox" class="checkbox checkbox-circle" id="circle">
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu2" align="center">
					<div class="bg-menu2" style="padding-bottom: 20px;">
						<div class="container">
							<div class="btn-pesan-les">
								<a href="konfirmasi-pin.php" type="submit" class="btn btn-biru">Tarik</a>
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