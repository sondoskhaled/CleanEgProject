<?php
include_once 'Cities.php';
if (isset($_POST['GovNo'])) {
    
    $e = new Cities();
   // $e->setOrgID($_SESSION['org_id']);
    $e->setGovernmentNo($_POST['GovNo']);
    $city = $e->GetSpecificData();
    $row=mysqli_fetch_all($city,MYSQLI_ASSOC);
        echo json_encode($row) ;
    
   
    
    
}


// $q =$_REQUEST['q'];
// $result='';

// if($q !== "")
// {
//     include_once "Cities.php";
//     $city=new Cities();
//     $city->setGovernmentNo($q);
//     $c= $city->GetSpecificData();

//     while($row=mysqli_fetch_assoc($c))
//     {
//     $result .="<option value='".$row['CityNo']."'>".$row['CityName']."</option>";
//     }
    
// }
// echo $result ==='' ? "":$result;
?>