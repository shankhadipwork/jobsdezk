<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Education | JobsdeZk</title>
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
$specificEmployee = $objectJobsDezk->getSpecificApplicantExprienceDetails($_SESSION['cid']);
  
  //echo "<pre/>"; print_r($specificEmployee); die;
if(isset($_POST['candidate_expriences'])){
    $msg=$objectJobsDezk->insertCandidateExpriences($_SESSION['cid']);
}
?>
    <div class="content-wrapper type-2 bg-dots">
        <div class="container">
           
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="cards-wrapper">
                        <div class="cards cl-purple">
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="card-details">
                                <div class="c-title">Jobs Posted</div>
                                <div class="c-no">15</div>
                            </div>
                        </div>
                        <div class="cards cl-green">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="card-details">
                                <div class="c-title">Active Jobs</div>
                                <div class="c-no">10</div>
                            </div>
                        </div>
                        <div class="cards cl-blue">
                            <div class="icon">
                                <i class="fa fa-download"></i>
                            </div>
                            <div class="card-details">
                                <div class="c-title">Applications</div>
                                <div class="c-no">12</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="steps-form">
                        <div class="steps">
                            <div class="breadcrumbs">
                                <ul class="steps">
                                    <li class="step type-1">
                                        <a href="#">
                                           Personal Info
                                        </a>
                                    </li>
                                    <li class="step type-1">
                                        <a >
                                           Skills
                                        </a>
                                    </li>
                                    <li class="step type-1">
                                        <a>
                                            Education
                                        </a>
                                    </li>
                                    <li class="step active">
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
                        <form method="post">
                        <div class="steps-form">
                            <div class="row">
                                <div class="col-lg-9 mx-auto">
                                    <div class="edu-block">
                                        <div class="row">
                                            <div class="col-lg-12 d-flex">
                                                <div class="radio">
                                                    <input id="radio-1" name="category" <?php echo ($specificEmployee['category']== '0') ?  "checked" : "" ;  ?> value="0" required type="radio" oninvalid="setCustomValidity('Please Selsect Exprience')" onchange="try{setCustomValidity('')}catch(e){}" >
                                                    <label for="radio-1"  class="radio-label">Fresher</label>
                                                  </div>
                                                
                                                  <div class="radio">
                                                    <input id="radio-2" name="category"  <?php echo ($specificEmployee['category']== '1') ?  "checked" : "" ;  ?> value="1" type="radio" required>
                                                    <label  for="radio-2" class="radio-label">Experienced</label>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Total Experience</label>
                                                    <select name="total_year" class="form-control" required="required">
                                                        <option value="">Year</option>
                                                        <option <?php  if($specificEmployee['total_year'] == '1') { echo ' selected="selected"';} ?>  value="1">1+</option>
                                                        <option <?php  if($specificEmployee['total_year'] == '2') { echo ' selected="selected"';} ?> value="2">2+</option>
                                                        <option <?php  if($specificEmployee['total_year'] == '3') { echo ' selected="selected"';} ?> value="3">3+</option>
                                                        <option <?php  if($specificEmployee['total_year'] == '4') { echo ' selected="selected"';} ?> value="4">4+</option>
                                                        <option <?php  if($specificEmployee['total_year'] == '5') { echo ' selected="selected"';} ?> value="5">5+</option>
                                                        <option <?php  if($specificEmployee['total_year'] == '6') { echo ' selected="selected"';} ?> value="6">More than 6</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">.</label>
                                                    <select name="total_month" class="form-control" required="required">
                                                        <option value="">Month</option>
                                                        <option <?php  if($specificEmployee['total_month'] == '1') { echo ' selected="selected"';} ?> value="1">1</option>
                                                        <option  <?php  if($specificEmployee['total_month'] == '2') { echo ' selected="selected"';} ?> value="2">2</option>
                                                        <option  <?php  if($specificEmployee['total_month'] == '3') { echo ' selected="selected"';} ?> value="3">3</option>
                                                        <option  <?php  if($specificEmployee['total_month'] == '4') { echo ' selected="selected"';} ?> value="4">4</option>
                                                        <option  <?php  if($specificEmployee['total_month'] == '5') { echo ' selected="selected"';} ?> value="5">5</option>
                                                        <option  <?php  if($specificEmployee['total_month'] == '6') { echo ' selected="selected"';} ?> value="6">6</option>
                                                        <option  <?php  if($specificEmployee['total_month'] == '7') { echo ' selected="selected"';} ?> value="7">7</option>
                                                        <option  <?php  if($specificEmployee['total_month'] == '8') { echo ' selected="selected"';} ?> value="8">8</option>
                                                        <option  <?php  if($specificEmployee['total_month'] == '9') { echo ' selected="selected"';} ?> value="9">9</option>
                                                        <option  <?php  if($specificEmployee['total_month'] == '10') { echo ' selected="selected"';} ?> value="10">10</option>
                                                        <option  <?php  if($specificEmployee['total_month'] == '11') { echo ' selected="selected"';} ?> value="11">11</option>
                                                        <option  <?php  if($specificEmployee['total_month'] == '12') { echo ' selected="selected"';} ?> value="12">12</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="">Current/ Latest Company*</label>
                                                    <input type="text" value="<?php echo $specificEmployee['latest_company']; ?>" name="latest_company"  class="form-control">
                                                    <div class="radio">
                                                        <input id="radio-5"  name="radio5" type="radio">
                                                        <label for="radio-5" class="radio-label">I am currently working here</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">CTC</label>
                                                    <select name="ctc" class="form-control">
                                                        <option value="">Select CTC</option>
                                                        <option  <?php  if($specificEmployee['ctc'] == '2.5') { echo ' selected="selected"';} ?> value="2.5">2.5LP</option>
                                                        <option  <?php  if($specificEmployee['ctc'] == '3.5') { echo ' selected="selected"';} ?> value="3.5">3.5LP</option>
                                                        <option <?php  if($specificEmployee['ctc'] == '4') { echo ' selected="selected"';} ?> value="4">4LP</option>
                                                        <option <?php  if($specificEmployee['ctc'] == '5') { echo ' selected="selected"';} ?> value="5">5LP</option>
                                                        <option <?php  if($specificEmployee['ctc'] == '6') { echo ' selected="selected"';} ?> value="6">6LP</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Notice Period</label>
                                                    <select name="notice_period" class="form-control">
                                                        <option value="">Select Notice Period</option>
                                                        <option <?php  if($specificEmployee['notice_period'] == '60') { echo ' selected="selected"';} ?> value="60">2 Months</option>
                                                        <option <?php  if($specificEmployee['notice_period'] == '30') { echo ' selected="selected"';} ?> value="30">1 Month</option>
                                                        <option <?php  if($specificEmployee['notice_period'] == '15') { echo ' selected="selected"';} ?> value="15">15 Days</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">                                            
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="">Tenure</label>
                                                    <input type="date" value="<?php echo $specificEmployee['tenure']; ?>" class="form-control" name="tenure">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="">End Date</label>
                                                    <input type="date" value="<?php echo $specificEmployee['end_date']; ?>" name="end_date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="">Designation</label>
                                                    <input type="text" value="<?php echo $specificEmployee['designation']; ?>" class="form-control" name="designation">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="">
                                        <div class="col-lg-12 text-right">
                                            <a href="">+ Add Employer</a>
                                        </div>
                                    </div>
                                    <div class="row custom-btns">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="social" class="btn-custom btn-next">Next</a>
                                                <!-- <a href="" class="btn-custom btn-save">Save</a> -->
                                                <button name="candidate_expriences"  class="btn-custom btn-save" >Save</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="education" class="btn-custom btn-back">Go Back</a>
                                            </div>
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