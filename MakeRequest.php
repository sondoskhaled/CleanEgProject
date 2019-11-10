<?php 
session_start();
include_once "RDelivery.php";
include_once "Requests.php";


$O=new Requests();
$D=new RDelivery();

$D->setDCity($_GET['city']);
$rr=$D->Search();
if($row=mysqli_fetch_assoc($rr))
    {
        $O->setRDeliveryPhone($row['DPhone']);
        $D->setDPhone($row['DPhone']);
    }

    $date = new DateTime("now", new DateTimeZone('Africa/Cairo'));
    $cd=$date->format('Y-m-d H:i:s');

    $O->setRequestDate($cd);
    $O->setRequestStatus('Pending');
    $O->setCitizenEmail($_SESSION['citizens']);
    $O->setRequestCity($_GET['city']);
    $O->setRequestAddress($_GET['add']);
    echo $O->Add();


    $D->UpdateStatus();
    header('location:indexCitizens.php');

 
   

?>