<?php 
// include_once('main.class.php');
//  $srid = base64_decode($_GET['srid']); 
// if(isset($_POST['create_sub_recruiter']))
// {        
//     $msg=$objectjdsr->createNewSubRecruiter($srid);
// }
// //$specificCompanyDtls = $objectjdsr->getSpecificCompanyDetails($srid['company_id']);
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Super Recruiter Dashboard | JobsdeZk</title>
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cabin+Condensed:wght@400;500;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../vendor/OwlCarousel/owl.carousel.min.css">
		<link rel="stylesheet" href="../vendor/OwlCarousel/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
        <script src="https://kit.fontawesome.com/659d257d45.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../css/styles.css">
	</head>
<body>
    <?php include_once('super-header.php');
    include_once('main.class.php');
    $srid = base64_decode($_GET['srid']); 
   if(isset($_POST['create_sub_recruiter']))
   {        
       $msg=$objectjdsr->createNewSubRecruiter($srid);
   }
   $specificCompanyDtls = $objectjdsr->getSpecificCompanyDetails($suPRecruiterDetails['company_id']);

   if(isset($_POST['update_company']))
   {        
       $msg=$objectjdsr->updateRecuiterCompany($suPRecruiterDetails['company_id']);
      header('Location: '.$_SERVER['REQUEST_URI']);
   }



    ?>
    <div class="content-wrapper type-2 bg-dots s-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-title">
                        <?= isset($msg)? $msg:'Welcome to Jobsdezk '.$superRecruiterName?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-sub">
                        How it works?
                    </div>
                    <div class="section c-blue">

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="d-sub">
                        List of Sub-Recruiters
                    </div>
                    <div class="section">
                        <div class="jobs-block-wrapper">
                           <?php 
                                $subRecruiterCount = $objectjdsr->subRecruiterCountBySuperRecruiter($srid);
                                if($subRecruiterCount > 0){
                                foreach($objectjdsr->findAllSubRecruiterDtlsBySuperRecruiter($srid)  as $subRecruiterData) {
                                $specificCity = $objectjdsr->specificCityDetails( $subRecruiterData['city']);
                           ?>
                            <div class="jobs-block">
                                <div class="block-item">
                                    <div class="title"><?= $subRecruiterData['name']?></div>
                                </div>
                                <div class="block-item">
                                    <div class="company-title"><?= $specificCity['name']?></div>
                                </div>
                                <div class="block-item">
                                    <div class="action-item">
                                        <a href="" class="btn-apply">View Jobs</a>
                                        <a href="" class="btn-apply">Edit</a>
                                    </div>
                                </div>
                            </div>   
                            <?php } }  if ($subRecruiterCount < 4) {?>
                                
                            <div class="add-recruiter">
                                <a href="" class="btn btn-add" data-toggle="modal" data-target="#addNewRec" >+ Add Sub Recruiter</a>
                            </div>
                            <?php  } ?>                     
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-sub mt-40">
                       Manage Company Details
                    </div>
                     <form method="post" enctype="multipart/form-data">
                    <div class="steps-form form-d">
                        <div class="form-group">
                            <label for="">About {Company}</label>
                            <textarea name="about" id="" class="form-control" rows="6"><?= $specificCompanyDtls['about']?></textarea>
                        </div>
                        <div class="row  mt-40">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="f-text">
                                        Fill Figures here.<br/>(Multiple Options Available)
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="icon-block form-group">
                                            <div class="icon">
                                                <img src="../images/customer.svg" alt="" class="img-fluid">
                                            </div>
                                            <div class="input-block">
                                                <label for="">Size</label>
                                                <input type="text" value="<?= $specificCompanyDtls['size']?>" name="size" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="icon-block form-group">
                                            <div class="icon">
                                                <img src="../images/rating.svg" alt="" class="img-fluid">
                                            </div>
                                            <div class="input-block">
                                                <label for="">Employee Satisfaction</label>
                                                <input type="text" name="employee_satisfaction" value="<?= $specificCompanyDtls['employee_satisfaction']?>" class="form-control" style="width: 65%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="icon-block form-group">
                                            <div class="icon">
                                                <img src="../images/placeholder.svg" alt="" class="img-fluid">
                                            </div>
                                            <div class="input-block">
                                                <label for="" class="t-2">Location</label>
                                              <select class="form-control select-location" name="locations[]" multiple="multiple" style="width: 100%;">
                                                    <option value="">Select A Location</option>
                                                    <?php  foreach($objectjdsr->findAllActiveCity() as $locationDtls ) {?>
                                                        <option value=""><?= $locationDtls['name']?></option>
                                                    <?php } ?>
                                                </select> 

                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="icon-block form-group">
                                            <div class="icon">
                                                <img src="../images/medal-of-award.svg" alt="" class="img-fluid">
                                            </div>
                                            <div class="input-block">
                                                <label for="" class="t-2">Awards</label>
                                                <input type="text" name="awards" value="<?= $specificCompanyDtls['awards']?>" class="form-control" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="icon-block form-group">
                                            <div class="icon">
                                                <img src="../images/medal-of-award.svg" alt="" class="img-fluid">
                                            </div>
                                            <div class="input-block">
                                                <label for="" class="t-2">Patnership</label>
                                                <input type="text" name="patnership" value="<?= $specificCompanyDtls['patnership']?>" class="form-control" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="icon-block form-group">
                                            <div class="icon">
                                                <img src="../images/medal-of-award.svg" alt="" class="img-fluid">
                                            </div>
                                            <div class="input-block">
                                                <label for="" class="t-2" class="t-2">Facilities</label>
                                                <input type="text" name="facilities" value="<?= $specificCompanyDtls['facilities']?>" class="form-control" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-40">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <div class="f-text">
                                        Gallery (Upload upto 6 images here)<br/>(Jpg/png Only Allowed)
                                    </div>                              
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="custom-file">
                                            <input type="file" name="gallery_images" class="custom-file-input" id="resumeUpload">
                                            <label class="custom-file-label" for="resumeUpload"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="u-wrapper">
                                    <div class="upload-block">
                                       <img src="../images/<?= $specificCompanyDtls['gallery_images']?>" height="150" width="100%"/> 
                                    </div>
                                    <div class="upload-block">
                                        
                                    </div>
                                    <div class="upload-block">
                                        
                                    </div>
                                    <div class="upload-block">
                                        
                                    </div>
                                    <div class="upload-block">
                                        
                                    </div>
                                    <div class="upload-block">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-40">
                            <div class="col-lg-12">
                                <div class="action-btns">
                                   <!--  <a href="" class="btn btn-edit">Edit</a> -->
                                    <input type="submit" name="update_company"  class="btn btn-apply"
                           value="Save" >
                                    <!-- <a href="" class="btn btn-apply">Apply</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>   
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="main-footer">
            <div class="container">
                <div class="footer">
                    <div class="row justify-content-between">
                        <div class="col-md-4">
                            <a class="logo-main">
                            <img src="../images/logo.jpg" alt="JobsdeZk">
                            </a>
                            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tellus lectus, scelerisque in interdum placerat, vulputate et nisl.</div>
                            <div class="social">
                                <ul class="icon-list">
                                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="link-header">
                                Companies
                            </div>
                            <div class="link-list">
                                <ul>
                                    <li><a href="company-details.html">Capgemini</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="link-header">
                                Companies
                            </div>
                            <div class="link-list">
                                <ul>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="link-header">
                                Companies
                            </div>
                            <div class="link-list">
                                <ul>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="text-center">2020 All Rights Reserved by JobsdeZk</div>
        </div>
    </footer>

    <!-- Modals Recruiter -->
    <div class="modal fade" id="addNewRec" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="title-r">
                <h2>Create a Sub Recruiter</h2>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="steps-form type-2">
                <div class="row">
                    <form method="post">
                    <div class="col-lg-12 mx-auto">
                    
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="sub_recruiter_name" required="required" class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Location</label>
                                    <select class="custom-select" name="location" required="required">
                                        <option value="">Select a Location</option>
                                        <?php foreach($objectjdsr->findAllActiveCity() as $cityData) {?>
                                        <option value="<?= $cityData['id']?>"><?= $cityData['name']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" required="required" class="form-control" placeholder="Complany Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" required="required" class="form-control" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mx-auto">
                                <input type="submit" name="create_sub_recruiter"  class="btn-custom btn-save"
                           value="Save" >
                            </div>                               
                        </div>
                    </div>
                                        </form>                              
                </div>
            </div>
          </div>
        </div>
      </div>
</body>
<script src="../vendor/jQuery/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/OwlCarousel/owl.carousel.min.js"></script>
<script src="../js/base.js"></script>
</html>