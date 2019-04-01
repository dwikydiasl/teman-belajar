<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<div class="">
					<a href="pembayaran.php"><i class="fas fa-chevron-left"></i> </a> Berhasil
				</div>				
			</div>
			
			<div class="container">
				<div class="bg-white" align="left">
					<h6 align="center">
						Pemesanan berhasil dilakukan. Segera lakukan pembayaran.
					</h6><br>
					<label>Transfer ke nomor rekening</label>
					<div class="logo-bank">
						<img src="assets/img/icon/bca.png">
					</div>
					<div class="row copy-text">
						<div class="col-9 col-sm-9 col-md-9">
							<p >Nomor rekening <span id="noRekening">123456789 </span> </p>
							<p >Atas nama  <span>PT. Teman Belajar Pintar </span> </p>
						</div>
						<div class="col-3 col-sm-3 col-md-3 " align="left">
							<a href="" onclick="copyToClipboard('#noRekening')">Salin</a>
						</div>
					</div>

					<div class="row copy-text" style="margin-top: 30px;">
						<div class="col-9 col-sm-9 col-md-9">
							<p >Total yang harus dibayar</p>
							<h4>Rp. <span id="totalPembayaran">750.125</span></h4>
						</div>
						<div class="col-3 col-sm-3 col-md-3 " align="left" style="padding-top: 25px;">
							<a href="" onclick="copyToClipboard('#totalPembayaran')">Salin</a>
						</div>
					</div>

					<div class="box-yellow" align="center">
						<p>
							Simpan bukti pembayaran dan transfer sesuai dengan angka diatas tepat sampai 3 digit terakhir. Perbedaan nominal akan menghambat proses verifikasi.
						</p>
					</div>

					<p>
						Setelah melakukan pembayaran segera konfirmasi pembayaran dengan cara mengunggah bukti pembayaran.<br> <br>Jika pembayaran tidak dilakukan selama lebih dari 48 jam. Maka pesanan akan dibatalkan secara otomatis.
					</p>

				</div>
			</div>

			<div class="menu" align="center">
				<div class="bg-menu2" style="padding-bottom: 20px;">
					<div class="container">
						<div class="btn-pesan-les">
							<a href="konfirmasi-pembayaran.php" type="submit" class="btn btn-biru">Konfirmasi Pembayaran</a>
						</div>

					</div>						
				</div>
			</div>
		</div>
	</center>
</div>
<script type="text/javascript">
	function copyToClipboard(element) {
		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val($(element).text()).select();
		document.execCommand("copy");
		$temp.remove();
	}

</script>
<?php
include "footer.php";
?>