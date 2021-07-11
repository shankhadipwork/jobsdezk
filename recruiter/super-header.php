<?php
ob_start();
session_start();
 include_once("main.class.php"); 
 if(isset($_GET['srid'])){
$supRecId = base64_decode($_GET['srid']);
$_SESSION['srid'] = $supRecId;
$supRecId = $_SESSION['srid'] ;
 }
 else{
    $supRecId = $_SESSION['srid'];
 }

$suPRecruiterDetails = $objectjdsr->speciSupperRecruiterDetails($supRecId);
$superRecruiterName = $suPRecruiterDetails['name'];
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
                        <div class="u-name">Welcome <?= $superRecruiterName?> </div>
                        <div class="u-notification">
                            <a href="">
                                <i class="fa fa-bell" aria-hidden="true"></i>
                                <span>25</span>                            
                            </a>
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
                                    <a href="">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>