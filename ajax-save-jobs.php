<?php 
include_once('main.class.php');
$jobId = $_POST['jobId'];
$cID = $_POST['cID'];
$saveJobs = $objectvtv->saveJobs($jobId, $cID);
echo $saveJobs;
?>  
        
      
                       
