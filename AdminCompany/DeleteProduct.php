<?php 

    include_once "../Products.php";
    include_once "../ProductHasColor.php";

    $Pro=new Products();
    $Phc=new ProductHasColor();

    $Phc->setColorNo($_GET['CNo']);
    $Phc->setProductNo($_GET['ProNo']);
    $c=$Phc->GetCount();
    if($rc=mysqli_fetch_assoc($c)){
        
        if($rc['Count(*)']==1){
            $Pro->setProductNo($_GET['ProNo']);
           echo $Phc->Delete();
           echo $Pro->Delete();
           $dir="../assets/custom/images/Products/";
            $img=$_GET['ProNo'].$_GET['CNo'];
            $fdir= $dir.$img.".jpg";
            unlink($fdir);
            echo("<script> window.open('Product.php','_parent'); </script>");
        }
        else {
            echo $Phc->Delete();
            $dir="../assets/custom/images/Products/";
            $img=$_GET['ProNo'].$_GET['CNo'];
            $fdir= $dir.$img.".jpg";
            unlink($fdir);
            echo("<script> window.open('Product.php','_parent'); </script>");
        }

    }
    

?>