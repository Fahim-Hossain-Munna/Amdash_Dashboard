<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="../assets/css/pace.min.css" rel="stylesheet" />
	<script src="../assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="../assets/css/app.css" rel="stylesheet">
	<link href="../assets/css/icons.css" rel="stylesheet">
	<title>Amdash - Fahim's Admin Template</title>
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
							<img src="../assets/images/logo-img.png" width="180" alt="" />
						</div>
						
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Sign in</h3>
										<p>Don't have an account yet? <a href="register.php">Sign up here</a>
										</p>
									</div>
								     <!-- ================================== -->
											<!-- success message -->
									 <!-- ================================== -->
									 <?php
										if(isset($_SESSION["login_status"])):
										?>
									<div class="alert">
									<div class="container">
									
									<div class="d-flex align-items-center">
										<div class="font-35 text-primary"><i class="bx bx-happy"></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-primary"><?php if(isset($_SESSION["login_status"])) { echo $_SESSION["login_status"]; }?></h6>
											<div>Your Registration Completed.</div>
										</div>
									</div>
									</div>
									</div>
									<?php
										endif;
									?>
								     <!-- ================================== -->
									        <!-- success message -->
									 <!-- ================================== -->

									  <!-- ================================== -->
											<!-- success message -->
									 <!-- ================================== -->
									 <?php
										if(isset($_SESSION["login_error_status"])):
										?>
									<div class="alert">
									<div class="container">
									
									<div class="d-flex align-items-center">
										<div class="font-35 text-danger"><i class="bx bx-error"></i>
										</div>
										<div class="ms-3">
											<h6 class="mb-0 text-danger"><?php if(isset($_SESSION["login_error_status"])) { echo $_SESSION["login_error_status"]; }?></h6>
											<div>You can't able to login your Dashboard sir,</div>
										</div>
									</div>
									</div>
									</div>
									<?php
										endif;
									?>
								     <!-- ================================== -->
									        <!-- success message -->
									 <!-- ================================== -->
									<div class="login-separater text-center mb-4"> <span>SIGN IN WITH REGISTERED EMAIL</span>
										<hr/>
									</div>
									
									<div class="form-body">
										<form class="row g-3" action="login_post.php" method="POST">
											<!-- Email part start -->
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" class="form-control <?= (isset( $_SESSION["email_error"] )) ? "is-invalid" : "" ?>" id="inputEmailAddress" placeholder="Email Address" value="<?php if(isset($_SESSION["email_old"])){ echo $_SESSION["email_old"] ; } ?>" name="email">
													<!-- error code start -->
													<?php
													if(isset($_SESSION["email_error"])):
													?>
													<div id="emailHelp" class="form-text m-b-md text-danger"><?php if(isset($_SESSION["email_error"])) { echo $_SESSION["email_error"] ; } ?>  </div>
													<?php
													endif;
												 ?>
												 <!-- error code end -->
											</div>
											<!-- Email part end -->

											<!-- password part start -->
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Enter Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0 <?= (isset( $_SESSION["pass_error"] )) ? "is-invalid" : "" ?>" id="inputChoosePassword" placeholder="Enter Password" name="password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
													
												</div>
													<!-- error code start -->
													<?php
													if(isset($_SESSION["pass_error"])):
													?>
													<div id="emailHelp" class="form-text m-b-md text-danger"><?php if(isset($_SESSION["pass_error"])) { echo $_SESSION["pass_error"] ; } ?>  </div>
													<?php
													endif;
												 ?>
												 <!-- error code end -->
											</div>
											<!-- password part end -->
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input <?= (isset( $_SESSION["check_error"] )) ? "is-invalid" : "" ?>" type="checkbox" id="flexSwitchCheckChecked" checked name="checkbox">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
												<!-- error code start -->
												<?php
													if(isset($_SESSION["check_error"])):
													?>
													<div id="emailHelp" class="form-text m-b-md text-danger"><?php if(isset($_SESSION["check_error"])) { echo $_SESSION["check_error"] ; } ?>  </div>
													<?php
													endif;
												 ?>
												 <!-- error code end -->
											</div>
											
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>../
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="../assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="../assets/js/app.js"></script>
</body>

</html>

<?php
session_unset();
?>