 <?php 
include_once "../Requests.php";

$order=new Requests();

$order->setRequestStatus("Shipping");
$o=$order->UpdateStatus($_GET['ONo']);
 header('location:index.php');


 
 ?>