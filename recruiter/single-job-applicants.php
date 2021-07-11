<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Applicants Dashboard | JobsdeZk</title>
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
$decodedJobId = base64_decode($_GET['jid']);
$singleJobDtls = $objectjdsr->specificJobDetailsById($decodedJobId);  
$locations = explode(',',$singleJobDtls['locations']) ;
$tmpLocationStor = '';
foreach($locations as $locatinId){
    $getSpecificlocationsDtls = $objectjdsr->specificCityDetails($locatinId);
    $tmpLocationStor .= $getSpecificlocationsDtls['name'].', '; 

}
?>
    <div class="content-wrapper type-2 bg-dots">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="f-wrapper">
                        <div class="f-title">
                            Search By
                        </div>
                        <div class="f-block">
                            <div class="form-group">
                                <label for="">Job Title</label>
                                <input type="text" class="form-control" placeholder="Software Developer Cloud IAAS......">
                            </div>
                            <div class="form-group">
                                <label for="">Job ID</label>
                                <select class="form-control select-jobs-id" multiple="multiple" style="width: 100%;"></select>
                            </div>
                        </div>
                        <div class="f-title">
                            Search Candidates By
                        </div>
                        <div class="f-block">
                            <div class="form-group">
                                <label for="">Locations</label>
                                <select class="form-control select-location" multiple="multiple" style="width: 100%;"></select>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="">Salary</label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="s-label">Min</label>
                                        <input type="text" class="form-control" placeholder="10,00,000">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="s-label">Max</label>
                                        <input type="text" class="form-control" placeholder="20,00,000">
                                    </div>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="">Years of Experience</label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="s-label">Min</label>
                                        <input type="text" class="form-control" placeholder="10">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="s-label">Max</label>
                                        <input type="text" class="form-control" placeholder="20">
                                    </div>
                                </div>
                            </div>   
                            <a href="" class="btn btn-primary">Filter</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="col-lg-12">
                        <div class="cc-wrapper">
                            <div class="cc-block">
                                <div class="cc-logo">
                                    <img src="../images/company-logo.png" alt="">
                                </div>
                                <div class="cc-details">
                                    <div class="j-title"><?= $singleJobDtls['title']?></div>
                                    <div class="cc-name">Accenture</div>
                                    <div class="f-details-wrapper">
                                        <div class="f-details">
                                            <div class="f-icon">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                            <div class="f-title"><?= $singleJobDtls['experience_needed'];?>  Years</div>
                                        </div>
                                        <div class="f-details">
                                            <div class="f-icon">
                                                <i class="fa fa-money-bill-alt"></i>
                                            </div>
                                            <div class="f-title"><?= $singleJobDtls['salary'];?> PA</div>
                                        </div>
                                        <div class="f-details">
                                            <div class="f-icon">
                                                <i class="fa fa-map-marked-alt"></i>
                                            </div>
                                            <div class="f-title"><?= $tmpLocationStor ?></div>
                                        </div>
                                    </div>
                                    <div class="skils-wrapper">
                                    <?php 
                                        $skills = explode(',',$singleJobDtls['skills_needed']) ;
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
                                        Posted on <?= DATE('d M Y',$singleJobDtls['created_at']);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cards-wrapper t-2">
                            <div class="cards cl-purple">
                                <div class="card-details">
                                    <div class="c-title">Total Applications</div>
                                    <div class="c-no">45</div>
                                </div>
                            </div>
                            <div class="cards cl-green">
                                <div class="card-details">
                                    <div class="c-title">Matching</div>
                                    <div class="c-no">20</div>
                                </div>
                            </div>
                            <div class="cards cl-blue">
                                <div class="card-details">
                                    <div class="c-title">Shortlisted</div>
                                    <div class="c-no">12</div>
                                </div>
                            </div>
                            <div class="cards cl-red">
                                <div class="card-details">
                                    <div class="c-title">Rejected</div>
                                    <div class="c-no">15</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row cards-main">
                            <?php foreach($objectjdsr->getAllAppliedJobsBySpecificJobId($decodedJobId) as $applicantsDtls) {
                                $applicantInfoDtls = $objectjdsr->getSpecificApplicantInfoDetails($applicantsDtls['candidate_id']);
                                $applicantExpriencetls = $objectjdsr->getSpecificApplicantExprienceDetails($applicantsDtls['candidate_id']);
                                $applicantEducationtls = $objectjdsr->getSpecificApplicantEducationDetails($applicantsDtls['candidate_id']);
                            ?>
                            <div class="col-lg-9">
                                <div class="a-card-wrapper">
                                    <div class="a-card">
                                        <div class="a-card-block">
                                             <div class="a-img">
                                                 <img src="../images/photo.png" alt="">
                                             </div>
                                             <div class="a-profile">
                                                     <div class="a-header"><?=  $applicantInfoDtls['first_name'];?> <?=  $applicantInfoDtls['last_name'];?></div>
                                                     <div class="a-details">
                                                         <div class="a-detail">
                                                             <i class="fa fa-phone"></i>
                                                             <span>+91-<?=$applicantInfoDtls['phone'];?></span>
                                                         </div>
                                                         <div class="a-detail">
                                                             <i class="fa fa-envelope"></i>
                                                             <span><?=$applicantInfoDtls['email'];?></span>
                                                         </div>
                                                         <div class="a-detail">
                                                             <i class="fa fa-map-marker-alt"></i>
                                                             <span><?= $tmpLocationStor?></span>
                                                         </div>
                                                     </div>
                                                     <div class="a-det">
                                                         <span>EXP:</span>
                                                         <span><?=$applicantInfoDtls['email'];?></span>
                                                     </div>
                                                     <div class="a-det">
                                                         <span>CTC:</span>
                                                         <span><?= $applicantExpriencetls['ctc']?> Lakh</span>
                                                     </div>
                                                     <div class="a-det type-2">
                                                         <span>Notice Period:</span>
                                                         <span><?= $applicantExpriencetls['notice_period']?>  Days</span>
                                                     </div>
                                                     <div class="a-det">
                                                         <span>Applied on <?= DATE('d/m/Y',$applicantsDtls['created_at']);?> </span>
                                                     </div>
                                             </div>
                                             <div class="a-exp">
                                                     <div class="a-header">Professional Exp:</div>
                                                     <div class="exp-block">
                                                         <span>-Metro Cash n Carry (Nov 2017-Present)</span>
                                                         <span>Designation - Sales Manager</span>
                                                     </div>
                                                     <div class="exp-block">
                                                         <span>-D Mart India (Aug 2015-Nov 2017)</span>
                                                         <span>Designation - Assistant Sales Manager</span>
                                                     </div>
                                                     <div class="a-header">Education:</div>
                                                     <div class="exp-block">
                                                         <span><?= $applicantEducationtls['higest_qualification']?> - <?= $applicantEducationtls['course_completion_year']?> - <?= $applicantEducationtls['institute_name']?></span>
                                                     </div>
             
                                             </div>
                                             <div class="a-skills">
                                                     <div class="a-header">Om Prakash Skills</div>
                                                     <div class="skill-list">
                                                         <div class="s-block">
                                                             <span class="skill-name">Sales</span>
                                                             <span class="s-percentage">85%</span>
                                                         </div>
                                                         <div class="s-block">
                                                             <span class="skill-name">Retail Sales</span>
                                                             <span class="s-percentage">90%</span>
                                                         </div>
                                                         <div class="s-block">
                                                             <span class="skill-name">Account Management</span>
                                                             <span class="s-percentage">75%</span>
                                                         </div>
                                                         <div class="s-block">
                                                             <span class="skill-name">Negotiation</span>
                                                             <span class="s-percentage">70%</span>
                                                         </div>
                                                         <div class="s-block">
                                                             <span class="skill-name">Ms Office</span>
                                                             <span class="s-percentage">80%</span>
                                                         </div>
                                                     </div>
                                             </div>
                                         </div>
                                         <div class="a-actions">
                                             <div class="dropdown show status">
                                                 <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                     <?php if ($applicantsDtls['status']<2)
                                                      {echo "Status";} 
                                                      if ($applicantsDtls['status']==2)
                                                      {echo "Matching";}
                                                      if ($applicantsDtls['status']==3)
                                                      {echo "Shortlist";}
                                                      if ($applicantsDtls['status']==4)
                                                      {echo "Rejected";}

                                                        ?>
                                                 </a>                                  
                                                 <div class="dropdown-menu"  aria-labelledby="dropdownMenuLink">
                                                   <a class="dropdown-item" href="javascript:;" data-value="2" data-cid="<?= $applicantsDtls['candidate_id'] ?>" data-jid="<?= $decodedJobId;?>">Matching</a>
                                                   <a class="dropdown-item" href="javascript:;" data-value="3" data-cid="<?= $applicantsDtls['candidate_id'] ?>" data-jid="<?= $decodedJobId;?>">Shortlist</a>
                                                   <a class="dropdown-item" href="javascript:;" data-value="4" data-cid="<?= $applicantsDtls['candidate_id'] ?>" data-jid="<?= $decodedJobId;?>">Rejected</a>
                                                 </div>
                                             </div>
                                             <div class="dropdown show actions">
                                                 <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                     
                                                     <?php if ($applicantsDtls['actions']<1)
                                                      {echo "Actions";} 
                                                      if ($applicantsDtls['actions']==1)
                                                      {echo "Schedule Interview";}
                                                      if ($applicantsDtls['actions']==2)
                                                      {echo "Respond";}

                                                        ?>
                                                 </a>                                  
                                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                   <a class="dropdown-item" href="javascript:;" data-value="1" data-cid="<?= $applicantsDtls['candidate_id'] ?>" data-jid="<?= $decodedJobId;?>">Schedule Interview</a>
                                                   <a class="dropdown-item" href="javascript:;" data-value="2" data-cid="<?= $applicantsDtls['candidate_id'] ?>" data-jid="<?= $decodedJobId;?>">Respond</a>
                                                 </div>
                                             </div>
                                             <a href="#" class="btn btn-secondary" role="button" aria-pressed="true">Download</a>
                                             <a href="#" class="btn btn-secondary" role="button" aria-pressed="true">Forward</a>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="col-lg-3">
                                <div class="a-jd">
                                    <div class="a-keys">
                                         <div class="a-header">Key in the JD</div>
                                         <div class="keys">
                                             <ul>
                                                 <?php 
                                                 $explodedT5Skills = explode(',',$singleJobDtls['top_5_skills']);
                                                 foreach($explodedT5Skills as $skillData) {
                                                    $getSpecificSkillDtls = $objectjdsr->specificSkillDetails($skillData);

                                                 ?>
                                                 <li><?= $getSpecificSkillDtls['name']?></li>
                                                 <?php } ?>
                                             </ul>
                                         </div>
                                    </div>
                                </div>
                             </div>
                        </div>                
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <?php include_once("footer.php")?>
</body>
<script src="../vendor/jQuery/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/OwlCarousel/owl.carousel.min.js"></script>
<script src="../js/base.js"></script>

</html>