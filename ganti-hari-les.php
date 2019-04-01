<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<div class="">
					<a href="detail-guru.php"><i class="fas fa-times"></i> </a> Ganti Hari Les
				</div>				
			</div>
			<form>		
				<div class="container">
					<div class="bg-white">
						<p>Pilihlah hari les yang ingin kamu ganti</p>

						<div class="ganti-hari">
							<div class="container">
								<div class="row">
									<div class="col-9 col-sm-9 col-md-9" align="left">
										<div class="hari" style="float: left;">
											<small>Hari</small>
											<h6>Selasa</h6>
										</div>
										<div>
											<small>Jam</small>
											<h6>17.00</h6>
										</div>
									</div>
									<div class="col-3 col-sm-3 col-md-3" align="right" style="padding-top: 10px">
										<a href="jadwal-ulang-les.php">Ganti</a>
									</div>
								</div>
							</div>
						</div>

						<div class="ganti-hari">
							<div class="container">
								<div class="row">
									<div class="col-9 col-sm-9 col-md-9" align="left">
										<div class="hari" style="float: left;">
											<small>Hari</small>
											<h6>Selasa</h6>
										</div>
										<div>
											<small>Jam</small>
											<h6>17.00</h6>
										</div>
									</div>
									<div class="col-3 col-sm-3 col-md-3" align="right" style="padding-top: 10px">
										<a href="jadwal-ulang-les.php">Ganti</a>
									</div>
								</div>
							</div>
						</div>

						<div class="ganti-hari">
							<div class="container">
								<div class="row">
									<div class="col-9 col-sm-9 col-md-9" align="left">
										<div class="hari" style="float: left;">
											<small>Hari</small>
											<h6>Selasa</h6>
										</div>
										<div>
											<small>Jam</small>
											<h6>17.00</h6>
										</div>
									</div>
									<div class="col-3 col-sm-3 col-md-3" align="right" style="padding-top: 10px">
										<a href="jadwal-ulang-les.php">Ganti</a>
									</div>
								</div>
								<p align="left">
									Diganti menjadi hari Jum'at
								</p>
							</div>
						</div>

						<input type="email" class="form-control" id="" placeholder="Catatan">
						<p class="checkboxes" align="left">							
							<label for="circle"><input type="checkbox" class="checkbox checkbox-circle" id="circle">Ganti hari les untuk seterusnya</label>
						</p>

					</div>
				</div>
				<div class="menu2" align="center">
					<div class="bg-menu2" style="padding-bottom: 20px;">
						<div class="container">
							<div class="btn-pesan-les">
								<button  type="submit" class="btn btn-biru">Ajukan</button>
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