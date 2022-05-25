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
					<h1>About Us</h1>
				</div>
			</section>
	<!-- ========= start Call To Action section =========== -->
	<div class="clearfix"></div>
	<section class="call-to-act">
		<div class="container-fluid">

			<div class="col-md-6 col-sm-6 no-padd bl-dark">
				<div class="call-to-act-caption">
				
					
					<h2>WELCOME TO TIMES TO JOB</h2>
					<h3 class="text-justify">Since 2016, Times To Job has given employment searchers free admittance to a large number of occupations from a great many organization sites and employment loads up. As the main compensation for-execution enlistment publicizing organization, Times To Job drives a great many focused on candidates to occupations in each field and is the most practical wellspring of contender for a large number of organizations. What separates Times To Job from other enrolling channels is the nature of employment applicants we convey and our effect on up-and-comers' choices as they research occupations and organizations.</h3>
				</div>
			</div>

			<div class="col-md-6 col-sm-6 no-padd gr-dark">
				<div class="call-to-act-caption">
				<img src="<?= base_url() ?>assets/images/about-us.png" alt="about us" class="pb-36">
				</div>
			</div>

		</div>
	</section>


    <section class="testimonial" id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="main-heading">
                        <p>What Our Client Say</p>
                        <h2>Our Success <span>Stories</span></h2></div>
                </div>
                <div class="row">
                    <div id="client-testimonial-slider" class="owl-carousel">
                        <div class="client-testimonial">
                            <div class="pic"><img src="assets/img/client-1.jpg" alt=""></div>	
                            <p class="client-description">I have already heard back about the internship I applied through Timestojob, that's the 
                                            fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.I have already heard back 
                                            about the internship I applied through Timestojob, that's the fastest job reply</p>
                            <h3 class="client-testimonial-title">Ramesh Singh</h3>
                            <ul class="client-testimonial-rating">
                                <li class="fa fa-star-o"></li>
                                <li class="fa fa-star-o"></li>
                                <li class="fa fa-star"></li>
                            </ul>
                        </div>
                        
                        <div class="client-testimonial">
                            <div class="pic"><img src="assets/img/client-1.jpg" alt=""></div>	
                            <p class="client-description">I have already heard back about the internship I applied through Timestojob, that's the 
                                            fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.I have already heard back 
                                            about the internship I applied through Timestojob, that's the fastest job reply</p>
                            <h3 class="client-testimonial-title">Ramesh Singh</h3>
                            <ul class="client-testimonial-rating">
                                <li class="fa fa-star-o"></li>
                                <li class="fa fa-star-o"></li>
                                <li class="fa fa-star"></li>
                            </ul>
                        </div>
                        
                        <div class="client-testimonial">
                            <div class="pic"><img src="assets/img/client-1.jpg" alt=""></div>	
                            <p class="client-description">I have already heard back about the internship I applied through Timestojob, that's the 
                                            fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.I have already heard back 
                                            about the internship I applied through Timestojob, that's the fastest job reply</p>
                            <h3 class="client-testimonial-title">Ramesh Singh</h3>
                            <ul class="client-testimonial-rating">
                                <li class="fa fa-star-o"></li>
                                <li class="fa fa-star-o"></li>
                                <li class="fa fa-star"></li>
                            </ul>
                        </div>
                        
                        <div class="client-testimonial">
                            <div class="pic"><img src="assets/img/client-1.jpg" alt=""></div>	
                            <p class="client-description">I have already heard back about the internship I applied through Timestojob, that's the 
                                            fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.I have already heard back 
                                            about the internship I applied through Timestojob, that's the fastest job reply</p>
                            <h3 class="client-testimonial-title">Ramesh Singh</h3>
                            <ul class="client-testimonial-rating">
                                <li class="fa fa-star-o"></li>
                                <li class="fa fa-star-o"></li>
                                <li class="fa fa-star"></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

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