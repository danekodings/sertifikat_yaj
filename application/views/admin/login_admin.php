<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-sertifikat</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <center><img src="<?php echo base_url(); ?>/assets/images/e-sertifikat.png"></center>
                </div>
                <h8>Hello! </h8>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                  
                  <form action="<?= base_url('admin/Auth/login') ?>" method="post" class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" name="username"class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password"class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="mt-3">
                    <button type="submit" a class="btn btn-block btn-dark btn-lg font-weight-medium auth-form-btn">SIGN IN</a>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                  </div>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Login User ? <a href="<?= base_url('auth') ?>"class="text-primary">Login</a>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url(); ?>/assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>