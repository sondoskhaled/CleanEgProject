<?php 

include_once "../OrderCompany.php"; 
 $order=new OrderCompany();  

    
   
   
            $order->Deleteno($_GET['O']);
            echo("<script> window.open('CompanyOrder.php','_parent'); </script>");
       

?>