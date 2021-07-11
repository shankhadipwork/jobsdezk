<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Social | JobsdeZk</title>
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
$specificFile = $objectJobsDezk->getSpecificApplicantCandidatesFiles($_SESSION['cid']);

if(isset($_POST['candidate_files'])){
    $msg=$objectJobsDezk->insertCandidateFiles($_SESSION['cid']);
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
                                    <li class="step type-1">
                                        <a>
                                           Employment
                                        </a>
                                    </li>
                                    <li class="step type-1">
                                        <a>
                                           Social Media
                                        </a>
                                    </li>
                                    <li class="step active">
                                        <a>
                                           Submit
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                        <div class="steps-form">
                            <div class="row">
                                <div class="col-lg-9 mx-auto">
                                    <div class="edu-block">                                       
                                    
                                        <div class="custom-file resume">
                                            <div class="row mt-10">
                                                <div class="col-lg-3">                                               
                                                    <input type="file" name="candidate_resume" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"  class="custom-file-input" id="resumeUpload">
                                                    <label class="custom-file-label" for="resumeUpload"></label>				
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="info">(PDF,DocX, RTF) (1-3MB)</div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="file-name"><?php echo $specificFile['resume']; ?></div>
                                                </div> 
                                            </div>                                           
                                        </div>    
                                        <div class="custom-file resume">
                                            <div class="row mt-10">
                                                <div class="col-lg-3">                                               
                                                    <input type="file" name="candidate_photo" accept="image/gif, image/jpeg, image/png"  class="custom-file-input" id="photoUpload">
													<label class="custom-file-label" for="photoUpload"></label>			
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="info">(JPG,PNG,PDF) (1-3MB)</div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="file-name"><?php echo $specificFile['image']; ?></div>
                                                </div> 
                                            </div>                                           
                                        </div>                                     
                                    </div>
                                    <div class="row custom-btns mt-10">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <!-- <a href="confirm" class="btn-custom btn-next">Save & Submit</a> -->
                                                <button name="candidate_files"  class="btn-custom btn-save" >Save</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="social" class="btn-custom btn-back">Go Back</a>
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