<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home | JobsdeZk</title>
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cabin+Condensed:wght@400;500;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<?php include_once("header.php"); 
        if(isset($_POST['register_candidate']))
        {   
        $msg=$objectvtv->createCandidate();
        } 
        if(isset($_POST['login_candidate']))
        {   
        $msg=$objectvtv->candidateLogin();
        } 
        
        $findAllCompany=$objectvtv->findAllCompany();
        ?>
		<div class="content-wrapper">
			<div class="banner">
				<div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="search-bar">
                                        <div class="form">
                                            <div class="jp_header_form_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="banner-main-title">
                                                            <h3>Find your next job here</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                                                    <div class="d-toggle">
                                                            <i class="fa fa-search search_icon"></i>
                                                            <input type="text" id="jobfind" placeholder="Key word e.g. (Job Title, Description, Tags)" class="c-dropdown search-field">
                                                            <div class="custom-dropdown search-module">
                                                            <div class="list-wrapper"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                                                        <div class="jp_form_location_wrapper location-dd">
                                                            <div class="d-toggle">
                                                                <i class="fa fa-map-marker-alt first_icon"></i>
                                                                <input type="text" placeholder="Location" class="c-dropdown location-field">
                                                                <i class="fa fa-angle-down second_icon"></i>
                                                                <div class="custom-dropdown">
                                                                    <div class="list-wrapper">
                                                                        <?php foreach($objectvtv->findAllActiveCity() as $cityDetails) {?>
                                                                        <div class="list-block">
                                                                            <div class="details">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <div class="title"><i class="fa fa-globe"></i> <?= $cityDetails['name']?></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                        <div class="jp_form_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-search"></i> Search</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-main-title">
                                        <h3>Companies hiring now</h3>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="top-companies">
                                        <div class="compaies-container">
                                            <div class="horizontal-carousel">
                                                <div class="owl-carousel top-companies-carousel">
                                                    
                                                    <?php foreach($findAllCompany as $company1) {    
                                                        $companyIDEncoded = base64_encode($company1['id']);
                                                        ?>
                                                    <div class="item">
                                                      <?php if($company1['logo']){ ?>
                                                        <a href="company-details?cid=<?= $companyIDEncoded?>"> <img src="images/<?= $company1['logo']?>" alt=""></a>
                                                        <?php }else{ ?>
                                                            <img src="images/defaultcompany.jpg" alt="">
                                                        <?php }  ?>
                                                    </div>
                                                <?php }  ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sliding-banner">
                                        <?php $findAllBanner = $objectvtv->specificSlidingBanner(); ?>
                                        <div class="owl-carousel banner-carousel">
                                            <?php if($findAllBanner['image1'] != '' ) {?>
                                            <div class="item">
                                                <img src = "images/sliding_banner/<?=$findAllBanner['image1']?>" />
                                            </div>
                                            <?php } if($findAllBanner['image2'] != '' ) {?>

                                            <div class="item">
                                                <img src = "images/sliding_banner/<?=$findAllBanner['image2']?>" />
                                            </div>
                                            <?php } if($findAllBanner['image3'] != '' ) {?>
                                            <div class="item">
                                                <img src = "images/sliding_banner/<?=$findAllBanner['image3']?>" />
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-main-title">
                                        <h3>Urgent Openings</h3>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="owl-carousel new-jobs-carousel">
                                        <div class="item">
                                            <div class="row"> 
                                            <?php foreach($objectvtv->findAllUrgentOpenings() as $uOD) {    
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
                                                <div class="col-md-4">
                                                    <div class="cards type-1">
                                                        <div class="company-details">
                                                            <div class="details">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="title"><?= $uOD['title']?></div>
                                                                    <div class="tag">
                                                                        <?= $jobType?>
                                                                    </div>
                                                                </div>
                                                                <div class="company-title"><?= $specificCompanyDetails['company_name']?></div>
                                                            </div>
                                                            <div class="location">
                                                            <?= $tmpLocationStor?>
                                                            </div>
                                                        </div>
                                                        <div class="desc"><?= substr($uOD['candidate_responsibilites'], 0, 100)?></div>
                                                        <div class="action-btns d-flex justify-content-between">
                                                            <div class="action-btn">
                                                                <a href="" class="btn-apply">Apply Now</a>
                                                            </div>
                                                            <div class="sub-title">Updated <?= round($hour)  ?> hours ago</div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <?php }  ?>                                                
                                             </div>
                                        </div>           
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-lg-3">
                            <div class="side-block-wrapper">
                                <?php $findAllJobTokens = $objectvtv->specificJobTokens();
                                if($findAllJobTokens['image1'] != '' ) {      ?>                           
                                <div class="side-block">
                                    <img src="images/job_tokens/<?=$findAllJobTokens['image1']?>" alt="" class="img-fluid">
                                </div>
                                <?php }  if($findAllJobTokens['image2'] != '' ) { ?>

                                <div class="side-block">
                                    <img src="images/job_tokens/<?=$findAllJobTokens['image2']?>" alt="" class="img-fluid">
                                </div>
                                <?php }  if($findAllJobTokens['image3'] != '' ) { ?>
                                <div class="side-block">
                                    <img src="images/job_tokens/<?=$findAllJobTokens['image3']?>" alt="" class="img-fluid">
                                </div>
                                <?php }  if($findAllJobTokens['image4'] != '' ) { ?>
                                <div class="side-block">
                                    <img src="images/job_tokens/<?=$findAllJobTokens['image4']?>" alt="" class="img-fluid">
                                </div>
                                <?php }  if($findAllJobTokens['image5'] != '' ) { ?>
                                <div class="side-block">
                                    <img src="images/job_tokens/<?=$findAllJobTokens['image5']?>" alt="" class="img-fluid">
                                </div>
                                <?php }  if($findAllJobTokens['image6'] != '' ) { ?>
                                <div class="side-block">
                                    <img src="images/job_tokens/<?=$findAllJobTokens['image6']?>" alt="" class="img-fluid">
                                </div>
                                <?php }  if($findAllJobTokens['image7'] != '' ) { ?>
                                <div class="side-block">
                                    <img src="images/job_tokens/<?=$findAllJobTokens['image7']?>" alt="" class="img-fluid">
                                </div>
                                <?php }  ?>
                            </div>
                        </div>
                    </div>
                    
				</div>
			</div>
		
			<div class="new-jobs">
				<div class="container">
					<div class="jobs-container">
						<div class="typo-graphy">
							Newly <span>Updated</span> Jobs
						</div>
						<div class="row">
                            <div class="col-lg-9">
                                <div class="jobs-block-wrapper">
                                <?php foreach($objectvtv->findAllUrgentOpenings() as $uOD) {    
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

                                    <div class="jobs-block">
                                        <div class="block-item">
                                            <div class="title"><?= $uOD['title']?></div>
                                            <div class="location">
                                               <span class="active-job">Active</span> <?= $tmpLocationStor?>
                                            </div>
                                        </div>
                                        <div class="block-item">
                                            <div class="company-title"><?= $specificCompanyDetails['company_name']?></div>
                                        </div>
                                        <div class="block-item">
                                            <div class="experience"><?= $uOD['experience_needed']?> years</div>
                                        </div>
                                        <div class="block-item">
                                            <div class="action-item">
                                                <a href="job-details?jid=<?= base64_encode($uOD['id']) ?>" class="btn-apply">View Job</a>
                                                <a href="" class="btn-apply">Apply Now</a>
                                            </div>
                                            <div class="posted-on">
                                                Posted on <?= DATE('d M Y',$uOD['created_at']);?>
                                            </div>
                                        </div>
                                    </div>

                                    <?php }  ?> 

                                   
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="side-block-wrapper">
                                <?php $findTailVerticalbar = $objectvtv->specificTailVerticalBar();
                                if($findTailVerticalbar['image1'] != '' ) {      ?>   
                                    <div class="side-block">
                                        <img src="images/tail_vertical_bar/<?=$findTailVerticalbar['image1']?>" alt="" class="img-fluid">
                                    </div>
                                    <?php }  if($findTailVerticalbar['image2'] != '' ) { ?>
                                    <div class="side-block">
                                        <img src="images/tail_vertical_bar/<?=$findTailVerticalbar['image2']?>" alt="" class="img-fluid">
                                    </div>
                                    <?php }  if($findTailVerticalbar['image3'] != '' ) { ?>
                                    <div class="side-block">
                                        <img src="images/tail_vertical_bar/<?=$findTailVerticalbar['image3']?>" alt="" class="img-fluid">
                                    </div>
                                    <?php } ?>
                                   
                                </div>
                            </div>
                        </div>						
						
					</div>
				</div>
			</div>			
			<div class="newsletter">
				<div class="container">
					<div class="newsletter-container">
						<div class="typo-graphy">
							Subscribe <span>To Our</span> Newsletter
						</div>
						<div class="form">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="hellovintronics@gmail.com">
							</div>
							<div class="subscribe">
								<input type="button" value="Subscribe" class="btn btn-subscribe">
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
							<a href="" class="btn btn-primary">Create free account</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php  include_once("footer.php"); ?>
                <!-- Modal -->
        <div class="modal fade auth-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 form-area">
                                <div class="panel panel-login">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <a href="#" class="active" id="login-form-link">Log In</a>
                                            </div>
                                            <div class="col-xs-6">
                                                <a href="#" id="register-form-link">Sign Up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="login-form" action="" method="post" role="form" style="display: block;">
                                                    <div class="form-group">
                                                        <label for="">Email *</label>
                                                        <input type="text" name="user_email" id="username" required="required" tabindex="1" class="form-control" placeholder="Email" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Password *</label>
                                                        <input type="password" name="password" id="password" required="required" tabindex="2" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                                <label for="remember" class="chekcbox-label"> Remember Me</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 text-right">
                                                            <div class="form-group">
                                                                <a href="" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-sm-offset-3">
                                                                <input type="submit" name="login_candidate" id="login-submit" tabindex="4" class="form-control btn btn-primary" value="Log In" style="background: #0d76a7 !important;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </form>
                                                <form id="register-form" action="" method="post" role="form" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">First Name *</label>
                                                                    <input type="text" name="first_name" id="username" tabindex="1" class="form-control" placeholder="First Name" value="">
                                                                </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Last Name *</label>
                                                                <input type="text" name="last_name" id="email" tabindex="1" class="form-control" placeholder="Last Name" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Email ID *</label>
                                                        <input type="email" name="email" id="password" tabindex="2" class="form-control" placeholder="Email ID">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Password *</label>
                                                                <input type="password" name="password" id="passwordFirst"  tabindex="2" class="form-control" placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for=""><span id="divCheckPassword">Confirm Password* </span></label>
                                                                <input type="password" name="confirm password" id="confirmPassword" tabindex="2" class="form-control" placeholder="Password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Phone Number *</label>
                                                                <input type="text" name="phone" id="confirm-password" tabindex="2" class="form-control" placeholder="Phone Number" pattern="[0-9]{1}[0-9]{9}" maxlength="10" oninvalid="setCustomValidity('Enter Valid Mobile Number')" onchange="try{setCustomValidity('')}catch(e){}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Location *</label>
                                                                <input type="password" name="location" id="confirm-password" tabindex="2" class="form-control" placeholder="Location">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" tabindex="3" class="" required="required" name="remember" id="remember">
                                                        <label for="remember" class="chekcbox-label"> I accept the <a>Terms & Conditions.</a></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-sm-offset-3">
                                                                <input type="submit" name="register_candidate" id="register-submit" tabindex="4" class="form-control btn btn-primary" value="Register Now" style="background: #0d76a7 !important;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="benifits">
                                    <img src="images/benifits.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</body>
    <script src="vendor/jQuery/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.min.js"></script>
	<script src="js/base.js"></script>
    <script>
        $(document).ready(function() {
		$('#confirmPassword').on('keyup', function () {
		var password = $("#passwordFirst").val();
		var confirmPassword = $("#confirmPassword").val();
        if(password !== null && password !== ''){
            if (password != confirmPassword) {
                $("#divCheckPassword").html("Passwords do not match!").css("color", "red");
                $("#register-submit").prop('disabled', true).css('opacity', '0.2');
            } else {
                $("#divCheckPassword").html("Passwords match.").css("color", "green");
                $("#register-submit").prop('disabled', false).css('opacity', '1');
            }
        }
		});

        $('#jobfind').on('input', function () {
		var jobTitle = this.value;       
        if(jobTitle.length>2){
        $.ajax({
				  url:'ajax-job-search',
				  data:{jobTitle:jobTitle},
				  type : 'POST' ,
				  cache:false,
				  success:function(data){
				    //el.html('jobSearchresult').removeClass('applyJob');	
                    $('.search-module .list-wrapper').append(data);
                                       
                   		
				 } 
		});
        }

		});
    }); 
	</script>
</html>