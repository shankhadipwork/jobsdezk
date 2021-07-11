<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Recruiter listing</title>
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
      <?php include_once("header.php");  ?>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">   
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                    <div class="add-btn d-right">
                        <a href="add-recruiter" class="btn btn-add">+ Add New Super Recruiter</a>
                    </div>
                </div>          
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                  <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-0">Recruiter Listing</h4>
                  </div>
                  <div class="d-block d-sm-flex justify-content-between align-items-center">
                      <h5 class="card-sub-title mb-2 mb-sm-0">Recruiter Listing</h5>
                  </div>
                    <div class="custom-data-table mt-4">
                      <table id="jobListing" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                  <button style="border: none; background: transparent; font-size: 14px;" id="checkAllButton">
                                    <i class="far fa-square"></i>  
                                    </button>
                                </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Company Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($objectjda->findAllSupperRecruiter() as $superRecruterData ) {
                                    $speciCompanyDetails = $objectjda->speciCompanyDetails($superRecruterData['company_id']);
                                    ?>
                            <tr>
                                <td></td>
                                <td><?= $superRecruterData['name']?></td>
                                <td><?= $superRecruterData['email']?></td>
                                <td><?= $speciCompanyDetails['company_name']?></td>
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
                                          <h6 class="item-subject font-weight-normal">View</h6>
                                        </li>
                                        <li class="mdc-list-item" role="menuitem">
                                          <h6 class="item-subject font-weight-normal">Update</h6>
                                        </li>
                                        <li class="mdc-list-divider"></li>
                                        <li class="mdc-list-item" role="menuitem">
                                          <h6 class="item-subject font-weight-normal">Delete</h6>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>                                  
                                </td>
                            </tr>
                            <?php  } ?>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Company Name</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
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
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                    <input class="mdc-text-field__input" id="text-field-hero-input">
                    <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                        <label for="text-field-hero-input" class="mdc-floating-label">Company Title</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                    </div>
                    </div>
                </div>
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                    <input class="mdc-text-field__input" id="text-field-hero-input">
                    <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                        <label for="text-field-hero-input" class="mdc-floating-label">Company Description</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                    </div>
                    </div>
                </div>
                <button class="mdc-button mdc-button--raised filled-button--success mdc-ripple-upgraded" style="--mdc-ripple-fg-size:56px; --mdc-ripple-fg-scale:1.96952; --mdc-ripple-fg-translate-start:3.71875px, -15px; --mdc-ripple-fg-translate-end:18.8047px, -10px;">
                    Success
                </button>
            </div>
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
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
  <script src="https://kit.fontawesome.com/659d257d45.js" crossorigin="anonymous"></script>
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