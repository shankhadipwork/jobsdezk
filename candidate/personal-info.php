<?php
include_once("main.class.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>My Account | JobsdeZk</title>
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
    <?php include_once("header.php");
    if(isset($_POST['candidate_personal_info'])){
        $msg=$objectJobsDezk->updateCandidate($_SESSION['cid']);
    }

    //echo "<pre/>"; print_r($candidateDetails); die;
     ?>
    <div class="content-wrapper type-2 bg-dots">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="steps-form">
                        <div class="steps">
                            <div class="breadcrumbs">
                                <ul class="steps">
                                    <li class="step active">
                                        <a href="#">
                                           Personal Info
                                        </a>
                                    </li>
                                    <li class="step">
                                        <a >
                                           Skills
                                        </a>
                                    </li>
                                    <li class="step">
                                        <a>
                                            Education
                                        </a>
                                    </li>
                                    <li class="step">
                                        <a>
                                           Employment
                                        </a>
                                    </li>
                                    <li class="step">
                                        <a>
                                           Social Media
                                        </a>
                                    </li>
                                    <li class="step">
                                        <a>
                                           Submit
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <form method="post" >
                        <div class="steps-form">
                            <div class="row">
                                <div class="col-lg-9 mx-auto">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">First Name</label>
                                                <input type="text" name="first_name" value="<?= $candidateDetails['first_name'];?>" required="required" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Last Name</label>
                                                <input type="text" name="last_name" value="<?= $candidateDetails['last_name'];?>" required="required" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Phone Number</label>
                                                <input type="text" name="phone" value="<?= $candidateDetails['phone'];?>" required="required" class="form-control" pattern="[0-9]{1}[0-9]{9}" maxlength="10" oninvalid="setCustomValidity('Enter Valid Mobile Number')" onchange="try{setCustomValidity('')}catch(e){}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email"  value="<?= $candidateDetails['email'];?>" disabled="disabled" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">DOB (Date of Birth)</label>
                                                <input type="date" value=<?= $candidateDetails['candidate_dob']?> name="candidate_dob" required="required" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">                                             
                                                <label for="Locations">Locations* (Multiple Locations Multi Select)</label>
                                                <select  name="locations[]" required="required"  class="form-control select-location" multiple="multiple" style="width: 100%;">
                                                <option value="">Select location(s)</option>
                                                  <?php foreach($objectJobsDezk->findAllActiveCity() as $locatioDtls) { 
                                                      $thisLocationID = $locatioDtls['id'];
                                                      $locations = explode(',',$candidateDetails['location']);
                                                      ?>
                                                    <option <?php  if(in_array("$thisLocationID", $locations)) { echo ' selected="selected"';} ?> value="<?= $locatioDtls['id']?>"><?= $locatioDtls['name']?></option>
                                                  <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Language Known</label>
                                                <select class="form-control select-location" name="language_known[]" required="required" multiple="multiple" style="width: 100%;">
                                                <option value="">Select a language</option>
                                                <?php foreach($objectJobsDezk->findAllLanguages() as $laguage) {
                                                    $thisLanguageID = $laguage['id'];
                                                    $languages = explode(',',$candidateDetails['language_known']);
                                                    ?>
                                                <option <?php  if(in_array("$thisLanguageID", $languages)) { echo ' selected="selected"';} ?> value="<?= $laguage['id'];?>"><?= $laguage['language'];?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Gender</label>
                                            <select class="form-control" name="gender" required="required">
                                                <option value="">Select</option>
                                                <option <?php  if($candidateDetails['gender']==='1') { echo ' selected="selected"';} ?> value="1">Male</option>
                                                <option <?php  if($candidateDetails['gender']==='2') { echo ' selected="selected"';} ?> value="2">Female</option>
                                                <option <?php  if($candidateDetails['gender']==='3') { echo ' selected="selected"';} ?> value="3">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mx-auto">
                                            <a href="skills" class="btn-custom btn-next">Next</a>
                                            <button name="candidate_personal_info"  class="btn-custom btn-save" >Save</button>
                                        </div>                                     
                                    </div>
                                </div>                              
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php include_once("footer.php"); ?>
</body>
<script src="../vendor/jQuery/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/OwlCarousel/owl.carousel.min.js"></script>
<script src="../js/base.js"></script>
</html>