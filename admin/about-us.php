<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>About Us</title>
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
    <?php include_once("left-aside.php"); ?>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
      <?php include_once("header.php");  
      $aboutusDetails = $objectjda->specificAboutUs();
      $aboutusRowCount = $objectjda->aboutUsRowCount();
      if(isset($_POST['jobDezk_aboutUs']))
      {   
      $msg=$objectjda->jobDezkAboutUsCU();
      }
      ?>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner mt-4 tabs-content">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                  <div class="mdc-card">
                    <div class="d-flex justify-content-between">
                      <h4 class="card-title mb-0"><?= isset($msg)? $msg:'About Us';?></h4>
                    </div>
                    <div class="d-block d-sm-flex justify-content-between align-items-center">
                        <h5 class="card-sub-title mb-2 mb-sm-0">JobDezk about us contents</h5>
                    </div>
                    <form method="POST">
                    <div class="mdc-layout-grid__inner mt-4">   
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                            <div class="container">
                                <div class="form-group">
                                    <label for="">About JobsDezk*</label>
                                    <textarea name="about" require="required" id="" rows="20" class="form-control"><?php if($aboutusRowCount > 0 ) {echo $aboutusDetails['about'];}?> </textarea>
                                </div>
                            </div>
                        </div>
                      </div>  
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                            <div class="container">
                                <div class="form-group">
                                    <label for="">Address/Contact us*</label>
                                    <textarea name="address" require="required" id=""  rows="20" class="form-control"><?php if($aboutusRowCount > 0 ) {echo $aboutusDetails['address'];}?></textarea>
                                </div>
                            </div>
                        </div>
                      </div> 


                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 template-demo action-btns">
                            <button class="mdc-button mdc-button--raised filled-button--danger mdc-ripple-upgraded" style="--mdc-ripple-fg-size:72px; --mdc-ripple-fg-scale:1.87894; --mdc-ripple-fg-translate-start:-6.28125px, -28px; --mdc-ripple-fg-translate-end:24px, -18px;">
                              Cancel
                            </button>
                            <button name="jobDezk_aboutUs" class="mdc-button mdc-button--raised filled-button--success mdc-ripple-upgraded" style="--mdc-ripple-fg-size:72px; --mdc-ripple-fg-scale:1.87894; --mdc-ripple-fg-translate-start:-6.28125px, -28px; --mdc-ripple-fg-translate-end:24px, -18px;">
                              Save
                            </button>
                        </div>
                    </div>
                    </form>

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
  <script src="assets/js/base.js"></script>
  <!-- End custom js for this page-->
</body>
</html> 