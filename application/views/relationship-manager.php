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
            <h1>RELATIONSHIP MANAGER</h1>
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
												<h4>Relationship Manager</h4>
											</div>
											<div class="ur-detail-wrap-body">
												<form>
													<div class="form-group">
														<label>Total Price</label>
														<select id="choose-category" class="form-control">
															<option>Total Price - Rs. 1800</option>
															
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
                                <img src="<?= base_url() ?>assets/images/relationship_manager.jpeg" alt="" width="100%">

                                <p class="text-justify pt">In this busy world, employees don't get proper time to analysis the market and evaluate their importance in the competitive world. Everyone is busy in rushing to office and completing the daily task. Employees are not aware of the outside market value of their profile. In this service, your career will be glorified by our expert Career Analyst. They will help you to attain the maximum attention of the nearby opportunities by grabbing the options for you. They will update you weekly about the opportunities available for you within the relevant industry. Availing this service will safe your time as your Career Assistant will deliver the opportunities available in required industry.</p>

								</div>
							</div>
							
						</div>
						
					</div>
				</div>
			</section>





    <!-- ============================ Before Footer ================================== -->
    <div class="before-footer">
        <div class="container">
            <div class="row">

                <!-- <div class="col-md-6 col-sm-6">
					<div class="jb4-form-fields">
						<div class="input-group">
							<input type="email" class="form-control" placeholder="Enter your email address">
							<span class="input-group-btn">
								<button class="btn theme-bg" type="submit"><span class="fa fa-paper-plane-o"></span></button>
							</span>
						</div>
					</div>
				</div> -->

                <div class="col-md-12 col-sm-12 hill">
                    <ul class="job stock-facts">
                        <li><span>2744</span></br>Jobs</li>
                        <li><span>500</span></br>Members</li>
                        <li><span>700</span></br>Resume</li>
                        <li><span>1250</span></br>Company</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
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