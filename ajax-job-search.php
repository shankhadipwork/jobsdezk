<?php 
include_once('main.class.php');
$jobTitle= $_POST['jobTitle'];

// $jobSearchStatus =$objectvtv->searchJobByJobTitle($jobTitle);
?>

<?php
foreach($objectvtv->searchJobByJobTitle($jobTitle) as $jobDetails){
    if($jobDetails['job_type'] == 1){
        $jobType = "Full Time"; 
    }
    elseif($jobDetails['job_type'] == 2){
        $jobType = "Part Time"; 
    }
    elseif($jobDetails['job_type'] == 2){
        $jobType = "Internship"; 
    }
    $comnpanyDetails = $objectvtv->speciCompanyDetails($jobDetails['company_id']);
?>  
 
        <div class="list-block">
            <div class="details">
                <div class="d-flex justify-content-between">
                    <div class="title"><?= $jobDetails["title"]?></div>
                    <div class="tag">
                        <?= $jobType?>                                                                    
                    </div>
                </div>
                <div class="company-title"><?= $comnpanyDetails['company_name']?></div>
            </div>
        </div>
 <?php } ?>   
        
      
                       
