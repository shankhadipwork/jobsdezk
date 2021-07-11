<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Matching Job | JobsdeZk</title>
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
    <?php include_once('header.php') ?>
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
                    <?php foreach($objectJobsDezk-> findAllActiveJobs($cid) as $jobDtls) {

                         $getSkillsId = $objectJobsDezk->specificSkillCadidate($cid);
                         $getSkillsIdArray = explode(',',$getSkillsId['skills_sets']) ;
                         $getJobSkillsIdArray = explode(',',$jobDtls['skills_needed']) ;

                        //   foreach($getSkillsIdArray as $skillId){
                        //  // echo "<pre/>"; print_r($getSkillsIdArray); 
                        //  // echo "<pre/>"; print_r($getJobSkillsIdArray); 
                        //  // die;
                        // if (in_array($skillId, $getJobSkillsIdArray)) {
                           
                        
                                                 

                        $specificCompanyDtls = $objectJobsDezk->specificCompanyDetails($jobDtls['company_id']);
                        $locations = explode(',',$jobDtls['locations']) ;
                        $tmpLocationStor = '';
                        foreach($locations as $locatinId){
                            $getSpecificlocationsDtls = $objectJobsDezk->specificCityDetails($locatinId);
                            $tmpLocationStor .= $getSpecificlocationsDtls['name'].', '; 

                        }
                        ?>
                    <div class="cc-wrapper">
                        <div class="cc-block">
                            <div class="cc-logo">
                                <img src="../images/company-logo.png" alt="">
                            </div>
                            <div class="cc-details">
                                <div class="j-title"><?= $jobDtls['title']?></div>
                                <div class="cc-name"><?= $specificCompanyDtls['company_name']?></div>
                                <div class="f-details-wrapper">
                                    <div class="f-details">
                                        <div class="f-icon">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                        <div class="f-title"><?= $jobDtls['experience_needed'];?> Years</div>
                                    </div>
                                    <div class="f-details">
                                        <div class="f-icon">
                                            <i class="fa fa-money-bill-alt"></i>
                                        </div>
                                        <div class="f-title"><?= $jobDtls['salary'];?> PA</div>
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
                                        $skills = explode(',',$jobDtls['skills_needed']) ;
                                        foreach($skills as $skillsDtls){
                                            $getSpecificskillsDtls = $objectJobsDezk->specificSkillDetails($skillsDtls); ?>
                                            <div class="skill"><?= $getSpecificskillsDtls['name']?></div>
                                    <?php } $jobID = base64_encode ($jobDtls['id']); ?>
                                </div>
                            </div>
                            <div class="cc-posted">
                                <input type="hidden" class="jobId" value= <?= $jobID?> />
                                <div class="a-no type-1 cl-purple">
                                  <?php                                  
                                   $appliedJobs =  $objectJobsDezk->findAllApliedJobsByCandidate($cid,$jobDtls['id']);
                                  if($appliedJobs>0){
                                      echo "<span>Applied</span>";
                                  }
                                  else{
                                    echo "<a href='javascript:;' class='applyJob' style='color:#fff;text-decoration:none'>Apply</a>";
                                  }
                                     
                                  ?>
                                    
                                </div>
                                <div class="a-no type-1 cl-white">
                                    View
                                </div>
                                <div class="posted-on">
                                    Posted on 27th Jan 2021
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
    <?php include_once('footer.php') ?>
</body>
<script src="../vendor/jQuery/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/OwlCarousel/owl.carousel.min.js"></script>
<script src="../js/base.js"></script>
<script>
    $(".applyJob").click(function(){  
        var rawJobId=$(this).closest('.cc-block').find('.jobId').val();
        var el = $(this);
        var aplicantId = "<?php echo $cid?>";               
			  $.ajax({
				  url:'ajax-apply-job',
				  data:{jobId:rawJobId,candidate:aplicantId},
				  type : 'POST' ,
				  cache:false,
				  success:function(data){
				    el.html('Applied').removeClass('applyJob');	                    
                   		
				 } 
		    });
    });    
</script>
</html>