<?php
require_once "partisions/header.php";
?>


		<!--start page wrapper -->
		
		<!-- New part Start -->
		

		<!-- New part End -->


		<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4" style="margin-top: 120px;">
			<div class="container">
			<div class="col">
						<div class="card radius-15 bg-primary">
							<div class="card-body text-center">
								<div class="p-4 radius-15">
									<img src="uploads/profile_images/<?= $profile_photo ?>" width="110" height="110" class="rounded-circle shadow p-1 bg-white" alt="">
									
									<h4 class="mb-0 mt-5 text-white"> <?= $_SESSION["s_first_name"]  ?> <?= $_SESSION["s_last_name"]  ?></h4>
									<h5 class="mb-0 text-white"><?= $_SESSION["s_mail"]  ?></h5>
									<p class="mb-3 mt-5 text-white">ID NO : <?= $_SESSION["s_id"]  ?></p>
									
									<div class="d-grid"> <a href="" class="btn btn-white radius-15"> <?= $_SESSION["country"]  ?> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>

		<div class="page-wrapper">
			<div class="page-content">
				 <div class="card radius-10">
                         <div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Login Users,</h6>
								</div>
							</div>
							<br>
						 <div class="table-responsive">
						   <table class="table align-middle mb-0">
							<thead class="table-light">
							 <tr>
							   <th>Id</th>
							   <th>Name</th>
							   <th>User E-mail</th>
							   <th>Contact</th>
							   <th>From</th>
							   <th>Address</th>
							   <th>Account Open Date</th>
							 </tr>
							 </thead>
							 <tbody><tr>
								 <?php
								 $user_query = "SELECT * FROM register_members";
								 $user_query_connect = mysqli_query($db_connect, $user_query);
								 $id = 1;
								 ?>

								<?php foreach($user_query_connect as $users):  ?>

							  <td> <?= $id++ ?> </td>
							  <td> <?= $users['first_name'] ?> <?= $users['last_name'] ?> </td>
							  <td> <?= $users['email'] ?> </td>
							  <td><?= $users['contact'] ?></td>
							  <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100"><?= $users['country'] ?></span></td>
							  <td> <?= $users['address'] ?> </td>
							  <td> <?= $users['created_at'] ?> </td>
							 </tr>
							
							 <?php endforeach;  ?>

						    </tbody>
						  </table>
						  </div>
						 </div>
					</div>	 
			</div>
		</div>
		<!--end page wrapper -->


<?php
require_once "partisions/footer.php";
?>