<?php 
session_start();
include_once 'OrderTemp.php';
include_once 'Products.php';
include_once 'ProductHasColor.php';
$pro=new Products();
$Temp=new OrderTemp();
$PHC=new ProductHasColor();
$Temp->setProductNo($_GET['PNo']);
$PHC->setProductNo($_GET['PNo']);
$PHC->setColorNo($_GET['Color']);
$Temp->setColorNo($_GET['Color']);
$Temp->setQuntity($_GET['QYT']);
$Temp->setCitizenEmail($_SESSION['citizens']);
$QYT=$PHC->GetQYT();
if($r=mysqli_fetch_assoc($QYT)){
 if( ($r["Quntity"]) >= ($_GET['QYT'])){
  $Temp->Add();
 }
}



if((isset($_GET['p'])) && ($_GET['p']==2)){

    $c=$pro->GetProByCat($Temp->getProductNo());
while($row=mysqli_fetch_assoc($c)){
  header('location:ProductDetailsAfter.php?ProNo='.$Temp->getProductNo().'&CatNo='.$row['CategoryNo'].'&CNo='.$Temp->getColorNo());
 
    }}
    elseif((isset($_GET['p'])) && ($_GET['p']==3))
    header('location:AllProductsAfter.php');
   else 
    header('location:indexCitizens.php');



?>