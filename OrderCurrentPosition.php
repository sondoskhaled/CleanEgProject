
<?php         
 include_once "DCurrentPosition.php";
 $Ord=new DCurrentPosition();
 $Ord->setDPhone($_POST['DPhone']);
 $Ord->setOrderNo($_POST['ORDER']);
 $o=$Ord->GetData();
 $lat;
 $lang;
 $rows=mysqli_fetch_all($o,MYSQLI_ASSOC);
 echo json_encode($rows);
         
        
    ?>