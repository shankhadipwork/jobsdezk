<?php
$aboutUs = $objectvtv->aboutUs();
?>
<footer>
			<div class="main-footer">
				<div class="container">
					<div class="footer">
						<div class="row justify-content-between">
							<div class="col-md-4">
								<a class="logo-main">
								<img src="images/logo.jpg" alt="JobsdeZk">
								</a>
								<div class="desc"><?= $aboutUs['about'];?></div>
								<div class="social">
									<ul class="icon-list">
										<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
										<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href=""><i class="fab fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-md-2">
								<div class="link-header">
									Jobs by Location
								</div>
								<div class="link-list">
									<ul>
										<li><a href="">Company</a></li>
										<li><a href="">Company</a></li>
										<li><a href="">Company</a></li>
									</ul>
								</div>
							</div>
                            <div class="col-md-2">
								<div class="link-header">
									Industries
								</div>
								<div class="link-list">
									<ul>
										<li><a href="">Company</a></li>
										<li><a href="">Company</a></li>
										<li><a href="">Company</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-2">
								<div class="link-header">
									information
								</div>
								<div class="link-list">
									<ul>
										<li><a href="">Company</a></li>
										<li><a href="">Company</a></li>
										<li><a href="">Company</a></li>
									</ul>
								</div>
							</div>
                            <div class="col-md-2">
								<div class="link-header">
									Address
								</div>
								<div class="link-list">
									<ul><?= $aboutUs['address'];?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-footer">
				<div class="text-center">2020 All Rights Reserved by JobsdeZk</div>
			</div>
        </footer>
		        <!-- Modal -->
				<div class="modal fade auth-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" id="modalClose" data-dismiss="modal" aria-label="Close">
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
                                                        <input type="hidden" name="job_id" id="modalLoginJID" />
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