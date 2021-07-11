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
 $specificEduvation = $objectJobsDezk->getSpecificApplicantEducationDetails($_SESSION['cid']);
  
if(isset($_POST['candidate_education'])){
    $msg=$objectJobsDezk->insertCandidateEducation($_SESSION['cid']);
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
                                    <li class="step active">
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
                        <form method="post">
                        <div class="steps-form">
                            <div class="row">
                                <div class="col-lg-9 mx-auto">
                                    <div class="edu-block">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Highest/Latest Educational Qualification</label>
                                                    <select class="form-control" name="higest_qualification" required="required">
                                                        <option value="">Select qualification</option>
                                                        <option <?php  if($specificEduvation['higest_qualification'] == 'doctorate') { echo ' selected="selected"';} ?> value="doctorate">Doctorate degree</option>
                                                        <option <?php  if($specificEduvation['higest_qualification'] == 'master') { echo ' selected="selected"';} ?> value="master">Master degree</option>
                                                        <option <?php  if($specificEduvation['higest_qualification'] == 'graduate') { echo ' selected="selected"';} ?> value="graduate">Graduate</option>
                                                        <option <?php  if($specificEduvation['higest_qualification'] == '12') { echo ' selected="selected"';} ?>  value="12">12th</option>
                                                        <option  <?php  if($specificEduvation['higest_qualification'] == '10') { echo ' selected="selected"';} ?> value="10">10th</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Course</label>
                                                    <select class="form-control" name="course" required="required">
                                                        <option  value="">Select a course</option>
                                                        <option <?php  if($specificEduvation['course'] == 'Mechanical engineer') { echo ' selected="selected"';} ?> value="Mechanical engineer">Mechanical engineer</option>
                                                        <option <?php  if($specificEduvation['course'] == 'Chemical engineer') { echo ' selected="selected"';} ?> value="Chemical engineer">Chemical engineer</option>
                                                        <option <?php  if($specificEduvation['course'] == 'Civil engineer') { echo ' selected="selected"';} ?> value="Civil engineer">Civil engineer</option>
                                                        <option <?php  if($specificEduvation['course'] == 'Electrical engineer') { echo ' selected="selected"';} ?> value="Electrical engineer">Electrical engineer</option>
                                                        <option <?php  if($specificEduvation['course'] == 'Aerospace engineer') { echo ' selected="selected"';} ?> value="Aerospace engineer">Aerospace engineer</option>
                                                        <option <?php  if($specificEduvation['course'] == 'Management') { echo ' selected="selected"';} ?> value="Management">Management</option>                                               
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="">Specialization</label>
                                                    <select class="form-control" name="specialization" required="required">
                                                        <option value="">Select specialization</option>
                                                        <option <?php  if($specificEduvation['specialization'] == 'Computer') { echo ' selected="selected"';} ?> value="Computer">Computer</option>
                                                        <option <?php  if($specificEduvation['specialization'] == 'Mechanical') { echo ' selected="selected"';} ?> value="Mechanical">Mechanical</option>
                                                        <option <?php  if($specificEduvation['specialization'] == 'Electrical') { echo ' selected="selected"';} ?> value="Electrical">Electrical</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="">Course Completion Year</label>
                                                    <input type="date" name="course_completion_year" value="<?php echo $specificEduvation['course_completion_year']; ?>" required="required" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="">Type of Course</label>
                                                    <select class="form-control" name="type_of_course" required="required">
                                                        <option value="">Select Course</option>
                                                        <option <?php  if($specificEduvation['type_of_course'] == 'Regular') { echo ' selected="selected"';} ?> value="Regular">Regular</option>
                                                        <option <?php  if($specificEduvation['type_of_course'] == 'Distance') { echo ' selected="selected"';} ?> value="Distance">Distance</option>
                                                        <option <?php  if($specificEduvation['type_of_course'] == 'lateral') { echo ' selected="selected"';} ?> value="lateral">lateral</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="">College/University/School name</label>
                                                    <input type="text" value="<?php echo $specificEduvation['institute_name']; ?>" name="institute_name"  required="required" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="col-lg-12 text-right">
                                            <a href="">+ Add Education</a>
                                        </div>
                                    </div>
                                    <div class="row custom-btns">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="employment" class="btn-custom btn-next">Next</a>
                                                <!-- <a href="" class="btn-custom btn-save">Save</a> -->
                                                <button name="candidate_education"  class="btn-custom btn-save" >Save</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="skills" class="btn-custom btn-back">Go Back</a>
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