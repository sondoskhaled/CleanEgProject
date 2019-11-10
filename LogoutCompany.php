<?php
session_start();
session_destroy();
   setcookie("companycookie","",time()-1);
     header('location:index.php');

?>