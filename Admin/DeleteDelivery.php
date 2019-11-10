<?php 

    include_once "../Delivery.php";
    include_once "../Orders.php";

    $D=new Delivery();
    $O=new Orders();

    $O->setDeliveryPhone($_GET['DNo']);
    $D->setDeliveryPhone($_GET['DNo']);
    $count=$O->GetCount();
    if($rc=mysqli_fetch_assoc($count)){
        echo $rc['Count(*)'];
        if($rc['Count(*)']==0){
            $D->Delete();
            echo("<script> window.open('Delivery.php','_parent'); </script>");
        }
        else {
           
            echo("<script> window.open('Delivery.php','_parent'); </script>");
        }

    }
    

?>