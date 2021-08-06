<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Skills | JobsdeZk</title>
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
   <?php include_once("header.php"); 
   $specificCandSkills = $objectJobsDezk->specificCandidateSkillsDetails($_SESSION['cid']);
    if(isset($_POST['candidate_skills'])){
        $msg = $objectJobsDezk->insertCandidateSkills($_SESSION['cid']);
    }
//echo "<pre/>"; print_r($specificCandSkills); die;
   ?>
    <div class="content-wrapper type-2 bg-dots">
        <div class="container">
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
                                    <li class="step active">
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
                        <div class="steps-form">
                            <div class="row">
                                                         
                                <div class="col-lg-9 mx-auto">
                                <form method="post">   
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="skills-desc">Mention your skills here and rate yourself on the level of expertise in each. Maximum 15 skills only.</div>
                                        </div>
                                    </div>
                                    <div class="row mt-10">
                                        <div class="col-lg-2">
                                            <label for="">Skills</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <select  name="skills[]" required="required" multiple="multiple"  class="form-control select-location" style="width: 100%;">
                                                    <option value="">Select Skills(s)</option>
                                                    <?php foreach($objectJobsDezk->findAllSkills() as $skillsDtls) {   
                                                         $thisSkillID = $skillsDtls['id'];
                                                         $skillSets = explode(',',$specificCandSkills['skills_sets']);
                                                    ?>
                                                    <option <?php  if(in_array("$thisSkillID", $skillSets)) { echo ' selected="selected"';} ?> value="<?= $skillsDtls['id']?>"><?= $skillsDtls['name']?></option>
                                                    <?php } ?>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="row mt-10">
                                        <div class="col-lg-12">
                                            <div class="skills-desc text-left">Rate your top 5 skills here.</div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="skill-block">
                                                <div class="sl">1.</div>
                                                <div class="skill-name">
                                                    <select  name="top_skills1" required="required" class="form-control" style="width: 100%;">
                                                        <option value="">Select Skills</option>
                                                        <?php foreach($objectJobsDezk->findAllSkills() as $skillsDtls) {    ?>
                                                        <option <?php  if($specificCandSkills['top_skill_1'] == $skillsDtls['id']) { echo ' selected="selected"';} ?> value="<?= $skillsDtls['id']?>"><?= $skillsDtls['name']?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="score">
                                                    <input id="basic" type="text" name="self_rating_skill1" data-slider-min="0" data-slider-max="100" data-slider-step="5" data-slider-value="<?php echo $specificCandSkills['self_rating_skill_1']?>"/>
                                                </div>
                                            </div>
                                            <div class="skill-block">
                                                <div class="sl">2.</div>
                                                <div class="skill-name">
                                                     <select  name="top_skills2" required="required" class="form-control" style="width: 100%;">
                                                        <option value="">Select Skills</option>
                                                        <?php foreach($objectJobsDezk->findAllSkills() as $skillsDtls) {    ?>
                                                        <option <?php  if($specificCandSkills['top_skill_2'] == $skillsDtls['id']) { echo ' selected="selected"';} ?> value="<?= $skillsDtls['id']?>"><?= $skillsDtls['name']?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="score">
                                                    <input name="self_rating_skill2" id="basic2" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="5" data-slider-value="<?php echo $specificCandSkills['self_rating_skill_2']?>"/>
                                                </div>
                                            </div>
                                            <div class="skill-block">
                                                <div class="sl">3.</div>
                                                <div class="skill-name">
                                                    <select  name="top_skills3" required="required" class="form-control" style="width: 100%;">
                                                        <option value="">Select Skills</option>
                                                        <?php foreach($objectJobsDezk->findAllSkills() as $skillsDtls) {    ?>
                                                        <option <?php  if($specificCandSkills['top_skill_3'] == $skillsDtls['id']) { echo ' selected="selected"';} ?> value="<?= $skillsDtls['id']?>"><?= $skillsDtls['name']?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="score">
                                                    <input name="self_rating_skill3" id="basic3" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="5" data-slider-value="<?php echo $specificCandSkills['self_rating_skill_3']?>"/>
                                                </div>
                                            </div>
                                            <div class="skill-block">
                                                <div class="sl">4.</div>
                                                <div class="skill-name">
                                                    <select  name="top_skills4" required="required" class="form-control" style="width: 100%;">
                                                        <option value="">Select Skills</option>
                                                        <?php foreach($objectJobsDezk->findAllSkills() as $skillsDtls) {    ?>
                                                        <option <?php  if($specificCandSkills['top_skill_4'] == $skillsDtls['id']) { echo ' selected="selected"';} ?> value="<?= $skillsDtls['id']?>"><?= $skillsDtls['name']?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="score">
                                                    <input name="self_rating_skill4" id="basic4" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="5" data-slider-value="<?php echo $specificCandSkills['self_rating_skill_4']?>"/>
                                                </div>
                                            </div>
                                            <div class="skill-block">
                                                <div class="sl">5.</div>
                                                <div class="skill-name">
                                                    <select  name="top_skills5" required="required" class="form-control" style="width: 100%;">
                                                        <option value="">Select Skills</option>
                                                        <?php foreach($objectJobsDezk->findAllSkills() as $skillsDtls) {    ?>
                                                        <option <?php  if($specificCandSkills['top_skill_5'] == $skillsDtls['id']) { echo ' selected="selected"';} ?> value="<?= $skillsDtls['id']?>"><?= $skillsDtls['name']?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="score">
                                                    <input name="self_rating_skill5" id="basic5" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="5" data-slider-value="<?php echo $specificCandSkills['self_rating_skill_5']?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                               
                                    <div class="row custom-btns">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="education" class="btn-custom btn-next">Next</a>
                                                <button name="candidate_skills"  class="btn-custom btn-save" >Save</button>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="personal-info" class="btn-custom btn-back">Go Back</a>
                                            </div>
                                        </div>
                                    </div>
                                    </form> 
                                </div>
                                                            
                            </div>
                        </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
<script src="../js/base.js"></script>
</html>