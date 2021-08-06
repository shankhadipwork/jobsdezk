<?php
session_start();
require_once('main.class.php');
$objectvtv->logout($_SESSION['cid']);
echo "
            <script type=\"text/javascript\">           
		   window.location='../index';
            </script>
        "; 

?>