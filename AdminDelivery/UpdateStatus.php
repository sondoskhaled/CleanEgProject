 <?php 
include_once "../Orders.php";

$order=new Orders();

$order->setOrderStatus("Shipping");
$o=$order->UpdateStatus($_POST['ONO']);
 //header('location:index.php');


 
 ?>