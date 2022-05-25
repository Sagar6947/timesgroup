<!doctype html>
<html lang="en">



<head>
	<!-- Basic Page Needs
	================================================== -->
	<title><?= $title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<?php include 'includes/header-link.php' ?>

</head>

<body>
	<div class="Loader"></div>

	<?php include 'includes/header.php' ?>


    <section class="inner-header-title" style="background-image:url(assets/img/bn2.jpg);">
				<div class="container">
					<h1>Contact Us</h1>
				</div>
			</section>
	<!-- ========= start Call To Action section =========== -->
	<div class="clearfix"></div>

	<section class="contact-page">
				<div class="container">
				<h2>Drop A Mail</h2>
				
					<div class="col-md-4 col-sm-4">
						<div class="contact-box">
							<i class="fa fa-map-marker"></i>
							<p>Plot No 602/H BK Rd,
Subhash Nagar, Beltola Tiniali,
Guwahati, Assam 781028</p>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<div class="contact-box">
							<i class="fa fa-envelope"></i>
							<p>support@timesgroup.com</br> info@timesgroup.com</p>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<div class="contact-box">
							<i class="fa fa-phone"></i>
							<p>+91-XXX XXXX XXX<br>+91-XXX XXXX XXX</p>
						</div>
					</div>
				</div>
			</section>

		<section class="contact-form">
				<div class="container">
					
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" placeholder="Your Name">
					</div>
					
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" placeholder="Phone Number">
					</div>


					<div class="col-md-12 col-sm-6">
						<input type="email" class="form-control" placeholder="Your Email">
					</div>
					
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" placeholder="Message"></textarea>
					</div>
					
					<div class="col-md-12 col-sm-12">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					
				</div>
			</section>
	
    

           
	<!-- ============================ Before Footer ================================== -->

	<!-- ============================ Before Footer ================================== -->

	<!-- ============================ Footer Start ================================== -->
	<?php include 'includes/footer.php' ?>
	<!-- ============================ Footer End ================================== -->

	<!-- Signin Window Code -->
	<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">

					<div class="new-logwrap">

						<div class="form-group">
							<label>Username</label>
							<div class="input-with-icon">
								<input type="text" class="form-control" placeholder="Enter Your Username">
								<i class="theme-cl ti-user"></i>
							</div>
						</div>

						<div class="form-group">
							<label>Email</label>
							<div class="input-with-icon">
								<input type="email" class="form-control" placeholder="Enter Your Email">
								<i class="theme-cl ti-email"></i>
							</div>
						</div>

						<div class="form-group">
							<label>Password</label>
							<div class="input-with-icon">
								<input type="password" class="form-control" placeholder="Enter Your Password">
								<i class="theme-cl ti-lock"></i>
							</div>
						</div>

						<div class="form-groups">
							<button type="submit" class="btn btn-primary theme-bg full-width">Register</button>
						</div>

						<div class="forget-account text-center">
							<a class="theme-cl" href="#">Forget Password?</a>
						</div>

						<div class="social-devider">
							<span class="line"></span>
							<span class="circle">Or</span>
						</div>

						<div class="social-login row">

							<div class="col-md-6">
								<a href="#" class="jb-btn-icon social-login-facebook"><i class="fa fa-facebook"></i>Facebook</a>
							</div>

							<div class="col-md-6">
								<a href="#" class="jb-btn-icon social-login-google"><i class="fa fa-google-plus"></i>Google</a>
							</div>

							<div class="col-md-6">
								<a href="#" class="jb-btn-icon social-login-twitter"><i class="fa fa-twitter"></i>Twitter</a>
							</div>

							<div class="col-md-6">
								<a href="#" class="jb-btn-icon social-login-linkedin"><i class="fa fa-linkedin"></i>Linkedin</a>
							</div>

						</div>

						<div class="register-account text-center">
							Don't have an account? <a class="theme-cl" href="register.html">Register</a>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End Signin Window -->

	<!-- Scripts
			================================================== -->
	<?php include 'includes/footer-link.php' ?>

	</div>
</body>



</html>