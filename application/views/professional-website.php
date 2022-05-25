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
            <h1>Professional Website</h1>
        </div>
    </section>
    <!-- ========= start Call To Action section =========== -->
    <div class="clearfix"></div>

    <section class="advance-search">
				<div class="container">
					<div class="row">
					
						<div class="col-md-4 col-sm-12">
							<div class="full-sidebar-wrap">
								
								<div class="show-hide-sidebar hidden-xs hidden-sm">
								
									<!-- Search Job -->
									<div class="sidebar-widgets">
									
										<div class="ur-detail-wrap">
											<div class="ur-detail-wrap-header">
												<h4>Professional Website</h4>
											</div>
											<div class="ur-detail-wrap-body">
												<form>
													<div class="form-group">
														<label>Total Price</label>
														<select id="choose-category" class="form-control">
															<option>Total Price - Rs. 21222</option>
															
														</select>
													</div>
													<button type="submit" class="btn btn-primary full-width">Buy Now</button>
												</form>
											</div>
										</div>
										
									</div>

									<!-- /Compensation -->
								</div>
								
							</div>
						</div>
					
						<div class="col-md-8 col-sm-12">
							
							<!--Browse Employers -->							
							<div class="row">
								<div class="col-md-12">
                                <img src="<?= base_url() ?>assets/images/pro-webiste.jpeg" alt="" width="100%">

                                <p class="text-justify pt">Resume? How much creative a resume can be? How many credentials you can add in your resume? There are a lot of advantages of having the perfect resume to get the job shortlisted for jobseeker as the resume makes the first move before an interview. Few piece of papers help the jobseekers and HRs to get the clear picture on the Employee! However, you can not actually rely on it! eProfile is the new and smart way to represent yourself to the company. In this service, you can to show your personality and credentials to the HRs instantly and creatively. From your profile summary to experiences to achievements, everything can be seen on a single click. You can share your link with anyone worldwide within seconds. We have different templetes of the Social eProfiles, you may choose them according to your interest.</p>

								</div>
							</div>
							
						</div>
						
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