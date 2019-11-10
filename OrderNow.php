<?php 
session_start();
include_once "Delivery.php";
include_once "ViewCart.php";
include_once "Orders.php";
include_once "OrderTemp.php";
include_once "OrderDetails.php";
include_once "ProductHasColor.php";
include_once "Products.php";
include_once "Reward.php";
$V=new ViewCart();
$O=new Orders();
$D=new Delivery();
$OD=new OrderDetails();
$OT=new OrderTemp();
$Pro=new Products();
$PHC=new ProductHasColor(); 
$Re=new Reward();
if($_GET['v']=="yes")
{$r= $V->GetTotal($_SESSION['citizens']);
if($rows=mysqli_fetch_assoc($r)) 
{
        $total=$rows['sum(SubTotal)'];
    // $O->setOrderTotal($rows['sum(SubTotal)']);
}
$Re->setCitizenEmail($_SESSION['citizens']);
$Ree=$Re->GetMoneyData();
if($rowR=mysqli_fetch_assoc($Ree)) 
{
    $Money=$rowR['Money'];
}

if($total<$Money){
    $rest=$Money-$total;
    $O->setOrderTotal(0);
    $Re->setMoney($rest);
    $Re->UpdateMoney();
}
elseif($total>$Money){
    $rest=$total-$Money;
    $O->setOrderTotal($rest);
    $Re->setMoney(0);
    $Re->UpdateMoney();
}}
elseif($_GET['v']=="no"){
    $r= $V->GetTotal($_SESSION['citizens']);
    if($rows=mysqli_fetch_assoc($r)) 
    {
        $O->setOrderTotal($rows['sum(SubTotal)']);
    }
}

$D->setDeliveryCity($_GET['city']);
$rr=$D->Search();
if($row=mysqli_fetch_assoc($rr))
    {
        $O->setDeliveryPhone($row['DeliveryPhone']);
        $D->setDeliveryPhone($row['DeliveryPhone']);
    }

    $date = new DateTime("now", new DateTimeZone('Africa/Cairo'));
    $cd=$date->format('Y-m-d H:i:s');

    $O->setOrderDate($cd);
    // $O->setOrderStatus('Pending');
    $O->setCitizenEmail($_SESSION['citizens']);
    $O->setOrderStatus('Pending');
    $O->setOrderCity($_GET['city']);
    $O->setOrderAddress($_GET['add']);
    $O->setLat($_GET['lat']);
    $O->setLng($_GET['lng']);
    echo $O->Add();


    $max=$O->GetMaxOrderNo();
    if($ro=mysqli_fetch_assoc($max))
        {
                $maxNo= $ro['max(OrderNo)'];
        }
       
    $view=$V->SearchAllByID($_SESSION['citizens']);
    while($rview=mysqli_fetch_assoc($view)){
            $OD->setOrderNo($maxNo);
            $OD->setProductNo($rview['ProductNo']);
            $PHC->setProductNo($rview['ProductNo']);
            $OD->setProductColorNo($rview['ColorNo']);
            $PHC->setColorNo($rview['ColorNo']);
            $OD->setQuntity($rview['Quntity']);
            //update quntity
            $PHC->UpdateQuntity($rview['Quntity']);

            $OD->setPrice($rview['ProductPrice']);
            $OD->setTotal($rview['SubTotal']);
           echo $OD->Add();
    }

    $OT->setCitizenEmail($_SESSION['citizens']);
    $OT->Delete();

    $D->UpdateStatus();
    header('location:CartDetails.php');

 
   

?>