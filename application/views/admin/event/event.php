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
        <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table Event</h4>
                  <p class="card-description">
                    <div class="table-responsive">
                    <table class="table table-success">
                      <thead>
                          <p class="card-description">
                
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#staticBackdrop">+ Event</button>
                          </p>
                          <th class="text-center" style="width: 60px;">ID</th>
                          <th class="text-center">Name Event</th>
                          <th class="text-center">Tanggal Event</th>
                          <th class="text-center">Lokasi</th>
                          <th class="text-center">Organizer</th>

                          <th class="text-center" style="width: 140px;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach($event as $event){
                        ?>
                        <tr>
                          <td class="text-center"><?= $no++?></td>
                          <td class="text-center"><?= $event->event_name?></td>
                          <td class="text-center"><?= $event->event_date?></td>
                          <td class="text-center"><?= $event->location?></td>
                          <td class="text-center"><?= $event->organizer?></td>

                          <td class="text-center"><label class="badge badge" style="margin-right: 3px;"><a class="text-info" style="text-decoration: none" href="<?= base_url('admin/event/edit/' . $event->event_id) ?>">Edit</a></label><label class="badge badge- danger" style="margin-left: 3px"><a class="text-danger" style="text-decoration: none;" href="<?= base_url('admin/event/hapus/' . $event->event_id) ?>">Hapus</a></label></td> 
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->

            <!-- Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Event</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="<?= base_url('admin/event/fungsi_tambah') ?>" method="post">
              <div class="modal-body">
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Event Name</label>
                        <input type="text" class="form-control" id="inputAddress" name="event_name" placeholder="Event Name" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Event Date</label>
                        <input type="date" class="form-control" id="exampleInputUsername1" name="event_date" placeholder="Event Date">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Location</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="location" placeholder="Location">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Organizer</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="organizer" placeholder="Organizer">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-dark">Tambah</button>
                  </div>
                </div>
                </form>
          </div>
        </div>

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
