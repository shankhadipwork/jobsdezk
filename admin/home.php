<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Material Dash</title>
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
      $slidingBanner = $objectjda->specificSlidingBanner();
      if(isset($_POST['upload_sliding_banner']))
      {   
        $specificSlidingBanner=$objectjda->slidingBannerRowCount();
        if($specificSlidingBanner<1){
            $msg=$objectjda->insertSlidingBanner();
        }
        elseif($specificSlidingBanner>0){
            $msg=$objectjda->updateSlidingBanner();
        }
       
     
      }
      ?>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner tabs-nav">
              <a href="#rightBanner" class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-4-tablet ">
                <div class="mdc-card info-card info-card--success d-blue">
                  <div class="card-inner">
                  Right Banner
                  </div>
                </div>
              </a>
              <a href="#companiesLogo" class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success d-green">
                  <div class="card-inner">
                  Companies Logo
                  </div>
                </div>
              </a>
              <a href="#slidingBanner" class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success d-red">
                  <div class="card-inner">
                    Sliding Banner
                  </div>
                </div>
              </a>
              <a href="#jobToken" class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success d-orange">
                  <div class="card-inner">
                    Job Tokens
                  </div>
                </div>
              </a>
              <a href="#verticalBar" class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success d-yellow">
                  <div class="card-inner">
                    Vertical Bar
                  </div>
                </div>
              </a>
              <a href="#lowerTokenBanner" class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success d-purple">
                  <div class="card-inner">
                    Lower Token Banner
                  </div>
                </div>
              </a>
            </div>
            <div class="mdc-layout-grid__inner mt-4 tabs-content">
               

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 tab-panel" id="rightBanner">
                  <div class="mdc-card">
                    <div class="d-flex justify-content-between">
                      <h4 class="card-title mb-0">Home Page Right Banner</h4>
                    </div>
                    <div class="d-block d-sm-flex justify-content-between align-items-center">
                        <h5 class="card-sub-title mb-2 mb-sm-0">Drag and Drop files</h5>
                    </div>
                    <div class="mdc-layout-grid__inner mt-4">   
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>                        
                        </div>
                      </div>  

                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 template-demo action-btns">
                            <button class="mdc-button mdc-button--raised mdc-ripple-upgraded" style="--mdc-ripple-fg-size:72px; --mdc-ripple-fg-scale:1.87894; --mdc-ripple-fg-translate-start:-6.28125px, -28px; --mdc-ripple-fg-translate-end:24px, -18px;">
                              Preview
                            </button>
                            <button class="mdc-button mdc-button--raised filled-button--success mdc-ripple-upgraded" style="--mdc-ripple-fg-size:72px; --mdc-ripple-fg-scale:1.87894; --mdc-ripple-fg-translate-start:-6.28125px, -28px; --mdc-ripple-fg-translate-end:24px, -18px;">
                              Save
                            </button>
                        </div>
                    </div>
                  </div>
                </div>


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 tab-panel" id="companiesLogo">
                  <div class="mdc-card">
                    <div class="d-flex justify-content-between">
                      <h4 class="card-title mb-0">Companies Logo</h4>
                    </div>
                    <div class="d-block d-sm-flex justify-content-between align-items-center">
                        <h5 class="card-sub-title mb-2 mb-sm-0">Drag and Drop files</h5>
                    </div>
                    <div class="mdc-layout-grid__inner mt-4">   
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      

                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 template-demo action-btns">
                            <button class="mdc-button mdc-button--raised mdc-ripple-upgraded" style="--mdc-ripple-fg-size:72px; --mdc-ripple-fg-scale:1.87894; --mdc-ripple-fg-translate-start:-6.28125px, -28px; --mdc-ripple-fg-translate-end:24px, -18px;">
                              Preview
                            </button>
                            <button class="mdc-button mdc-button--raised filled-button--success mdc-ripple-upgraded" style="--mdc-ripple-fg-size:72px; --mdc-ripple-fg-scale:1.87894; --mdc-ripple-fg-translate-start:-6.28125px, -28px; --mdc-ripple-fg-translate-end:24px, -18px;">
                              Save
                            </button>
                        </div>
                    </div>
                  </div>
                </div>


                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 tab-panel" id="slidingBanner">
                <div class="mdc-card">
                <form method="POST" enctype='multipart/form-data'>
                    <div class="d-flex justify-content-between">
                      <h4 class="card-title mb-0">Home Page Sliding Banner</h4>
                    </div>
                    <div class="d-block d-sm-flex justify-content-between align-items-center">
                        <h5 class="card-sub-title mb-2 mb-sm-0">Drag and Drop files</h5>
                    </div>
                    <div class="mdc-layout-grid__inner mt-4">   
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                                <input name="sliding_banner1" type="file"  accept="image/gif, image/jpeg, image/png" <?php if($slidingBanner['image1'] == '') {echo "required='required'";} ?>  class="dropzone">
                                <?php if($slidingBanner['image1'] != '' ) {?>
                                <img src = "../images/sliding_banner/<?=$slidingBanner['image1']?>" width="112" height="112" />
                                <?php } ?>
                              </div>
                            </div>                  
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                                <input name="sliding_banner2" type="file" accept="image/gif, image/jpeg, image/png" class="dropzone">
                                <?php if($slidingBanner['image2'] != '' ) {?>
                                <img src = "../images/sliding_banner/<?=$slidingBanner['image2']?>" width="112" height="112" />
                                <?php } ?>
                              </div>
                            </div>                  
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                                <input name="sliding_banner3" type="file" accept="image/gif, image/jpeg, image/png"  class="dropzone">
                                <?php if($slidingBanner['image3'] != '' ) {?>
                                <img src = "../images/sliding_banner/<?=$slidingBanner['image3']?>" width="112" height="112" />
                                <?php } ?>
                              </div>
                            </div>                  
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>                        
                        </div>
                      </div>  

                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 template-demo action-btns">
                            <button class="mdc-button mdc-button--raised mdc-ripple-upgraded" style="--mdc-ripple-fg-size:72px; --mdc-ripple-fg-scale:1.87894; --mdc-ripple-fg-translate-start:-6.28125px, -28px; --mdc-ripple-fg-translate-end:24px, -18px;">
                              Preview
                            </button>
                            <button type="submit" name="upload_sliding_banner" class="mdc-button mdc-button--raised filled-button--success mdc-ripple-upgraded" style="--mdc-ripple-fg-size:72px; --mdc-ripple-fg-scale:1.87894; --mdc-ripple-fg-translate-start:-6.28125px, -28px; --mdc-ripple-fg-translate-end:24px, -18px;">
                              Save
                            </button>
                        </div>
                    </div>
                    </form>
                  </div>                
                </div>

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 tab-panel" id="jobToken">
                  <div class="mdc-card">
                    <div class="d-flex justify-content-between">
                      <h4 class="card-title mb-0">Job Token</h4>
                    </div>
                    <div class="d-block d-sm-flex justify-content-between align-items-center">
                        <h5 class="card-sub-title mb-2 mb-sm-0">Drag and Drop files</h5>
                    </div>
                    <div class="mdc-layout-grid__inner mt-4">   
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
                                    </div>
                                  </div>
                                  <div class="box-body"></div>
                                </div>
                              </div>
                              <div class="dropzone-wrapper" style="height: 330px;">
                                <div class="dropzone-desc" style="top: 140px;">
                                  <i class="glyphicon glyphicon-download-alt"></i>
                                  <p>Choose an image file or drag it here.</p>
                                </div>
                                <input type="file" name="img_logo" class="dropzone" style="height: 330px;">
                              </div>
                            </div>                  
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>  
                      <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-8">   
                        <div class="mdc-layout-grid__inner"> 
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">  
                            <div class="custom-form">
                              <div class="container">
                                <div class="form-group upload-file">
                                  <div class="preview-zone hidden">
                                    <div class="box box-solid">
                                      <div class="box-header with-border">
                                        <div class="box-tools pull-right">
                                          <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                                <div class="row" style="display: none;">
                                  <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary pull-right">Upload</button>
                                  </div>
                                </div>
                              </div>                        
                            </div>
                          </div>
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">  
                            <div class="custom-form">
                              <div class="container">
                                <div class="form-group upload-file">
                                  <div class="preview-zone hidden">
                                    <div class="box box-solid">
                                      <div class="box-header with-border">
                                        <div class="box-tools pull-right">
                                          <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                                <div class="row" style="display: none;">
                                  <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary pull-right">Upload</button>
                                  </div>
                                </div>
                              </div>                        
                            </div>
                          </div>
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">  
                            <div class="custom-form">
                              <div class="container">
                                <div class="form-group upload-file">
                                  <div class="preview-zone hidden">
                                    <div class="box box-solid">
                                      <div class="box-header with-border">
                                        <div class="box-tools pull-right">
                                          <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                                <div class="row" style="display: none;">
                                  <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary pull-right">Upload</button>
                                  </div>
                                </div>
                              </div>                        
                            </div>
                          </div>
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">  
                            <div class="custom-form">
                              <div class="container">
                                <div class="form-group upload-file">
                                  <div class="preview-zone hidden">
                                    <div class="box box-solid">
                                      <div class="box-header with-border">
                                        <div class="box-tools pull-right">
                                          <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                                <div class="row" style="display: none;">
                                  <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary pull-right">Upload</button>
                                  </div>
                                </div>
                              </div>                        
                            </div>
                          </div>
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">  
                            <div class="custom-form">
                              <div class="container">
                                <div class="form-group upload-file">
                                  <div class="preview-zone hidden">
                                    <div class="box box-solid">
                                      <div class="box-header with-border">
                                        <div class="box-tools pull-right">
                                          <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                                <div class="row" style="display: none;">
                                  <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary pull-right">Upload</button>
                                  </div>
                                </div>
                              </div>                        
                            </div>
                          </div>
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">  
                            <div class="custom-form">
                              <div class="container">
                                <div class="form-group upload-file">
                                  <div class="preview-zone hidden">
                                    <div class="box box-solid">
                                      <div class="box-header with-border">
                                        <div class="box-tools pull-right">
                                          <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                                <div class="row" style="display: none;">
                                  <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary pull-right">Upload</button>
                                  </div>
                                </div>
                              </div>                        
                            </div>
                          </div>
                        </div>         
                        
                      </div>  

                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 template-demo action-btns">
                            <button class="mdc-button mdc-button--raised mdc-ripple-upgraded" style="--mdc-ripple-fg-size:72px; --mdc-ripple-fg-scale:1.87894; --mdc-ripple-fg-translate-start:-6.28125px, -28px; --mdc-ripple-fg-translate-end:24px, -18px;">
                              Preview
                            </button>
                            <button class="mdc-button mdc-button--raised filled-button--success mdc-ripple-upgraded" style="--mdc-ripple-fg-size:72px; --mdc-ripple-fg-scale:1.87894; --mdc-ripple-fg-translate-start:-6.28125px, -28px; --mdc-ripple-fg-translate-end:24px, -18px;">
                              Save
                            </button>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 tab-panel" id="verticalBar">
                  <div class="mdc-card">
                    <div class="d-flex justify-content-between">
                      <h4 class="card-title mb-0">Home Page Vertical Bar</h4>
                    </div>
                    <div class="d-block d-sm-flex justify-content-between align-items-center">
                        <h5 class="card-sub-title mb-2 mb-sm-0">Drag and Drop files</h5>
                    </div>
                    <div class="mdc-layout-grid__inner mt-4">   
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>                        
                        </div>
                      </div>  
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>                        
                        </div>
                      </div> 
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>                        
                        </div>
                      </div> 
                      

                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 template-demo action-btns">
                            <button class="mdc-button mdc-button--raised mdc-ripple-upgraded" style="--mdc-ripple-fg-size:72px; --mdc-ripple-fg-scale:1.87894; --mdc-ripple-fg-translate-start:-6.28125px, -28px; --mdc-ripple-fg-translate-end:24px, -18px;">
                              Preview
                            </button>
                            <button class="mdc-button mdc-button--raised filled-button--success mdc-ripple-upgraded" style="--mdc-ripple-fg-size:72px; --mdc-ripple-fg-scale:1.87894; --mdc-ripple-fg-translate-start:-6.28125px, -28px; --mdc-ripple-fg-translate-end:24px, -18px;">
                              Save
                            </button>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 tab-panel" id="lowerTokenBanner">
                  <div class="mdc-card">
                    <div class="d-flex justify-content-between">
                      <h4 class="card-title mb-0">Home Page Lower Token Banner</h4>
                    </div>
                    <div class="d-block d-sm-flex justify-content-between align-items-center">
                        <h5 class="card-sub-title mb-2 mb-sm-0">Drag and Drop files</h5>
                    </div>
                    <div class="mdc-layout-grid__inner mt-4">   
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>                        
                        </div>
                      </div>  
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">            
                        <div class="custom-form">
                          <div class="container">
                            <div class="form-group upload-file">
                              <div class="preview-zone hidden">
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <div class="box-tools pull-right">
                                      <a href="javascript:;" class="btn btn-danger btn-xs remove-preview">X</a>
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
                            <div class="row" style="display: none;">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Upload</button>
                              </div>
                            </div>
                          </div>                        
                        </div>
                      </div> 
                      

                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 template-demo action-btns">
                            <button class="mdc-button mdc-button--raised mdc-ripple-upgraded" style="--mdc-ripple-fg-size:72px; --mdc-ripple-fg-scale:1.87894; --mdc-ripple-fg-translate-start:-6.28125px, -28px; --mdc-ripple-fg-translate-end:24px, -18px;">
                              Preview
                            </button>
                            <button class="mdc-button mdc-button--raised filled-button--success mdc-ripple-upgraded" style="--mdc-ripple-fg-size:72px; --mdc-ripple-fg-scale:1.87894; --mdc-ripple-fg-translate-start:-6.28125px, -28px; --mdc-ripple-fg-translate-end:24px, -18px;">
                              Save
                            </button>
                        </div>
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
  <script src="assets/js/base.js"></script>
  <!-- End custom js for this page-->
</body>
</html> 