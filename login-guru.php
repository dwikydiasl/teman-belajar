<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="bg-blue">
				<div class="container">
					<div class="form-daftar-guru">
						<img src="assets/img/icon.png"><br>
						<small>For Teacher</small><br><br>
						<form>
							<div class="input-group">
								<span class="input-group-addon" id="sizing-addon2">
									<i class="fas fa-envelope"></i>
								</span>	
								<input type="email" class="form-control" id="" aria-describedby="sizing-addon2" placeholder="Email" required>
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
							<div class="btn-white" style="margin-top: 30px;">
								 <button type="submit" class="btn ">masuk</button>
							</div>
						</form>
						<div class="lupa-password-guru">
							<a href="">Lupa Password ?</a>
						</div>
						<div class="link-daftar-guru">
							<p>Tidak punya akun?<a href="daftar-guru.php">Daftar sekarang</a></p>
						</div>
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