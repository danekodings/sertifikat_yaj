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
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sertifikat Table</h4>
                  <p class="card-description">

                  <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#staticBackdrop">+ Certifcate</button>

                  <?= $this->session->flashdata('pesan'); ?>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-success">
                      <thead>
                        <tr>
                          <th class="text-center" style="width: 60px;">ID</th>
                          <th class="text-center">Nama Peserta</th>
                          <th class="text-center">Nama Event</th>
                          <th class="text-center">Tanggal Event</th>
                          <th class="text-center">Text Sertifkat</th>
  
                          <th class="text-center" style="width: 140px;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach($certificate as $certificate){
                        ?>
                        <tr>
                          <td class="text-center"><?= $no++ ?></td>
                          <td class="text-center"><?= $certificate->participant_name ?></td>
                          <td class="text-center"><?= $certificate->event_name ?></td>
                          <td class="text-center"><?= $certificate->event_date ?></td>
                          <td class="text-center"><?= $certificate->certificate_text ?></td>

                          <td class="text-center"><label class="badge badge" style="margin-right: 3px;"><a class="text-dark" style="text-decoration: none;" href="<?= base_url('admin/sertifikat/edit/' . $certificate->certificate_id) ?>">Edit</a></label><label class="badge badger" style="margin-left: 3px;"><a class="text-danger" style="text-decoration: none;" href="<?= base_url('admin/sertifikat/hapus/' . $certificate->certificate_id) ?>">Delete</a></label></td>
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
          </div>
        </div>
        <!-- content-wrapper ends -->

        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Certificate</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="<?= base_url('admin/sertifikat/fungsi_tambah') ?>" method="post">
              <div class="modal-body">
                  <div class="form-group">
                      <label for="inputAddress2" class="form-label">Participant Name</label>
                      <select class="form-control" id="cars" name="participant_name">
                        <option selected="true" disabled="disabled">Choose Participant</option>
                        <?php
                          foreach($users as $users){
                        ?>
                        <option value="<?= $users->full_name ?>"><?= $users->full_name ?></option>
                        <?php
                          }
                        ?>
                      </select>
                  </div>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Event Name</label>
                        <select class="form-control" id="cars" name="event_name">
                          <option selected="true" disabled="disabled">Choose Event</option>
                          <?php
                            foreach($event as $event){
                          ?>
                          <option value="<?= $event->event_name ?>"><?= $event->event_name ?></option>
                          <?php
                            }
                          ?>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Event Date</label>
                        <input type="date" class="form-control" id="exampleInputUsername1" name="event_date" placeholder="Event Date">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Certificate Text</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="certificate_text" placeholder="Certificate Text">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-dark">Tambah</button>
                  </div>
                </form>
            </div>
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
