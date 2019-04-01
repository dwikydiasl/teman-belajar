<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<div class="container">
					<a href=""><i class="fas fa-chevron-left"></i> </a> Daftar
				</div>								
			</div>
			<div class="container">
				<div class="form-daftar">
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
						<div class="btn-login" align="center">
							<button type="submit" class="btn ">Daftar</button>
						</div>										
					</form>
					<div class="login_with" align="center">
						<p>Atau daftar dengan</p>
						<div class="row">
							<div class="col-6 col-sm-6 col-md-6">
								<a href="" type="">
									<div class="google">
										<img src="assets/img/icon/google.svg"> <span>Google</span>
									</div>
								</a>												
							</div>
							<div class="col-6 col-sm-6 col-md-6">
								<a href="" type="">
									<div class="facebook">
										<img src="assets/img/icon/facebook.svg"> <span>Facebook</span>
									</div>
								</a>	
							</div>
						</div>
						<p>Sudah punya akun ? <a href="login.php"><b>Masuk sekarang</b></a></p>
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