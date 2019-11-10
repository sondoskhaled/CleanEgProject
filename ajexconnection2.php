<?php
include_once 'Cities.php';

if (isset($_POST['companyGovNo'])) {
    
   $e = new Cities();
  // $e->setOrgID($_SESSION['org_id']);
   $e->setGovernmentNo($_POST['companyGovNo']);
   $city = $e->GetSpecificData();
   $row=mysqli_fetch_all($city,MYSQLI_ASSOC);
       echo json_encode($row) ;
   
  
   
   
}

?>