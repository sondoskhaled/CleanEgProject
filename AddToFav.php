<?php 
session_start();
include_once "Fav.php";
$fa=new Fav();
$fa->setCitizenEmail($_SESSION['citizens']);
$fa->setProductNo($_GET['ProNo']);
$fa->setColorNo($_GET['CNo']);
echo $fa->Add();
header('location:AllProductsAfter.php');
?>