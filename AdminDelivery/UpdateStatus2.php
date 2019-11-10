<?php 
include_once "../Orders.php";
include_once "../Delivery.php";
$order=new Orders();
$delivery=new Delivery();


    $order->setOrderStatus("Done");
    $o=$order->UpdateStatus($_GET['ONo']);
    $or=$order->GetDataByONo($_GET['ONo']);
    if($rowc=mysqli_fetch_assoc($or)){
        $delivery->setDeliveryPhone($rowc["DeliveryPhone"]);
        $delivery->UpdateStatusDone();
    }
    header('location:ShippingOrder.php');

 
 ?>