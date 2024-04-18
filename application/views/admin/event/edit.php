<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/favicon.png" />
  </head>
  <body>
  <!-- partial -->
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard_admin">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Create</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="event">Event</a></li>
                  <li class="nav-item"> <a class="nav-link" href="sertifikat">Sertifkat</a></li>
                  <li class="nav-item"> <a class="nav-link" href="generate">Generate</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="<?php echo base_url(); ?>admin/auth/logout" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div>
            </li>
          </ul>
        </nav>


<!-- partial -->
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Event</h4>
                  <p class="card-description">
                  </p>
                  <form action="<?= base_url('admin/event/fungsi_edit') ?>" method="post" class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Event Name</label>
                      <input type="hidden" class="form-control" id="exampleInputUsername1" name="event_id" value="<?= $event->event_id ?>" placeholder="" readonly>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="event_name" value="<?= $event->event_name ?>" placeholder="Event Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Event Date</label>
                      <input type="date" class="form-control" id="exampleInputUsername1" name="event_date" value="<?= $event->event_date ?>" placeholder="Event Date">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Location</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="location" value="<?= $event->location ?>" placeholder="Location">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Organizer</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="organizer" value="<?= $event->organizer ?>" placeholder="Organizer">
                    </div>
                    <button type="submit" class="btn btn-dark me-2">Submit</button>
                    <a href="<?= base_url('admin/event') ?>" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->

          <!-- partial:partials/_footer.html -->
  <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url(); ?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url(); ?>/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url(); ?>/assets/js/off-canvas.js"></script>
    <script src="<?= base_url(); ?>/assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url(); ?>/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?= base_url(); ?>/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
