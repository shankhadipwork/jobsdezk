<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home | JobsdeZk</title>
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
    <?php include_once("header.php");    ?>
		<div class="content-wrapper type-2">
            <div class="listing">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="cc-wrapper">
                            <?php foreach($objectvtv->findAllInternShipOpenings() as $uOD) {    
                                    $specificCompanyDetails = $objectvtv->speciCompanyDetails($uOD['company_id']);
                                    $locations = explode(',',$uOD['locations']) ;
                                    $tmpLocationStor = '';
                                    foreach($locations as $locatinId){
                                        $getSpecificlocationsDtls = $objectvtv->specificCityDetails($locatinId);
                                        $tmpLocationStor .= $getSpecificlocationsDtls['name'].', '; 

                                    }
                                    $hour = abs(time() - $uOD['created_at'])/(60*60);
                                    if($uOD['job_type'] == 1) {
                                        $jobType = 'Full-Time';
                                    }
                                    elseif($uOD['job_type'] == 2) {
                                        $jobType = 'Part-Time';
                                    }
                                    elseif($uOD['job_type'] == 3) {
                                        $jobType = 'Internship';
                                    }
                                ?>
                                <div class="cc-block">
                                    <div class="cc-logo">
                                        <img src="images/<?= $specificCompanyDetails['logo']?>" alt="">
                                    </div>
                                    <div class="cc-details">
                                        <div class="j-title"><?= $uOD['title']?></div>
                                        <div class="cc-name"><?= $specificCompanyDetails['company_name']?></div>
                                        <div class="f-details-wrapper">
                                            <div class="f-details">
                                                <div class="f-icon">
                                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                                </div>
                                                <div class="f-title"><?= $uOD['experience_needed']?>  Years</div>
                                            </div>
                                            <div class="f-details">
                                                <div class="f-icon">
                                                    <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                </div>
                                                <div class="f-title"><?= $uOD['salary']?> PA</div>
                                            </div>
                                            <div class="f-details">
                                                <div class="f-icon">
                                                    <i class="fa fa-map-marked-alt" aria-hidden="true"></i>
                                                </div>
                                                <div class="f-title"><?= $tmpLocationStor?></div>
                                            </div>
                                        </div>
                                        <div class="skils-wrapper">
                                        <?php 
                                        $skills = explode(',',$uOD['skills_needed']) ;
                                        foreach($skills as $skillsDtls){
                                        $getSpecificskillsDtls = $objectvtv->specificSkillDetails($skillsDtls); ?>
                                        <div class="skill"><?= $getSpecificskillsDtls['name']?></div>
                                        <?php } ?>  
                                        </div>
                                    </div>
                                    <div class="cc-posted">
                                        <div class="a-no type-1 cl-purple">
                                            <a href="">
                                                Apply
                                            </a>
                                        </div>
                                        <div class="a-no type-1 cl-grey">
                                            <a href="job-details?jid=<?= base64_encode($uOD['id']) ?>">View</a>
                                        </div>
                                        <div class="a-no type-1 cl-orange">
                                            <a href="">Save</a>
                                        </div>
                                        <div class="posted-on">
                                            Posted on <?= DATE('d M Y',$uOD['created_at']);?>
                                        </div>
                                    </div>
                                </div>
                                <?php }  ?> 
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="pagination-wrapper">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">    
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-center">
                                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                </ul>
                                              </nav>
                                        </div>
                                    </div>
                
                
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="get-started">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-md-6">
							<h1>Ready to get started?</h1>
							<p class="sub-text">Create an account for free now</p>
						</div>
						<div class="col-md-3 text-md-right text-xs-center">
							<a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Create free account</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php  include_once("footer.php"); ?>
	</body>
    <script src="vendor/jQuery/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.min.js"></script>
	<script src="js/base.js"></script>
</html>