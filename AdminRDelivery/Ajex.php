<?php
include_once '../Goods.php';
include_once '../Types.php';
include_once '../Reward.php';
include_once '../Citizens.php';
if (isset($_POST['T']) && isset($_POST['Q']) && isset($_POST['R']) && isset($_POST['C'])) {
    $Citizen=new Citizens();
    $c=$Citizen->GetEmail($_POST['C']);
    
    if($rowc=mysqli_fetch_assoc($c)){
        $Email=$rowc['CitizenEmail'];
    }

    $e = new Goods();
    $e->setRequestNo($_POST['R']);
    $e->setTypeNo($_POST['T']);
    $e->setTypeQuntity($_POST['Q']);
    $g = $e->Add();

    $t=new Types();
    $t->setTypeNo($_POST['T']);
    $t->setTypeQuntity($_POST['Q']);
    $gt= $t->Update();
    $tp=$t->GetDataByNo();
    if($rows=mysqli_fetch_assoc($tp)){
        $points=$rows['Point'];
    }
    
    $r=new Reward();
    
    $r->setCitizenEmail($Email);
    $r->setMoney(($points)*($_POST['Q']));
    $re=$r->GetData();
    if($row=mysqli_fetch_assoc($re))
        {
            if($row['count(*)']==0){
                $reward=$r->Add();
            }
            else{
                $reward=$r->Update();
            }
        }
        echo $g.$gt.$reward;
}

?>