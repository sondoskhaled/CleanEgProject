<?php
include_once "Operations.php";
include_once "Database.php";
class Cities extends Database implements Operations
{
  var $CityNo,
  $CityName,
  $GovernmentNo;

  public function getGovernmentNo()
    {
        return $this->GovernmentNo;
    }
    public function setGovernmentNo($GovNo)
    {
        $this->GovernmentNo=$GovNo;
    }

    public function getCityNo()
    {
        return $this->CityNo;
    }
    public function setCityNo($CNo)
    {
        $this->CityNo=$CNo;
    }

    public function getCityName()
    {
        return $this->CityName;
    }
    public function setCityName($CName)
    {
        $this->CityName=$CName;
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
    $Cities=parent::RunSearch("Select * From cities where CityNo='".$this->getCityNo()."'");
    return $Cities;
  }
  public function GetData()
  {
      $Cities=parent::RunSearch("Select * From cities");
    return $Cities;

  }

  public function GetSpecificData()
  {
      $Cities=parent::RunSearch("Select * From cities
      where GovernmentNo=".$this->getGovernmentNo()."");
    return $Cities;

  }

  


}

?>