<?php
session_start();
require_once('main.class.php');
$objectJobsDezk->logout();
echo "
            <script type=\"text/javascript\">           
		   window.location='../index';
            </script>
        "; 

?>