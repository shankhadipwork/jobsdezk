<?php include_once('main.class.php');

 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Create Jobs | JobsdeZk</title>
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
if(isset($_POST['create_new_jobs']))
{   
$msg = $objectjdsr->createNewJobs($subrid,$subRecruiterDetails['super_recruiter_id']);
} 
?>
    <div class="content-wrapper type-2 bg-dots">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <div class="steps-form jobs-form">
                            <div class="row">
                                <div class="col-lg-9 mx-auto">
                                <?= isset($msg)? $msg:''?>
                                <form method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Job ID*</label>
                                                <input type="text" value=<?= time().rand();?> name="job_id" required="required" class="form-control" placeholder="0001">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Job Type*</label>
                                            <select class="custom-select" name="job_type" required="required">
                                                <option value="hide">Full Time/ Part Time/ Internship</option>
                                                <option value="1">Full Time</option>
                                                <option value="2">Part Time</option>
                                                <option value="3">Internship</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Job Title</label>
                                                <input type="text" name="job_title" required="required" class="form-control" placeholder="Software Developer Cloud IAAS Engineering">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Experience Needed* (Years & Months)</label>
                                                <input name="experience" required="required" type="text" class="form-control" placeholder="5-10">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Salary*</label>
                                                <input type="text"  name="salary" required="required" class="form-control" placeholder="10,00,000-15,00,00 PA">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="Locations">Locations* (Multiple Locations Multi Select)</label>
                                                <select  name="locations[]" required="required"  class="form-control select-location" multiple="multiple" style="width: 100%;">
                                                <option value="">Select location(s)</option>
                                                  <?php foreach($objectjdsr->findAllActiveCity() as $locatioDtls) { ?>
                                                    <option value="<?= $locatioDtls['id']?>"><?= $locatioDtls['name']?></option>
                                                  <?php } ?>
                                                </select>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Skills Needed (Multiple Skills Multi Select)</label>
                                                <select  name="skills[]" required="required" class="form-control select-skills" multiple="multiple" style="width: 100%;">
                                                <option value="">Select skill(s)</option>
                                                  <?php foreach($objectjdsr->findAllActiveSkills() as $skillsDtls) { ?>
                                                    <option value="<?= $skillsDtls['id']?>"><?= $skillsDtls['name']?></option>
                                                  <?php } ?>
                                                </select>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="">Mention top 5 skills needed</label>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="sl">1.</div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div class="skill-block">
                                                        <select  name="top5_1" required="required" class="form-control" style="width: 100%;">
                                                        <option value="">Select a skill</option>
                                                        <?php foreach($objectjdsr->findAllActiveSkills() as $skillsDtls) { ?>
                                                            <option value="<?= $skillsDtls['id']?>"><?= $skillsDtls['name']?></option>
                                                        <?php } ?>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="sl">2.</div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div class="skill-block">
                                                            <select  name="top5_2" required="required"  class="form-control" style="width: 100%;">
                                                            <option value="">Select a skill</option>
                                                            <?php foreach($objectjdsr->findAllActiveSkills() as $skillsDtls) { ?>
                                                                <option value="<?= $skillsDtls['id']?>"><?= $skillsDtls['name']?></option>
                                                            <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="sl">3.</div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div class="skill-block">
                                                            <select  name="top5_3" required="required"  class="form-control" style="width: 100%;">
                                                            <option value="">Select a skill</option>
                                                            <?php foreach($objectjdsr->findAllActiveSkills() as $skillsDtls) { ?>
                                                                <option value="<?= $skillsDtls['id']?>"><?= $skillsDtls['name']?></option>
                                                            <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="sl">4.</div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div class="skill-block">
                                                            <select  name="top5_4" required="required"  class="form-control" style="width: 100%;">
                                                            <option value="">Select a skill</option>
                                                            <?php foreach($objectjdsr->findAllActiveSkills() as $skillsDtls) { ?>
                                                                <option value="<?= $skillsDtls['id']?>"><?= $skillsDtls['name']?></option>
                                                            <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="sl">5.</div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div class="skill-block">
                                                            <select  name="top5_5" required="required"  class="form-control" style="width: 100%;">
                                                            <option value="">Select a skill</option>
                                                            <?php foreach($objectjdsr->findAllActiveSkills() as $skillsDtls) { ?>
                                                                <option value="<?= $skillsDtls['id']?>"><?= $skillsDtls['name']?></option>
                                                            <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label for="">Candidate’s Role (300 characters)</label>
                                                <textarea  name="candidate_role" required="required"  rows="14" class="form-control"></textarea>
                                            </div>
                                        </div>                                      
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Candidate’s Responsibilites</label>
                                                <textarea name="candidate_responsibilites" required="required" rows="14" class="form-control"></textarea>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="d-right"> 
                                            <input type="submit" name="create_new_jobs" class="btn-custom btn-next" value="Save">
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
    <?php include_once("footer.php")?>
</body>
<script src="../vendor/jQuery/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/OwlCarousel/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
<script src="../js/base.js"></script>
</html>