<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Super Recruiter</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
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
      if(isset($_POST['create_super_recruiter']))
      {   
      $msg=$objectjda->createSuperRecruiter();
      }
      ?>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">            
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8">
                    <div class="mdc-card">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mb-0"><?= isset($msg)? $msg:'Super Recruiter' ?></h4>
                          </div>
                          <div class="d-block d-sm-flex justify-content-between align-items-center">
                              <h5 class="card-sub-title mb-2 mb-sm-0">Add New Super Recruiter Here</h5>
                          </div>
                        <form method="post">
                        <div class="mdc-layout-grid__inner mt-4">
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                <select name="company" required="required"  class="form-control">                               
                                <option value="">Select a company</option>
                                <?php foreach($objectjda->findAllCompanyByNameAndID() as $companyData) {?>
                                <option value="<?= $companyData['id']?>"><?= $companyData['company_name']?></option>
                                <?php } ?>
                                </select>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                <input name="name" required="required" class="mdc-text-field__input" id="text-field-hero-input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                    <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                <input name="email" required="required"   class="mdc-text-field__input" id="text-field-hero-input" type="email">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                    <label for="text-field-hero-input" class="mdc-floating-label">Email</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                <input  name="password" required="required" class="mdc-text-field__input" id="text-field-hero-input" type="password">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                    <label for="text-field-hero-input" class="mdc-floating-label">Password</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                                </div>
                            </div>
                            <button  name="create_super_recruiter"  class="mdc-button mdc-button--raised filled-button--success mdc-ripple-upgraded" style="--mdc-ripple-fg-size:56px; --mdc-ripple-fg-scale:1.96952; --mdc-ripple-fg-translate-start:3.71875px, -15px; --mdc-ripple-fg-translate-end:18.8047px, -10px;">
                                Submit
                            </button>
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
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
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