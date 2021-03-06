<?php include_once("main.class.php") ;
if(isset($_POST['login_sub_recruiter']))
{   
$msg=$objectjdsr->subRecuiterLogin();
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Recruiter</title>
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
    <div class="wrapper rec-login">
        <div class="brand-logo">
            <img src="../images/logo-new.png" alt="">
        </div>
        <div class="steps-form type-2">
          
            <form action="" method="post">
                <div class="">
                    <div class="">
                        <div class="title-r">
                            <h1>Sub Recruiter Login</h1>
                            <h1><?= isset($msg)? $msg:'' ?></h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email"  name="user_email" required="required" class="form-control" placeholder="Complany Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password"  name="password" required="required" class="form-control" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mx-auto">
                                <input type="submit" name="login_sub_recruiter" class="btn-custom btn-save" value="Submit">
                            </div>                               
                        </div>
                        <div class="row">    
                            <div class="mx-auto terms-link">
                                Are you a "Super Recruiter"? Please <a href="index">Login</a> here.
                            </div>                                
                        </div>
                    </div>                              
                </div>
            </form>
        </div>
    </div>
</body>
<script src="../vendor/jQuery/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/OwlCarousel/owl.carousel.min.js"></script>
<script src="../js/base.js"></script>
</html>