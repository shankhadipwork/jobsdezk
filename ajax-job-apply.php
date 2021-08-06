<?php 
include_once('main.class.php');
$jobId = $_POST['jobId'];
$cID = $_POST['cID'];
$applyJobs = $objectvtv->applyJobs($jobId, $cID);
echo $applyJobs;
?>  
        
      
                       
