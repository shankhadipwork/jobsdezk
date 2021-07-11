<?php 
include_once('main.class.php');
$jobID= base64_decode ($_POST['jobId']);
$candidate = $_POST['candidate'];
$aj =$objectJobsDezk->applyJobs($jobID,$candidate);

?>                         
