<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Company listing</title>
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
      if(isset($_POST['create_new_company']))
      {   
      $msg=$objectjda->createNewCompany();
      }
       ?>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">   
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                    <div class="add-btn d-right">
                    <h3><?= isset($msg)? $msg:'' ?></h3>
                        <a href="javascript:;" class="btn btn-add" id="addCompanyModalBtn">+ Add New Company</a>
                    </div>
                </div>          
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                    <div class="custom-data-table">

                        <table id="companiesListing" class="display responsive">
                            <thead>
                                <tr>
                                    <th>Column Name</th>
                                    <th>Jobs</th>
                                    <th>Descriptions</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($objectjda->findAllCompnay() as $companyList ) {
                                    $jobCount = $objectjda->findAllJobsOpeningCountByCompany($companyList['id']);
                                    ?>
                               
                                <tr>
                                    <td><?= $companyList['company_name']?></td>
                                    <td><?= $jobCount?></td>
                                    <td><?= $companyList['about']?></td>
                                    <td>
                                      <div class="menu-button-container">
                                        <button class="mdc-menu-button">
                                          <span class="material-icons">
                                            more_horiz
                                          </span>
                                        </button>
                                        <div class="mdc-menu mdc-menu-surface" tabindex="-1" id="demo-menu">
                                          <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                            <li class="mdc-list-item" role="menuitem">
                                              <h6 class="item-subject font-weight-normal">Preview</h6>
                                            </li>
                                            <li class="mdc-list-item" role="menuitem">
                                              <h6 class="item-subject font-weight-normal">Validate</h6>
                                            </li>
                                            <li class="mdc-list-divider"></li>
                                            <li class="mdc-list-item" role="menuitem">
                                              <h6 class="item-subject font-weight-normal">Remove</h6>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>                                  
                                    </td>
                                </tr>
                                <?php  } ?>

                            </tbody>
                        </table>

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

<div id="addCompanyModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Add A Company</h2>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                    <input name="company_name" placeholder="Enter A Company Name" required="required" type="text" class="mdc-text-field__input" id="text-field-hero-input">
                    <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                        <label for="text-field-hero-input" class="mdc-floating-label">Company Title</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                    </div>
                    </div>
                </div>
                <button name="create_new_company" class="mdc-button mdc-button--raised filled-button--success mdc-ripple-upgraded" style="--mdc-ripple-fg-size:56px; --mdc-ripple-fg-scale:1.96952; --mdc-ripple-fg-translate-start:3.71875px, -15px; --mdc-ripple-fg-translate-end:18.8047px, -10px;">
                    Success
                </button>
            </div>
          </form>
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