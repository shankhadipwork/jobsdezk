<?php
session_start();
require_once('main.class.php');
$objectJobsDezk->logout($_SESSION['cid']);
echo "
            <script type=\"text/javascript\">           
		   window.location='../';
            </script>
        "; 

?>