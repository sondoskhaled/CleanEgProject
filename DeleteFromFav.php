<?php 
session_start();
include_once 'Fav.php';

$Temp=new Fav();
$Temp->setFavNo($_GET['ONo']);
$Temp->Delete();

header('location:FavDetails.php');

?>