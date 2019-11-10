<?php
session_start();
session_destroy();
   setcookie("RDeliverycookie","",time()-1);
     header('location:index.php');

?>