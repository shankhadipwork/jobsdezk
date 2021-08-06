<?php 

include_once("main.class.php");
ob_start();
session_start();
if(isset($_SESSION['cid']))
{
	//$cid = base64_decode($_SESSION['cid']) ;
	$cid = $_SESSION['cid'];
}
if(!isset($_SESSION['cid']))
{
	// if(isset($_GET['cid']))
	// {
	// 	$_SESSION['cid'] = base64_decode($_GET['cid']);
	// 	$cid = $_SESSION['cid'];

	// }
	// else{
	// 	$cid = null ;

	// }
	
	$cid = null ;
		
}
?>
<header>
			<nav class="navbar navbar-expand-lg navbar-dark">
				<div class="container">
					<a class="navbar-brand" href="index">
						<div class="logo-main">
							<img src="images/logo.png" alt="JobsdeZk" class="d-none d-sm-block logo-black">
							<img src="images/logo-new.png" alt="JobsdeZk" class="d-none d-sm-block logo-white">
							<img src="images/logo-xs.png" alt="JobsdeZk" class="d-block d-md-none">
						</div>
					</a>
					<div class="d-flex">
						<a class="nav-link highlight d-block d-md-none" href="#" tabindex="-1" aria-disabled="true">Create Account</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="jobs-listing">Jobs</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="company-listing">Company</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="internship-listing">Internship</a>
							</li>
							<li class="nav-item d-none d-sm-block">
								<?php if($cid == '') {?>
								<a class="nav-link" href="#" tabindex="-1" aria-disabled="true" data-toggle="modal" data-target="#exampleModal">
                                    <div>Login / Signup</div>
                                    <div class="small-txt">For Candidates</div>
                                </a>
								<?php } else {?>
									<a class="nav-link" href="candidate/dashboard" tabindex="-1" aria-disabled="true" >
                                    <div>Dashboard</div>                                    
                                </a>
								<?php } ?>
                            </li>
                            <li class="nav-item d-none d-sm-block">
								<a class="nav-link" href="recruiter" >Post a job</a>
                            </li>
                            <!-- <li class="nav-item dropdown my-account">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="demo-img">
                                        <img src="images/" alt="">
                                    </div>                                  
                                    <div class="username">John Doe</div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="profile.html">My Account</a>
                                  <a class="dropdown-item" href="#">Logout</a>
                                </div>
                              </li> -->
						</ul>
					</div>
				</div>
			</nav>
		</header>