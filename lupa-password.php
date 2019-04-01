<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<div class="container">
					<a href=""><i class="fas fa-chevron-left"></i> </a> Lupa Password
				</div>								
			</div>
			<div class="container">
				<div class="form-daftar">
					<p>
						Masukan Email kamu, kami akan mengirimkan password baru melalui Email
					</p>
					<form>
						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon2">
								<i class="fas fa-envelope"></i>
							</span>	
							<input type="email" class="form-control" id="" aria-describedby="sizing-addon2" placeholder="Email" required>	
						</div>
						<div class="btn-login" align="center">
							<button type="submit" class="btn ">Reset Password</button>
						</div>										
					</form>
				</div>
			</div>

		</div>
	</center>
</div>

<?php
include "footer.php";
?>