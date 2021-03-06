<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Candidate Details| JobsdeZk</title>
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cabin+Condensed:wght@400;500;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../vendor/OwlCarousel/owl.carousel.min.css">
		<link rel="stylesheet" href="../vendor/OwlCarousel/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
        <script src="https://kit.fontawesome.com/659d257d45.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
		<link rel="stylesheet" href="../css/styles.css">
	</head>
<body>
    <?php include_once('header.php');
    $specificCandSkills = $objectJobsDezk->specificCandidateSkillsDetails($cid); 
    $Top5SkillsArray = array($specificCandSkills['top_skill_1'], $specificCandSkills['top_skill_2'], $specificCandSkills['top_skill_3'],
    $specificCandSkills['top_skill_4'],$specificCandSkills['top_skill_5']);
    $comma_separated = implode(",", $specificCandSkills);
    //$specificSkillDtls = $objectJobsDezk->specificSkillDetails();    
     ?>
    <div class="content-wrapper type-2 bg-dots c-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto mt-40">
                    <div class="a-card-wrapper">
                        <div class="a-card">
                            <div class="a-card-block">
                                 <div class="a-img">
                                     <img src="../images/candidate/images/<?= $candidateFiles['image']?>" width="110" height="111" alt="">
                                 </div>
                                 <div class="a-profile">
                                        <div class="a-header">
                                            <?= $candidateDetails['first_name']. ' ' .$candidateDetails['last_name']?>
                                        </div>
                                         <div class="d-flex">
                                            <div class="a-details">
                                                <div class="a-detail">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                    <span class="bg-card-d">+91-<?= $candidateDetails['phone']?></span>
                                                </div>
                                                <div class="a-detail">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                    <span class="bg-card-d"><?= $candidateDetails['email']?></span>
                                                </div>
                                                <div class="a-detail">
                                                    <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                                                    <span class="bg-card-d">Bangalore</span>
                                                </div>
                                            </div>
                                            <div class="a-det">
                                                <span>EXP:</span>
                                                <span class="bg-card-d">10 Y 6 M</span>
                                            </div>
                                            <div class="a-det">
                                                <span>CTC:</span>
                                                <span class="bg-card-d">12 Lakh</span>
                                            </div>
                                            <div class="a-det type-2">
                                                <span>Notice Period:</span>
                                                <span class="bg-card-d">3 Months</span>
                                            </div>
                                            <div class="a-det">
                                                <span>Applied on:</span>
                                                <span class="bg-card-d">3/2/2021</span>
                                            </div>
                                        </div>
                                    </div>
       

                             </div>
                             <div class="a-actions">
                                 <div class="dropdown show">
                                     <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         Status
                                     </a>                                  
                                     <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                       <a class="dropdown-item" href="#">Matching</a>
                                       <a class="dropdown-item" href="#">Shortlist</a>
                                       <a class="dropdown-item" href="#">Rejected</a>
                                     </div>
                                 </div>
                                 <div class="dropdown show">
                                     <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         Actions
                                     </a>                                  
                                     <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                       <a class="dropdown-item" href="#">Schedule Interview</a>
                                       <a class="dropdown-item" href="#">Respond</a>
                                     </div>
                                 </div>
                                 <a href="../images/candidate/resumes/<?= $candidateFiles['resume']?>" class="btn btn-secondary" role="button" aria-pressed="true" download>Download</a>
                                 <a href="#" class="btn btn-secondary" role="button" aria-pressed="true">Forward</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="steps-form">
                        <div class="steps-form">
                            <div class="row">
                                <div class="col-lg-9 mx-auto bg-col">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row mt-10">
                                                <div class="col-lg-12">
                                                    <div class="skills-desc text-left"><h3>Work Experience</h3></div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="e-wrapper">
                                                        <div class="block-e">
                                                            <div class="title">
                                                                Metro Cash and Carry
                                                            </div>
                                                            <div class="loc">
                                                                Sales Manager-Nov 2017- Till Date
                                                            </div>
                                                            <div class="loc">
                                                                Notice Period ??? 3 Month
                                                            </div>
                                                        </div>
                                                        <div class="block-e">
                                                            <div class="title">
                                                                Metro Cash and Carry
                                                            </div>
                                                            <div class="loc">
                                                                Sales Manager-Nov 2017- Till Date
                                                            </div>
                                                            <div class="loc">
                                                                Notice Period ??? 3 Month
                                                            </div>
                                                        </div>
                                                        <div class="block-e">
                                                            <div class="title">
                                                                Metro Cash and Carry
                                                            </div>
                                                            <div class="loc">
                                                                Sales Manager-Nov 2017- Till Date
                                                            </div>
                                                            <div class="loc">
                                                                Notice Period ??? 3 Month
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row mt-10">
                                                <div class="col-lg-12">
                                                    <div class="skills-desc text-left"><h3>Education</h3></div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="e-wrapper">
                                                        <div class="block-e">
                                                            <div class="title">
                                                                Post-Graduation-
                                                            </div>
                                                            <div class="loc">
                                                                MBA ???Sales & Marketing ??? 2011- Mahaveer University -
                                                            </div>
                                                        </div>
                                                        <div class="block-e">
                                                            <div class="title">
                                                                Graduation-
                                                            </div>
                                                            <div class="loc">
                                                                BBA ??? Management- 2008- MES College
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                
                                    <div class="row mt-10">
                                        <div class="col-lg-12">
                                            <div class="skills-desc text-left"><h3>Education</h3></div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="skils-wrapper t-2">
                                                <div class="skill">Java</div>
                                                <div class="skill">Software developer</div>
                                                <div class="skill">Cloud Computing</div>
                                                <div class="skill">Networking</div>
                                                <div class="skill">C++</div>
                                                <div class="skill">J2</div>
                                                <div class="skill">Python</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-10">
                                        <div class="col-lg-12">
                                            <div class="skills-desc text-left">Top 5 skills rated here.</div>
                                        </div>
                                        <div class="col-lg-12">
                                            <?php
                                             for($i=1; $i<=5; $i++){
                                                $specificSkillDtls = $objectJobsDezk->specificSkillDetails($specificCandSkills["top_skill_$i"]); ?>
                                            <div class="skill-block">
                                                <div class="skill-name">
                                                   <div class="skill-bg"><?= $specificSkillDtls['name'];?></div>
                                                </div>
                                                <div class="score">
                                                    <input id="basic" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="5" data-slider-value="<?= $specificCandSkills["self_rating_skill_$i"]?>"/>
                                                </div>
                                            </div>
                                            <?php } ?>
                                           
                                            
                                        </div>
                                    </div>
                               
                                    <div class="row custom-btns">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="education.html" class="btn-custom btn-download">Edit Profile</a>
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
    </div>
    <?php include_once('footer.php') ?>
</body>
<script src="../vendor/jQuery/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/OwlCarousel/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
<script src="../js/base.js"></script>
</html>