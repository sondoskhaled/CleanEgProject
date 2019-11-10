<?php 
session_start();
include_once 'OrderTemp.php';

$Temp=new OrderTemp();

$Temp->DeleteByOrderNo($_GET['ONo']);

header('location:CartDetails.php');

?>