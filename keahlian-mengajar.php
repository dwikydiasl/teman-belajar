<?php
include "header.php";
?>
<style type="text/css">
.btn-terima button{
	width: 50%;
}
.btn-outline-blue button{
	width: 50%;
}
</style>
<div id="index">
	<center>
		<div class="page" >
			<div class="header_guru">
				<div class="row">
					<div class="col-9 col-sm-9 col-md-9" align="left">
						<a href="pengaturan.php">
							<i class="fas fa-arrow-left"></i> Keahlian Mengajar
						</a>	
					</div>
					<div class="col-3 col-sm-3 col-md-3" align="right">
						<i class="fas fa-check"></i>
					</div>
				</div>
			</div>
			<form>
				<div class="bg-grey">
					<div class="banner2" style="padding-bottom: 15px;">
						<p>
							Isilah <b> bidang keahlian<br></b> beserta<b> tarif</b> mengajar yang kamu inginkan!
						</p>
					</div>
					<div class="container" style="margin-top: 20px;">
						<div class="box-white">
							<div class="list-keahlian container">
								<div align="right">
									<i class="fas fa-trash-alt"></i>
								</div>
								<div class="form-group" align="left">
									<label for="">Bidang Keahlian</label>
									<input type="text" class="form-control" id="" aria-describedby="" placeholder="">
								</div>
								<div class="form-group" align="left">
									<label for="">Tarif dasar (Tarif dasar selama 60 Menit)</label>
									<input type="number" min="0" class="form-control" id="" aria-describedby="" placeholder="Tarif min 25.000 maks 100.000">
									<small id="" class="form-text text-muted">*Sharing profit sebesar 85% untuk kamu dan 15% untuk Teman Belajar</small>
								</div>
								<div class="form-group" align="left">
									<label for="">Potensi pendapatanmu tiap jam</label>
									<input type="number" min="0" class="form-control" id="" aria-describedby="" placeholder="" readonly="">
								</div>
								<div class="btn-terima" align="right">
									<button type="submit" class="btn ">Simpan</button>
								</div>
							</div>
							
						</div>
					</div>
					<div class="btn-outline-blue">
						<button type="button" class="btn "><i class="fas fa-plus"></i> Tambah</button>
					</div>
					
				</div>
			</form>
		</div>
	</center>
</div>
<?php
include "footer.php";
?>