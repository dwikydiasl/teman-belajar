<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<div class="row">
					<div class="col-6 col-sm-6 col-md-6">
						<a href="bayar.php"><i class="fas fa-chevron-left"></i> </a> Akun Bank
					</div>
					<div class="col-6 col-sm-6 col-md-6 btn-hapus" align="right">
						<button class="btn btn-sm " href="#" type="reset" value="Reset" data-toggle="modal" data-target="#exampleModal">
							Hapus
						</button>
					</div>
				</div>
				
			</div>
			
			<div class="bg-white">
				<div class="container">
					<div class="akun-bank-kosong">
						<h6>Ups masih kosong</h6>
						<i class="far fa-frown"></i>
						<p>
							Tambah rekening bank untuk mempermudah penarikan dana
						</p>
					</div>

					<div class="row pilih-bank2" align="left">
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
					<div class="row pilih-bank2" align="left">
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
			<div class="menu2" align="center">
				<div class="bg-menu2" style="padding-bottom: 20px;">
					<div class="container">
						<div class="btn-biru">
							<a href="pilih-nama-bank.php" type="submit" class="btn">Tambah Rekening</a>
						</div>

					</div>						
				</div>
			</div>
		</div>
	</center>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="" align="center">
        <h6 class="modal-title" id="">Apakah kamu yakin ?</h6>
        
      </div>
      <div class="modal-body">
        <p>
        	Kamu akan menghapus rekening PT. BCA (BANK CENTRAL ASIA) TBK 123456789 atas nama Daenerys Targaryen
        </p>
      </div>
      <div class="row">
      	<div class="col-6 col-sm-6 col-md-6 " align="right">
      		<button type="button" class="btn " data-dismiss="modal">Tidak</button>
      	</div>
      	<div class="col-6 col-sm-6 col-md-6 text-blue">
      		<button type="submit" class="btn ">Ya Saya Yakin</button>
      	</div>
      </div>
       
        
    </div>
  </div>
</div>
<?php
include "footer.php";
?>