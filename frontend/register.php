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
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="../assets/css/app.css" rel="stylesheet">
	<link href="../assets/css/icons.css" rel="stylesheet">
	<title>Amdash - Fahim's Admin Template</title>
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="my-4 text-center">
							<img src="../assets/images/logo-img.png" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Sign Up</h3>
										<p>Already have an account? <a href="login.php">Sign in here</a>
										</p>
									</div>
								
									<div class="login-separater text-center mb-4"> <span>SIGN UP WITH EMAIL</span>
										<hr/>
									</div>
                                    <!-- Form Start -->
                                    <!-- <form action="register_post.php" method="POST"> -->
									<div class="form-body">
										<form class="row g-3" action="register_post.php" method="POST">
											<!-- Username Part start -->
											<div class="col-sm-6">
												<label for="inputFirstName" class="form-label">First Name</label>
												<input type="text" class="form-control <?= (isset( $_SESSION["user_error"] )) ? "is-invalid" : "" ?>" id="inputFirstName" placeholder="Jhon" name="firstname">
												<!-- error code start -->
												<?php
													if(isset($_SESSION["user_error"])):
													?>
													<div id="emailHelp" class="form-text m-b-md text-danger"><?php if(isset($_SESSION["user_error"])) { echo $_SESSION["user_error"] ; } ?>  </div>
													<?php
													endif;
												 ?>
												 <!-- error code end -->
											</div>
											<!-- Username Part end -->

											<!-- username Part start -->
											<div class="col-sm-6">
												<label for="inputLastName" class="form-label">Last Name</label>
												<input type="text" class="form-control <?= (isset( $_SESSION["user_last"] )) ? "is-invalid" : "" ?>" id="inputLastName" placeholder="Deo" name="secname">
												<?php
													if(isset($_SESSION["user_last"])):
													?>
													<div id="emailHelp" class="form-text m-b-md text-danger"><?php if(isset($_SESSION["user_last"])) { echo $_SESSION["user_last"] ; } ?>  </div>
													<?php
													endif;
												 ?>
												 <!-- error code end -->
											</div>
											<!-- username Part end -->

											<!-- email Part start -->
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" class="form-control <?= (isset( $_SESSION["email_error"] )) ? "is-invalid" : "" ?>" id="inputEmailAddress" placeholder="example@user.com" name="email">
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
											<!-- email Part end -->

											<!-- password Part start -->
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
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
											<!-- password Part end -->
											<div class="col-12">
												<label for="inputSelectCountry" class="form-label">Country</label>
												<select class="form-select" id="inputSelectCountry" aria-label="Default select example" name="country">
													<option selected>Bangladesh</option>
													<option >United Kingdom</option>
													<option >America</option>
													<option >India</option>
                                                    <option >Pakistan</option>
                                                    <option >China</option>
                                                    <option >Nepal</option>
                                                    <option >Srilanka</option>
                                                    <option >Africa</option>
                                                    
												</select>
											</div>
											<div class="col-12">
												<div class="form-check form-switch">
													<input class="form-check-input <?= (isset( $_SESSION["check_error"] )) ? "is-invalid" : "" ?>" type="checkbox" id="flexSwitchCheckChecked" name="checkbox">
													<label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
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
													<button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Sign up</button>
												</div>
											</div>
										</form>
									</div>
                                    <!-- </form> -->
                                
                                    <!-- Form end -->

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
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