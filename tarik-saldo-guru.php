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
			<div class="header_guru" align="left">
				<a href="dashboard-guru.php">
					<i class="fas fa-arrow-left"></i> Tarik Saldo
				</a>	
			</div>
			<form>
				<div class="penilaian">
					<div class="banner">
						<div class="container">
							<p>
								Masukan jumlah <b>saldo</b> yang ingin kamu ambil!
							</p>
						</div>
					</div>
					<div class="input-jml-saldo" align="left">
						<div class="container">
							<h6>Jumlah saldo ditarik</h6>
							<input type="number" min="0" class="form-control" id="" aria-describedby="" placeholder="">
						</div>
					</div>
					<div class="btn-outline-blue" style="margin-top: 40px;">
						<button type="button" class="btn ">Tarik</button>
					</div>
					
				</div>
			</form>
		</div>
	</center>
</div>

<?php
include "footer.php";
?>