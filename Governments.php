<?php
include_once "Operations.php";
include_once "Database.php";
class Governments extends Database implements Operations
{
  var $GovernmentNo,
  $GovernmentName;

  public function getGovernmentNo()
    {
        return $this->GovernmentNo;
    }
    public function setGovernmentNo($GovNo)
    {
        $this->GovernmentNo=$GovNo;
    }

    public function getGovernmentName()
    {
        return $this->GovernmentName;
    }
    public function setGovernmentName($GovName)
    {
        $this->GovernmentName=$GovName;
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
      $gov=parent::RunSearch("Select * From governments");
    return $gov;

  }

  public function GetNo()
  {
      $gov=parent::RunSearch("Select * From governments where GovernmentName='".$this->getGovernmentName()."'");
    return $gov;

  }


}

?>