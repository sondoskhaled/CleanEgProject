<?php
include_once 'Products.php';
if (isset($_POST['Min']) && isset($_POST['Max']) ) {
    
    if($_POST['Sort']==1){$e = new Products();
        $pro = $e->GetSpecificData1($_POST['Min'],$_POST['Max']);
        $row=mysqli_fetch_all($pro,MYSQLI_ASSOC);
            echo json_encode($row) ;}
    else if($_POST['Sort']==2){$e = new Products();
        $pro = $e->GetSpecificData2($_POST['Min'],$_POST['Max']);
        $row=mysqli_fetch_all($pro,MYSQLI_ASSOC);
            echo json_encode($row) ;}
    else if($_POST['Sort']==3){$e = new Products();
        $pro = $e->GetSpecificData3($_POST['Min'],$_POST['Max']);
        $row=mysqli_fetch_all($pro,MYSQLI_ASSOC);
            echo json_encode($row) ;}
    else if($_POST['Sort']==4){$e = new Products();
        $pro = $e->GetSpecificData4($_POST['Min'],$_POST['Max']);
        $row=mysqli_fetch_all($pro,MYSQLI_ASSOC);
            echo json_encode($row) ;}
    else{
    $e = new Products();
    $pro = $e->GetSpecificData($_POST['Min'],$_POST['Max']);
    $row=mysqli_fetch_all($pro,MYSQLI_ASSOC);
        echo json_encode($row) ;}
    
   
    
    
}

?>