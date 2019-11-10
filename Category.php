<?php
include_once "Operations.php";
include_once "Database.php";
class Category extends Database implements Operations
{
  var $CategoryNo,
  $CategoryName;


    public function getCategoryNo()
    {
        return $this->CategoryNo;
    }
    public function setCategoryNo($CNo)
    {
        $this->CategoryNo=$CNo;
    }

    public function getCategoryName()
    {
        return $this->CategoryName;
    }
    public function setCategoryName($CName)
    {
        $this->CategoryName=$CName;
    }

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
  public function GetData()
  {
      $Cat=parent::RunSearch("Select * From Category");
    return $Cat;

  }



}

?>