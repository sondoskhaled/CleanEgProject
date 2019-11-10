<?php

class Database  
{

    var $conn;
    //connection with database
 function __construct(){
    //$conn=mysqli_connect("mysql6001.site4now.net","a4cf9f_youthdb","ABC@123456","db_a4cf9f_you");
    $this->conn=mysqli_connect("localhost","root","","cleaneg");
   
  }

  // using to execute insert / update / delete
  function RUNDML($statment,$msg)
  {
     
     if(!mysqli_query($this->conn,$statment))
     {
        return mysqli_error($this->conn);
     }
     else
        return $msg;
  }
  // using search
  function RUNSearch($statment)
  {
     $result=mysqli_query($this->conn,$statment);
      
     return $result;
  }




}


?>