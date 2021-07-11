<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Recruiter Dashboard | JobsdeZk</title>
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
    <?php include_once("header.php");  ?>
    <div class="content-wrapper type-2 bg-dots">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                   
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cards-wrapper">
                        <div class="cards cl-purple">
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="card-details">
                                <div class="c-title">Jobs Posted</div>
                                <div class="c-no"><?= $objectjdsr->jobPostedBySpecificSubRecruiter($subrid)?></div>
                            </div>
                        </div>
                        <div class="cards cl-green">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="card-details">
                                <div class="c-title">Active Jobs</div>
                                <div class="c-no"><?= $objectjdsr->activeJobPostedBySpecificSubRecruiter($subrid)?></div>
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
                <div class="col-12 col-lg-3">
                    <div class="f-wrapper">
                        <div class="f-title">
                            Search By
                        </div>
                        <div class="f-block">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Job Title</label>
                                    <input type="text" class="form-control" placeholder="Software Developer Cloud IAAS......">
                                </div>
                                <div class="form-group">
                                    <label for="">Job ID</label>
                                    <select class="form-control select-jobs-id" multiple="multiple" style="width: 100%;"></select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="add-new-rec">
                        <a href="create-new-job" class="btn btn-add">+ Add A New Job</a>
                    </div>
                    <?php foreach($objectjdsr->getAllJobsBySpecificSubRecruitrt($subrid) as $jobData) {
                        $getSpecificCompanyDtls = $objectjdsr->getSpecificCompanyDetails($jobData['company_id']);
                        $locations = explode(',',$jobData['locations']) ;
                        $tmpLocationStor = '';
                        foreach($locations as $locatinId){
                            $getSpecificlocationsDtls = $objectjdsr->specificCityDetails($locatinId);
                            $tmpLocationStor .= $getSpecificlocationsDtls['name'].', '; 

                        }
                        $encodedJobId = base64_encode($jobData['id']);
                    ?>
                    <div class="cc-wrapper">
                        <div class="cc-block">
                            <div class="cc-logo">
                                <img src="../images/company-logo.png" alt="">
                            </div>
                            <div class="cc-details">
                                <div class="j-title"><a href="single-job-applicants?jid=<?= $encodedJobId?>"><?= $jobData['title'];?></a></div>
                                <div class="cc-name"><?= $getSpecificCompanyDtls['company_name']?></div>
                                <div class="f-details-wrapper">
                                    <div class="f-details">
                                        <div class="f-icon">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                        <div class="f-title"><?= $jobData['experience_needed'];?> Years</div>
                                    </div>
                                    <div class="f-details">
                                        <div class="f-icon">
                                            <i class="fa fa-money-bill-alt"></i>
                                        </div>
                                        <div class="f-title"><?= $jobData['salary'];?> PA</div>
                                    </div>
                                    <div class="f-details">
                                        <div class="f-icon">
                                            <i class="fa fa-map-marked-alt"></i>
                                        </div>
                                        <div class="f-title"><?= $tmpLocationStor?></div>
                                    </div>
                                </div>
                                <div class="skils-wrapper">
                                    <?php 
                                        $skills = explode(',',$jobData['skills_needed']) ;
                                        foreach($skills as $skillsDtls){
                                        $getSpecificskillsDtls = $objectjdsr->specificSkillDetails($skillsDtls); ?>
                                        <div class="skill"><?= $getSpecificskillsDtls['name']?></div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="cc-posted">
                                <div class="a-no">
                                    15
                                </div>
                                <div class="posted-on">
                                    Posted on <?= DATE('d M Y',$jobData['created_at']);?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    
                </div>
            </div>
        </div>
    </div>
    <?php  include_once("footer.php")?>
</body>
<script src="../vendor/jQuery/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/OwlCarousel/owl.carousel.min.js"></script>
<script src="../js/base.js"></script>
</html>