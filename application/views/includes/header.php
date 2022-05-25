<div class="wrapper">  
			<!-- Start Navigation -->
			<nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav">
				<div class="container">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
					<div class="navbar-header">
						<a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/logo.png" class="logo logo-scrolled" alt=""></a>
					</div>
					<div class="collapse navbar-collapse" id="navbar-menu">
						<ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
							<li>
								<a href="<?= base_url() ?>" class="dropdown-toggle" data-toggle="dropdown">Home</a>
							</li>
							<li class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown">Resume Evolution</a>
								<ul class="dropdown-menu animated fadeOutUp">
									
									<li><a href="<?= base_url('recovery-id') ?>">Recovery ID</a></li>
									<li><a href="<?= base_url('cover-letter') ?>">Cover Letter</a></li>
									<li><a href="<?= base_url('relationship-manager') ?>">Relationship Manager</a></li>									
									<li><a href="<?= base_url('linkedin-profilez') ?>">LinkedIn Profile</a></li>									
									<li><a href="<?= base_url('interview-counseling') ?>">Interview Counseling</a></li>									
									<li><a href="<?= base_url('profile-verification') ?>">Profile Verification</a></li>									
									<li><a href="<?= base_url('job-shift-planner') ?>">Job shift planner</a></li>									
								</ul>
							</li>


							<li class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown">Resume Express</a>
								<ul class="dropdown-menu animated fadeOutUp">
									
									<li><a href="<?= base_url('drop-profile') ?>">Drop Profile</a></li>
									<li><a href="<?= base_url('technical-round') ?>">Technical Round</a></li>
									
									<li><a href="<?= base_url('cv-explode') ?>">Cv Explode</a></li>		
								</ul>
							</li>

							<li class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown">Simply Hired</a>
								<ul class="dropdown-menu animated fadeOutUp">	
									<li><a href="<?= base_url('professional-website') ?>">Professional website</a></li>
									<li><a href="<?= base_url('salary-increment') ?>">Salary Increment</a></li>
									<li><a href="<?= base_url('vision-supervision') ?>">Vision Supervision</a></li>
								</ul>
							</li>
                            <li>
								<a href="<?= base_url('contact-us') ?>" class="dropdown-toggle" data-toggle="dropdown">Contact us</a>
							</li>
                            <li>
								<a href="<?= base_url('cart') ?>" class="dropdown-toggle" data-toggle="dropdown">Cart</a>
							</li>
							
						</ul>
						<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
							<!-- <li><a href="javascript:void(0)" data-toggle="modal" data-target="#signup"><i class="fa fa-pencil" aria-hidden="true"></i>Sign Up</a></li> -->
							<li class="left-br"><a href="javascript:void(0)" data-toggle="modal" data-target="#login" class="signin">Login</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- End Navigation -->
			<div class="clearfix"></div>