<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="bg-blue">
				<div class="container">
					<div class="form-daftar-guru">
						<h5>Ayo kita mulai!</h5>
						<p>Masukan Email, Nomor Handphone, dan Password kamu.</p>
						<form>
							<div class="input-group">
								<span class="input-group-addon" id="sizing-addon2">
									<i class="fas fa-envelope"></i>
								</span>	
								<input type="email" class="form-control" id="" aria-describedby="sizing-addon2" placeholder="Email" required>
							</div>
							<div class="input-group">
								<span class="input-group-addon" id="sizing-addon2">
									<i class="fas fa-phone"></i>
								</span>	
								<input type="number" class="form-control" id="" aria-describedby="sizing-addon2" placeholder="Nomor Handphone" required>
							</div>
							<div class="input-group">
								<span class="input-group-addon" id="sizing-addon2">
									<i class="fas fa-key"></i>
								</span>	
								<input type="password" class="form-control" id="myPass" aria-describedby="sizing-addon2" placeholder="Password" required>	
								<span class="input-group-addon" id="sizing-addon2">
									<i onclick="myFunction()" class="fas fa-eye"></i>
								</span>												
							</div>
							<div class="persetujuan" align="left">
								<input id="ham" type="checkbox" name="toppings" value="ham">
								<label for="ham">Dengan menggunakan layanan teman belajar saya setuju dengan<a href=""> syarat dan ketentuan</a> yang berlaku.</label>

							</div>
							<div class="bg-transparan">
								<div class="btn-white" style="margin-top: 60px;">
								<button type="submit" class="btn ">Selanjutnya</button>
							</div>
							</div>	
						</form>
					</div>
				</div>				
			</div>
		</div>
	</center>
</div>

<script type="text/javascript">
	function myFunction() {
		var x = document.getElementById("myPass");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
</script>
<?php
include "footer.php";
?>