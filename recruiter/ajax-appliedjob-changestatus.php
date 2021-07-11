<?php 
include_once('main.class.php');
$linkVal= $_POST['linkVal'];
$cID = $_POST['cID'];
$jID = $_POST['jID'];
$classId = $_POST['class'];
$jobStatus =$objectjdsr->updateAppliedJobStatus($linkVal, $cID, $jID, $classId);

?>                         
