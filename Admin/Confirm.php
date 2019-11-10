<?php
include_once "../Company.php";
$com=new Company();
$com->setCompanyLicense($_GET['L']);
$com->UpdateStatus();
header('location:index.php');
?>