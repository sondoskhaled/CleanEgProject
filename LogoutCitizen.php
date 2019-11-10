<?php
session_start();
session_destroy();
   setcookie("citizencookie","",time()-1);
     header('location:index.php');

?>