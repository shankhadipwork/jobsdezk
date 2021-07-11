<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Companies | JobsdeZk</title>
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
    <?php include_once("header.php"); ?>
		<div class="content-wrapper type-2  bg-dots">
            <div class="breadcrumbs-wrapper bg">
            </div>
            <div class="search-box custom-search">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                  aria-describedby="search-addon" />
                                <button type="button" class="btn btn-outline-primary btn-search">search</button>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listing">
                <div class="container">
                    <div class="row">
                    <?php foreach($objectvtv->findAllCompany() as $companyDetails) {    
                        $companyId = $companyDetails['id'];
                    ?>
                        <div class="col-md-4">
                            <div class="cards type-1 no-hover gradient-1">
                                <div class="company-logo">
                                    <img src="images/<?= $companyDetails['logo']?>" alt="">
                                </div>
                                <div class="company-name">
                                    <?= $companyDetails['company_name']?>
                                </div>
                                <div class="job-count">
                                    <a href="company-details?cid=<?= base64_encode($companyId) ?>">(<?= $objectvtv->findAllJobsOpeningCountByCompany($companyId)?>) openings</a>
                                </div>
                            </div>
                        </div>
                        <?php }  ?>

                    </div>
                </div>
                <div class="pagination-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">    
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    </ul>
                                  </nav>
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
	</body>
    <script src="vendor/jQuery/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.min.js"></script>
	<script src="js/base.js"></script>
</html>