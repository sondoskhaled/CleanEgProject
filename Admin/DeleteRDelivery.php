<?php 

    include_once "../RDelivery.php";
    include_once "../Requests.php";

    $D=new RDelivery();
    $R=new Requests();

    $R->setRDeliveryPhone($_GET['DNo']);
    $D->setDPhone($_GET['DNo']);
    $count=$R->GetCount();
    if($rc=mysqli_fetch_assoc($count)){
         $rc['Count(*)'];
        if($rc['Count(*)']==0){
            $D->Delete();
            echo("<script> window.open('RDelivery.php','_parent'); </script>");
        }
        else {
           
            echo("<script> window.open('RDelivery.php','_parent'); </script>");
        }

    }
    

?>