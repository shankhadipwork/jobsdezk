<?php
session_start();
require_once('main.class.php');
$objectjda->logout();
echo "
            <script type=\"text/javascript\">           
		   window.location='index';
            </script>
        "; 

?>