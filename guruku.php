<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header2" align="left">
				<div class="">
					<a href="profil.php"><i class="fas fa-chevron-left"></i> </a> Guruku
				</div>
				<div class="menu-pills">
					<ul class="nav mb-3" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Guruku</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Guru Favorit</a>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="bg-grey">
				<div class=" container">
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

							<!--Guruku-->
							<div class="daftar-guru" align="left">
								<a href="detail-guru.php">
									<div class="container">
										<div class="row">
											<div class="col-10 col-sm-10 col-md-10">
												<div class="avatar2">
													<img src="assets/img/tentor.jpg"> 
												</div>
												<div class="nama-guru">
													<h6>Gal Gadot</h6>
													<small>Matematika</small> 
												</div>
												
											</div>
											<div class="col-2 col-sm-2 col-md-2" align="right">
												<i class="fas fa-chevron-right"></i>
											</div>
										</div>
									</div>
									
								</a>								
							</div>

							<div class="daftar-guru" align="left">
								<a href="detail-guru.php">
									<div class="container">
										<div class="row">
											<div class="col-10 col-sm-10 col-md-10">
												<div class="avatar2">
													<img src="assets/img/profil.jpg"> 
												</div>
												<div class="nama-guru">
													<h6>Nurhadi</h6>
													<small>Bahasa Jepang</small> 
												</div>
												
											</div>
											<div class="col-2 col-sm-2 col-md-2" align="right">
												<i class="fas fa-chevron-right"></i>
											</div>
										</div>
									</div>
									
								</a>								
							</div>

							<div class="daftar-guru" align="left">
								<a href="detail-guru.php">
									<div class="container">
										<div class="row">
											<div class="col-10 col-sm-10 col-md-10">
												<div class="avatar2">
													<img src="assets/img/tentor.jpg"> 
												</div>
												<div class="nama-guru">
													<h6>Gal Gadot</h6>
													<small>Matematika</small> 
												</div>
												
											</div>
											<div class="col-2 col-sm-2 col-md-2" align="right">
												<i class="fas fa-chevron-right"></i>
											</div>
										</div>
									</div>
									
								</a>								
							</div>
							
						</div>
						<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							
							<!--Guru Favorit-->

							<div class="container">
								<div class="row">
									<div class="col-6 col-sm-6 col-md-6">
										<div class="guru-favorit">
											<div align="right">
												<span><i class="fas fa-heart"></i></span>
											</div>
											<a href="detail-guru.php">
												<img src="assets/img/tentor.jpg"> 
											</a>	
											<div class="nama-guru2">
												Gal Gadot
											</div>
										</div>
									</div>
									<div class="col-6 col-sm-6 col-md-6">
										<div class="guru-favorit">
											<div align="right">
												<span><i class="fas fa-heart"></i></span>
											</div>
											<a href="detail-guru.php">
												<img src="assets/img/profil.jpg"> 
											</a>	
											<div class="nama-guru2">
												Nurhadi
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6 col-sm-6 col-md-6">
										<div class="guru-favorit">
											<div align="right">
												<span><i class="fas fa-heart"></i></span>
											</div>
											<a href="detail-guru.php">
												<img src="assets/img/profil2.jpg"> 
											</a>	
											<div class="nama-guru2">
												John dae
											</div>
										</div>
									</div>
									<div class="col-6 col-sm-6 col-md-6">
										<div class="guru-favorit">
											<div align="right">
												<span><i class="fas fa-heart"></i></span>
											</div>
											<a href="detail-guru.php">
												<img src="assets/img/profil.jpg"> 
											</a>	
											<div class="nama-guru2">
												Nurhadi
											</div>
										</div>
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

<?php
include "footer.php";
?>