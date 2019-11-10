<?php
include_once 'Products.php';
if (isset($_POST['Min']) && isset($_POST['Max']) ) {
    
    $e = new Products();
    $pro = $e->GetSpecificData($_POST['Min'],$_POST['Max']);
    $row=mysqli_fetch_all($pro,MYSQLI_ASSOC);
        echo json_encode($row) ;
    
   
    
    
}

?>