<?php 
include_once "../OrderCompany.php";
include_once "../Types.php";
$Type=new Types();
$Type->setTypeNo($_GET['T']);
$Type->setTypeQuntity($_GET['Q']);
$order=new OrderCompany();
$order->UpdateStatus($_GET['O']);
$Type->UpdateQ();
header('location:CompanyOrder.php');
?>