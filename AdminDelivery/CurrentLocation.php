<?php
session_start();
include_once '../DCurrentPosition.php';
if (isset($_POST['l']) && isset($_POST['g']) && isset($_POST['c']) && isset($_POST['ONo'])) {
    
    $e = new DCurrentPosition();
   
    $e->setDPhone($_SESSION['delivery']);
    $e->setOrderNo($_POST['ONo']);
    $e->setLat($_POST['l']);
    $e->setLng($_POST['g']);

    if($_POST['c']==1)
    {}
    if($_POST['c']==2)
    {echo $e->Add();}
    else{
        echo $e->Update();
    }
     
}
echo "hhhhhhhhh";
?>