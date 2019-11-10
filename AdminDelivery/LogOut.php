<?php
session_start();
session_destroy();
   setcookie("Deliverycookie","",time()-1);
     header('location:index.php');

?>