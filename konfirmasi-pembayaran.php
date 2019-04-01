<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<div class="">
					<a href="detail-pembayaran.php"><i class="fas fa-chevron-left"></i> </a> Konfirmasi Pembayaran
				</div>				
			</div>
			
			<div class="bg-white">
				<div class="nama-bank" align="left">
					<img src="assets/img/icon/bca.png"> Transfer ke Bank BCA
				</div>
				<div class="form-konfirmasi" align="left"> 
					<div class="container">
						<div class="form-group">
							<label for="">Nomor Rekening</label>
							<input type="number" class="form-control" min="0" id="" aria-describedby="" placeholder="">
						</div>
						<div class="form-group">
							<label for="">Nama Pemilik Rekening</label>
							<input type="text" class="form-control"  id="" aria-describedby="" placeholder="">
						</div>
						<label for="">Bukti Transfer</label>	
						<div class="input-group upload-file-transfer">						
							<input type="file" id="files-input-upload" style="display:none">
							<input type="text" id="fake-file-input-name" disabled="disabled" placeholder="" class="form-control">
							<span class="input-group-btn">
								<button id="fake-file-button-browse" type="button" class="btn btn-default">
									<i class="fas fa-paperclip"></i>
								</button>
							</span>
						</div>
						<p>
							Isilah data sesuai dengan buku tabungan yang dipergunakan untuk melakukan pembayaran.<br><br> Jika melakukan pembayaran melalui teller, isi Nama Pemilik Rekening dengan nama pemesan dan Nomor Rekening 00000.<br><br> Demi keamanan bertransaksi anda, pastikan untuk tidak menginformasikan bukti pembayaran kepada pihak manapun kecuali pihak Teman Belajar.
						</p>
					</div>
					
				</div>
			</div>

			<div class="menu" align="center">
				<div class="bg-menu2" style="padding-bottom: 20px;">
					<div class="container">
						<div class="btn-pesan-les">
							<a href="konfirmasi-berhasil.php" type="submit" class="btn btn-biru">Konfirmasi </a>
						</div>

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