<?php 
session_start();
include_once 'OrderTemp.php';

$Temp=new OrderTemp();
if($_GET['Op']=='M')
echo $Temp->UpdateByOrderNoM($_GET['ONo']);
else if ($_GET['Op']=='P')
echo $Temp->UpdateByOrderNoP($_GET['ONo']);

header('location:CartDetails.php');

?>