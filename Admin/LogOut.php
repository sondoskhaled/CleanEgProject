<?php
session_start();
session_destroy();
   setcookie("admincookie","",time()-1);
     header('location:index.php');

?>