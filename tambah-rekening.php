<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<a href="bayar.php"><i class="fas fa-times"></i> </a> Tambah Rekening
			</div>
			<form>		
				<div class="bg-white">
					<div class="container tambah-rekening" align="left">
						<p>
							Pastikan Nomor Rekening dan Nama Pemilik Rekening sesuai buku tabungan
						</p>
						<div class="form-group">
							<label for="">Nama Bank</label>
							<select class="form-control" id="">
								<option>PT. BCA (BANK CENTRAL ASIA) TBK</option>
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
							<input type="email" class="form-control" id="" placeholder="">
						</div>
					</div>
				</div>
				<div class="menu2" align="center">
					<div class="bg-menu2" style="padding-bottom: 20px;">
						<div class="container">
							<div class="btn-biru">
								<a href="konfirmasi-pin-rekening.php" type="submit" class="btn">Selanjutnya</a>
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