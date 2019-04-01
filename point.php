<?php
include "header.php";
?>

<div id="index">
	<center>
		<div class="page">
			<div class="header-point" >
				<div align="left">
					<a href="profil.php"><i class="fas fa-chevron-left"></i> </a>
				</div>

				<div class="btn-roll">
					<button type="button" class="btn btn-danger">Roll</button>
				</div>
			</div>			
			<div class="">
				<div class="bg-white">
					<div class="container">
						<div class="row jml-point">
							<div class="col-6 col-sm-6 col-md-6" align="left">
								<h6><i class="fas fa-coins"></i>  <span>5241</span> pts</h6>
							</div>
							<div class="col-6 col-sm-6 col-md-6" align="left">
								<h6><i class="fas fa-medal"></i> <span>1</span> Token</h6>
							</div>
						</div>	
					</div>
					
					<div class="menu-cari">
						<ul class="nav  mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Kuponku</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tukar Kupon</a>
							</li>
						</ul>
					</div>
					<div class="konten-point">
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<!--Kuponku-->
								<div class="container" style="padding-top: 20px;">
									<div class="list-point">
										<img src="assets/img/bg.png">
										<div class="info-point">
											<div class="container">
												<div class="row">
													<div class="col-6 col-sm-6 col-md-6" align="left">
														<label>Discount 10%</label>
														<h6>Berlaku Hingga</h6>
														<small>12 Februari 2019</small>
													</div>
													<div class="col-6 col-sm-6 col-md-6" style="padding-top: 10px;">
														<div class="btn-biru">
															<button type="submit" class="btn ">Pakai</button>
														</div>
													</div>
												</div>
											</div>											
										</div>
									</div>

									<div class="list-point">
										<img src="assets/img/bg.png">
										<div class="info-point">
											<div class="container">
												<div class="row">
													<div class="col-6 col-sm-6 col-md-6" align="left">
														<label>Discount 10%</label>
														<h6>Berlaku Hingga</h6>
														<small>12 Februari 2019</small>
													</div>
													<div class="col-6 col-sm-6 col-md-6" style="padding-top: 10px;">
														<div class="btn-biru">
															<button type="submit" class="btn ">Pakai</button>
														</div>
													</div>
												</div>
											</div>											
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

								<!--Tukar Kupon-->
								<div class="container" style="padding-top: 20px;">
									<div class="list-point">
										<img src="assets/img/bg.png">
										<div class="info-point">
											<div class="container">
												<div class="row">
													<div class="col-6 col-sm-6 col-md-6" align="left" style="padding-top: 5px;">
														<label>Discount 10%</label>
														<h5>4500 pts</h5>
													</div>
													<div class="col-6 col-sm-6 col-md-6" style="padding-top: 10px;">
														<div class="btn-biru">
															<button type="submit" class="btn ">Tukar</button>
														</div>
													</div>
												</div>
											</div>											
										</div>
									</div>

									<div class="list-point">
										<img src="assets/img/bg.png">
										<div class="info-point">
											<div class="container">
												<div class="row">
													<div class="col-6 col-sm-6 col-md-6" align="left" style="padding-top: 5px;">
														<label>Discount 10%</label>
														<h5>4500 pts</h5>
													</div>
													<div class="col-6 col-sm-6 col-md-6" style="padding-top: 10px;">
														<div class="btn-biru">
															<button type="submit" class="btn ">Tukar</button>
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

				</div>
			</div>
		</div>
	</center>
</div>

<?php
include "footer.php";
?>