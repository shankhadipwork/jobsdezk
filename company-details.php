<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Company Details | JobsdeZk</title>
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
        <?php include_once("header.php"); 
        $decodedCompanyId = base64_decode($_GET['cid']);
        $specificCompanyDetails = $objectvtv->speciCompanyDetails($decodedCompanyId);
        $locations = explode(',',$specificCompanyDetails['location']) ;
        $tmpLocationStor = '';
        foreach($locations as $locatinId){
            $getSpecificlocationsDtls = $objectvtv->specificCityDetails($locatinId);
            $tmpLocationStor .= $getSpecificlocationsDtls['name'].', '; 
        }
        ?>
		<div class="content-wrapper type-2  bg-dots">
            <div class="breadcrumbs-wrapper">
                <div class="container">
                    <div class="job-banner">
                        <img src="images/<?= $specificCompanyDetails['logo']?>" alt="" class="company-logo">
                    </div>
                </div>
            </div>
            <div class="about-company">
                <div class="container">
                    <div class="title-main mar-0 s-between">
                        <h3>About the company</h3>
                        <a href="#jDesc">Jump to JD</a>
                    </div>
                    <div class="desc-main">
                        <p><?= $specificCompanyDetails['about']?></p>
                    </div>
                    
                    <div class="facts-figures">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title-main">
                                    <h3>Facts & Figures</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="title-main">
                                    <h3>Gallery</h3>
                                </div>
                            </div>
                        </div>
                        <div class="facts-block-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="facts-block">
                                                <div class="img">
                                                    <img src="images/customer.svg" alt="" class="img-fluid">
                                                </div>
                                                <div class="details-sec">
                                                    <div class="title">Size</div>
                                                    <div class="desc">
                                                    <?= $specificCompanyDetails['size']?> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="facts-block">
                                                <div class="img">
                                                    <img src="images/rating.svg" alt="" class="img-fluid">
                                                </div>
                                                <div class="details-sec">
                                                    <div class="title">Employee Satisfaction</div>
                                                    <div class="desc">
                                                    <?= $specificCompanyDetails['employee_satisfaction']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="facts-block">
                                                <div class="img">
                                                    <img src="images/placeholder.svg" alt="" class="img-fluid">
                                                </div>
                                                <div class="details-sec">
                                                    <div class="title">Location</div>
                                                    <div class="desc">
                                                    <?= $tmpLocationStor?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="facts-block">
                                                <div class="img">
                                                    <img src="images/medal-of-award.svg" alt="" class="img-fluid">
                                                </div>
                                                <div class="details-sec">
                                                    <div class="title">Awards/Recognitions</div>
                                                    <div class="desc">
                                                    <?= $specificCompanyDetails['awards']?>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="facts-block">
                                                <div class="img">
                                                    <img src="images/hand-shake.svg" alt="" class="img-fluid">
                                                </div>
                                                <div class="details-sec">
                                                    <div class="title">Partnership</div>
                                                    <div class="desc">
                                                    <?= $specificCompanyDetails['patnership']?>                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="facts-block">
                                                <div class="img">
                                                    <img src="images/amenities.svg" alt="" class="img-fluid">
                                                </div>
                                                <div class="details-sec">
                                                    <div class="title">Facilities</div>
                                                    <div class="desc">
                                                    <?= $specificCompanyDetails['facilities']?>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <?php  $gallery = explode(',',$specificCompanyDetails['gallery_images']) ;                                            
                                            foreach($gallery as $galleryImage){                                           
                                            ?>                                        
                                        <div class="col-md-6">
                                            <div class="g-image">
                                                <img src="images/<?= $galleryImage?>" alt="">
                                            </div>
                                        </div>
                                        <?php } ?>
                                        

                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="listing related-jobs" id="jDesc">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="colmd-12 text-center">
                            <div class="title-main mar-0 s-between">
                                Openings available in <?= $specificCompanyDetails['company_name']?>
                            </div>
                        </div>
                    </div>
                    <div class="row">   
                    <?php foreach($objectvtv->findAllJobsByCompany($decodedCompanyId) as $jobByCompany) {  
                        $locations = explode(',',$jobByCompany['locations']) ;
                        $tmpLocationStor = '';
                        foreach($locations as $locatinId){
                            $getSpecificlocationsDtls = $objectvtv->specificCityDetails($locatinId);
                            $tmpLocationStor .= $getSpecificlocationsDtls['name'].', '; 

                        }
                        $hour = abs(time() - $jobByCompany['created_at'])/(60*60);
                        if($jobByCompany['job_type'] == 1) {
                            $jobType = 'Full-Time';
                        }
                        elseif($jobByCompany['job_type'] == 2) {
                            $jobType = 'Part-Time';
                        }
                        elseif($jobByCompany['job_type'] == 3) {
                            $jobType = 'Internship';
                        }
                    ?>              
                        <div class="col-md-4">
                            <div class="cards type-1">
                                <div class="company-details d-flex justify-content-between">
                                    <div class="details">
                                        <div class="title"><?= $jobByCompany['title']?></div>
                                        <div class="company-title"><?= $specificCompanyDetails['company_name']?></div>
                                    </div>
                                    <div class="tag">
                                        <?= $jobType?>
                                    </div>
                                </div>
                                <div class="location">
                                <?= $tmpLocationStor?>
                                </div>
                                <div class="desc"><?= substr($jobByCompany['candidate_responsibilites'], 0, 100)?></div>
                                <div class="action-btns d-flex justify-content-between">
                                    <div class="action-btn">
                                        <a href="" class="btn-apply">Apply Now</a>
                                    </div>
                                    <div class="posted-on">
                                        Posted on <?= DATE('d M Y',$jobByCompany['created_at']);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }  ?>

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
							<a href="" class="btn btn-primary">Create free account</a>
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