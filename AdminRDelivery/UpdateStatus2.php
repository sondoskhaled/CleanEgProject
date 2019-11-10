<?php 
include_once "../Requests.php";

$order=new Requests();

$order->setRequestStatus("Done");
$o=$order->UpdateStatus($_GET['ONo']);
 header('location:ShippingOrder.php');


 
 ?>