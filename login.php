<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header4" align="left">
				<div class="container">
					<a href=""><i class="fas fa-chevron-left"></i> </a> <b>Login</b>
				</div>
				<div class="menu-login">
					<ul class="nav  mb-3" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login Murid</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Login Guru</a>
						</li>
					</ul>
					<div class="container form_login">
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

								<!-- Login Murid-->

								<div class="form-murid-guru">
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
										<div class="btn-login" align="center">
											<button type="submit" class="btn ">Masuk</button>
										</div>										
									</form>
									<div class="login_with" align="center">
										<a href="lupa-password.php">Lupa Password ?</a>
										<p>Atau masuk dengan</p>
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
										<p>Tidak punya akun ? <a href="daftar.php"><b>Daftar sekarang</b></a></p>
									</div>
								</div>


							</div>
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								
								<!-- Login Murid-->

								<div class="form-murid-guru">
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
										<div class="btn-login" align="center">
											<button type="submit" class="btn ">Masuk</button>
										</div>										
									</form>
									<div class="login_with" align="center">
										<a href="lupa-password.php">Lupa Password ?</a>
										<p>Atau masuk dengan</p>
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
										<p>Tidak punya akun ? <a href="daftar.php"><b>Daftar sekarang</b></a></p>
									</div>
								</div>

							</div>
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