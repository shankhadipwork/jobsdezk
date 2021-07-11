<?php 
include_once("main.class.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>JobDeskz Dash</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
<script src="assets/js/preloader.js"></script>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <?php include_once('left-aside.php'); ?>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
      <?php include_once('header.php'); ?>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <a href="" class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-4-tablet ">
                <div class="mdc-card info-card info-card--success d-blue">
                  <div class="card-inner">
                   Right Banner
                  </div>
                </div>
              </a>
              <a href="" class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success d-green">
                  <div class="card-inner">
                   Companies Logo
                  </div>
                </div>
              </a>
              <a href="" class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success d-red">
                  <div class="card-inner">
                    Sliding Banner
                  </div>
                </div>
              </a>
              <a href="" class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success d-orange">
                  <div class="card-inner">
                    Job Tokens
                  </div>
                </div>
              </a>
              <a href="" class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success d-yellow">
                  <div class="card-inner">
                    Vertical Bar
                  </div>
                </div>
              </a>
              <a href="" class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success d-purple">
                  <div class="card-inner">
                    Lower Token Banner
                  </div>
                </div>
              </a>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                  <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-0">Home Page Right Banner</h4>
                  </div>
                  <div class="d-block d-sm-flex justify-content-between align-items-center">
                      <h5 class="card-sub-title mb-2 mb-sm-0">Drag and Drop files</h5>
                  </div>
                  <div class="mdc-layout-grid__inner mt-2">
                    
                    <form action="" method="POST" enctype="multipart/form-data">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label">Upload File</label>
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div><b>Preview</b></div>
                                    <div class="box-tools pull-right">
                                      <button type="button" class="btn btn-danger btn-xs remove-preview">
                                        <i class="fa fa-times"></i> Reset This Form
                                      </button>
                                    </div>
                                  </div>
                                  <div class="box-body"></div>
                                </div>
                              </div>
                              <div class="dropzone-wrapper">
                                <div class="dropzone-desc">
                                  <i class="glyphicon glyphicon-download-alt"></i>
                                  <p>Choose an image file or drag it here.</p>
                                </div>
                                <input type="file" name="img_logo" class="dropzone">
                              </div>
                            </div>
                          </div>
                        </div>
                  
                        <div class="row">
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right">Upload</button>
                          </div>
                        </div>
                      </div>
                    </form>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </main>
        <!-- partial:partials/_footer.html -->
       <?php include_once("footer.php"); ?>
        <!-- partial -->
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="assets/vendors/chartjs/Chart.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="assets/js/material.js"></script>
  <script src="assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>
</html>     