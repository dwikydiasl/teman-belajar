<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<a href="hasil-pencarian.php"><i class="fas fa-times"></i> </a> Sort
			</div>
			<div class="container">
				<div id="sort" align="left">
					<div class="inputGroup">
						<input id="populer" name="populer" type="checkbox"/>
						<label for="populer">Populer</label>
					</div>
					<div class="inputGroup">
						<input id="ulasan" name="ulasan" type="checkbox"/>
						<label for="ulasan">Ulasan</label>
					</div>
					<div class="inputGroup">
						<input id="terendah" name="terendah" type="checkbox"/>
						<label for="terendah">Harga Terendah</label>
					</div>
					<div class="inputGroup">
						<input id="tertingi" name="tertingi" type="checkbox"/>
						<label for="tertingi">Harga Tertinggi</label>
					</div>
				</div>
			</div>
			<div class="menu2" align="center">
				<div class="bg-menu2" style="padding-bottom: 20px;">
					<div class="container">
						<div class="btn-pesan-les">
							<button  type="submit" class="btn btn-biru">Terapkan</button>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</center>
</div>

<?php
include "footer.php";
?>