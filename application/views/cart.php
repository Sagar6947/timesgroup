
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
            <h1>Cart</h1>
        </div>
    </section>
    <!-- ========= start Call To Action section =========== -->
    <div class="clearfix"></div>

    <section class="advance-search">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Total</th>
      <th scope="col">Action</th>
    </tr> 
</thead>
    <tbody>
    <tr>
      <th scope="row">Your Cart is Empty...!!!</th>
    </tr>
  </tbody>
</table>
                </div>
            </div>
        </div>
    </section>


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