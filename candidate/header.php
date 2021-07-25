<?php
ob_start();
session_start();
error_reporting(0);
 include_once("main.class.php"); 
 if(isset($_GET['cid'])){
$cid = base64_decode($_GET['cid']);
$_SESSION['cid'] = $cid;
$cid = $_SESSION['cid'] ;
 }
 else{
    $cid = $_SESSION['cid'];
 }

$candidateDetails = $objectJobsDezk-> speciCandidateDetails($cid);
?>
<header>
        <nav class="navbar navbar-expand-lg navbar-light c-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <div class="logo-main">
                        <img src="../images/logo.jpg" alt="JobsdeZk" class="d-none d-sm-block">
                        <img src="../images/logo-xs.png" alt="JobsdeZk" class="d-block d-md-none">
                    </div>
                </a>
                <div class="collapse navbar-collapse nav-custom" id="navbarSupportedContent">
                    <div class="home">
                        <a href="">Home</a>
                    </div>
                    <div class="user-grp">
                        <div class="u-name">Welcome <?= $candidateDetails['first_name']?> </div>
                        <div class="u-notification">
                            <a href="javascript:;" class="bell-icon">
                                <i class="fa fa-bell" aria-hidden="true"></i>
                                <span>25</span>                            
                            </a>
                            <div class="dd-menu notifications">
                                <div class="item h-title">
                                    Notifications
                                </div>
                                <div class="items-wrapper">
                                    <div class="item">
                                        <a href="" class="n-icon">
                                            <i class="fa fa-bell"></i>
                                        </a>
                                        <a href="">
                                            <div class="media-body">
                                                <p class="media-heading">
                                                    <span class="font-weight-bolder"> New message received </span>
                                                </p>
                                                <small class="notification-text">You have 10 unread messages</small>
                                            </div>
                                        </a>
                                        <a href="" class="close-icon">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="" class="n-icon">
                                            <i class="fa fa-bell"></i>
                                        </a>
                                        <a href="">
                                            <div class="media-body">
                                                <p class="media-heading">
                                                    <span class="font-weight-bolder"> New message received </span>
                                                </p>
                                                <small class="notification-text">You have 10 unread messages</small>
                                            </div>
                                        </a>
                                        <a href="" class="close-icon">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="" class="n-icon">
                                            <i class="fa fa-bell"></i>
                                        </a>
                                        <a href="">
                                            <div class="media-body">
                                                <p class="media-heading">
                                                    <span class="font-weight-bolder"> New message received </span>
                                                </p>
                                                <small class="notification-text">You have 10 unread messages</small>
                                            </div>
                                        </a>
                                        <a href="" class="close-icon">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="" class="n-icon">
                                            <i class="fa fa-bell"></i>
                                        </a>
                                        <a href="">
                                            <div class="media-body">
                                                <p class="media-heading">
                                                    <span class="font-weight-bolder"> New message received </span>
                                                </p>
                                                <small class="notification-text">You have Applied for a job in {Company}</small>
                                            </div>
                                        </a>
                                        <a href="" class="close-icon">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="" class="n-icon">
                                            <i class="fa fa-bell"></i>
                                        </a>
                                        <a href="">
                                            <div class="media-body">
                                                <p class="media-heading">
                                                    <span class="font-weight-bolder"> New message received </span>
                                                </p>
                                                <small class="notification-text">You have Applied for a job in {Company}</small>
                                            </div>
                                        </a>
                                        <a href="" class="close-icon">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="" class="n-icon">
                                            <i class="fa fa-bell"></i>
                                        </a>
                                        <a href="">
                                            <div class="media-body">
                                                <p class="media-heading">
                                                    <span class="font-weight-bolder"> New message received </span>
                                                </p>
                                                <small class="notification-text">Your Profile is shorlisted in {company}</small>
                                            </div>
                                        </a>
                                        <a href="" class="close-icon">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="" class="n-icon">
                                            <i class="fa fa-bell"></i>
                                        </a>
                                        <a href="">
                                            <div class="media-body">
                                                <p class="media-heading">
                                                    <span class="font-weight-bolder"> New message received </span>
                                                </p>
                                                <small class="notification-text">Your Profile is shorlisted in {company}</small>
                                            </div>
                                        </a>
                                        <a href="" class="close-icon">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="" class="n-icon">
                                            <i class="fa fa-bell"></i>
                                        </a>
                                        <a href="">
                                            <div class="media-body">
                                                <p class="media-heading">
                                                    <span class="font-weight-bolder"> New message received </span>
                                                </p>
                                                <small class="notification-text">Your Profile is rejected in {company}</small>
                                            </div>
                                        </a>
                                        <a href="" class="close-icon">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="notifications.html" class="btn btn-primary">Read All Notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="u-profile">
                            <a href="javascript:;" class="profile-icon">
                                <img src="../images/photo.png" alt="">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <div class="dd-menu">
                                <div class="item">
                                    <a href="">My Account</a>
                                </div>
                                <div class="item">
                                    <a href="logout">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>