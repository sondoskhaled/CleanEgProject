<?php
include_once "Operations.php";
include_once "Database.php";
class Colors extends Database implements Operations
{
  var $ColorNo,
  $ColorName;

  public function getColorNo()
    {
        return $this->ColorNo;
    }
    public function setColorNo($CNo)
    {
        $this->ColorNo=$CNo;
    }

    public function getColorName()
    {
        return $this->ColorName;
    }
    public function setColorName($CName)
    {
        $this->ColorName=$CName;
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

  public function SearchByID($CNo){
    return parent::RUNSearch("select * from Colors where ColorNo='".$CNo."'");

}
  public function GetData()
  {
      $cro=parent::RunSearch("Select * From Colors");
    return $cro;

  }

  public function GetDataByNo()
  {
      $c=parent::RunSearch("Select * From Colors where ColorNo='".$this->getColorNo()."'");
    return $c;

  }

 


}

?>