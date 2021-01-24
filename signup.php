<?php 
	require_once('class.php');
    $App->signup();
    $userdetails = $App->get_userdata();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ableproadmin.com/bootstrap/default/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jan 2021 15:28:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

	<title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	


</head>

<!-- [ auth-signup ] start -->

<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<form action="" method="post">
							<img src="" alt="" class="img-fluid mb-4">
							<h4 class="mb-3 f-w-400">Create account</h4>
							<div class="form-group mb-3">
								<label class="floating-label" for="first_name">First Name</label>
								<input type="text" class="form-control" name="first_name" id="first_name" placeholder=""  required>
							</div>
							<div class="form-group mb-3">
								<label class="floating-label" for="last_name">Last Name</label>
								<input type="text" class="form-control" name="last_name" id="last_name" placeholder=""  required>
							</div>
							<div class="form-group mb-3">
								<label class="floating-label" for="email">Email address</label>
								<input type="text" class="form-control" name="email" id="email" placeholder=""  required>
							</div>
							<div class="form-group mb-3">
								<label class="floating-label" for="phone">Phone</label>
								<input type="text" class="form-control" name="phone" id="phone" placeholder=""  required>
							</div>
							<div class="form-group mb-4">
								<label class="floating-label" for="password">Password</label>
								<input type="password" class="form-control" name="password" id="password" placeholder=""  required>
							</div>
							<div class="form-group mb-4">
								<label class="floating-label" for="usertype">User-type</label>
								<select name="usertype" id="usertype" class="form-group mb-4">
									<option value="">--select</option>
									<option value="applicant">Applicant</option>
									<option value="employee">Employer</option>
								</select>
							</div>
							<button class="btn btn-primary btn-block mb-4"type="submit" name="add">Sign up</button>
							<p class="mb-2">Already have an account? <a href="signin.php" class="f-w-400">Signin</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>


<!-- Mirrored from ableproadmin.com/bootstrap/default/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jan 2021 15:28:49 GMT -->
</html>
<?php
include('footer.php');
?>