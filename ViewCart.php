<?php
include_once "Operations.php";
include_once "Database.php";
class ViewCart extends Database implements Operations
{
 

public function Add(){

    
}
  public function Update()
  {

  }
  public function Delete(){

  }
  public function Search()
  {

  }

  public function SearchByID($CEmail){
    return parent::RUNSearch("select * from ViewCart where CitizenEmail='".$CEmail."' limit 3 ");

}
public function SearchAllByID($CEmail){
  return parent::RUNSearch("select * from ViewCart where CitizenEmail='".$CEmail."' ");

}
  public function GetCount($CEmail)
  {
    return parent::RUNSearch("select count(*) from ViewCart where CitizenEmail='".$CEmail."'");

  }

  public function GetTotal($CEmail)
  {
    return parent::RUNSearch("select sum(SubTotal) from ViewCart where CitizenEmail='".$CEmail."'");

  }


  
 


}

?>