<?php
require_once "partisions/header.php";
?>

<!--start page wrapper -->
<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">User Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">User Profilep</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
											<img src="uploads/profile_images/<?= $profile_photo ?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
											<div class="mt-3">
												<h4> <?= $_SESSION["s_first_name"]  ?> <?= $_SESSION["s_last_name"]  ?> </h4>
												<p class="text-secondary mb-1">ID NO : <?= $_SESSION["s_id"]  ?></p>
												<p class="text-muted font-size-sm"><?= $_SESSION["s_mail"]  ?></p>
												
											</div>
										</div>
										<hr class="my-4" />
										<ul class="list-group list-group-flush">
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"> <i class="lni lni-world"></i> Country </h6>
												<span class="text-secondary"><?= $_SESSION["country"]  ?></span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><i class="lni lni-user"></i> contact </h6>
												<span class="text-secondary"><?= $_SESSION["s_contact"]  ?></span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
												<h6 class="mb-0"><i class="lni lni-slideshare"></i> Address</h6>
												
												<span class="text-secondary"><?= $_SESSION["s_address"]  ?></span>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
                                <form action="user_profile_post.php" method="POST" enctype="multipart/form-data">
								<div class="card">
									<div class="card-body">
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">First Name</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" class="form-control" value="<?= $_SESSION["s_first_name"]  ?>" name="first_name">
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Last Name</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" class="form-control" value="<?= $_SESSION["s_last_name"]  ?>" name="last_name">
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Email</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" class="form-control" value="<?= $_SESSION["s_mail"]  ?>" name="email">
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Phone</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" class="form-control" value="<?= $_SESSION ["s_contact"]  ?>" name="contact">
											</div>
										</div>
										<!-- <div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Mobile</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" class="form-control" value="(320) 380-4539" />
											</div>
										</div> -->
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Address</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" class="form-control" value=" <?= $_SESSION["s_address"]  ?>" name="address">
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Update Image</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="file" class="form-control" name="image">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9 text-secondary">
												
												<button type="submit" class="btn btn-primary px-4" name="up_save">Update Changes</button>
											</div>
										</div>
									</div>
								</div>
                                </form>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->

<?php
require_once "partisions/footer.php";
?>