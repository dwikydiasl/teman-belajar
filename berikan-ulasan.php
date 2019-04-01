<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<div class="container">
					<a href="daftar-ulasan.php"><i class="fas fa-chevron-left"></i> </a> Berikan Ulasan
				</div>				
			</div>
			
			<div class="kotak-pesan">
				<div class="container">
					<img src="assets/img/tentor.jpg"><br>
					<p>
						"Terima kasih telah menggunakan layanan les privat saya, silahkan berikan ulasan."
					</p>
					<div class="rating-tentor">
						<fieldset class="starability-growRotate"> 
							<input type="radio" id="rate5" name="rating" value="5" />
							<label for="rate5" title="Amazing">5 stars</label>

							<input type="radio" id="rate4" name="rating" value="4" />
							<label for="rate4" title="Very good">4 stars</label>

							<input type="radio" id="rate3" name="rating" value="3" />
							<label for="rate3" title="Average">3 stars</label>

							<input type="radio" id="rate2" name="rating" value="2" />
							<label for="rate2" title="Not good">2 stars</label>

							<input type="radio" id="rate1" name="rating" value="1" />
							<label for="rate1" title="Terrible">1 star</label>
						</fieldset>
					</div>
					<textarea class="form-control" id="" placeholder="Gal Gadot" rows="3"></textarea>
					
				</div>
			</div>
			<div class="menu2" align="center">
				<div class="bg-menu2" style="padding-bottom: 20px;">
					<div class="container">
						<div class="btn-pesan-les">
							<button  type="submit" class="btn btn-biru">Kirim</button>
						</div>

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