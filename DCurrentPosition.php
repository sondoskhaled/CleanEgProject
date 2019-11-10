<?php
include_once "Operations.php";
include_once "Database.php";
class DCurrentPosition extends Database implements Operations
{
  var $DPhone,
  $OrderNo,
  $Lat,$Lng;

  public function getDPhone()
    {
        return $this->DPhone;
    }
    public function setDPhone($D)
    {
        $this->DPhone=$D;
    }

    public function getOrderNo()
    {
        return $this->OrderNo;
    }
    public function setOrderNo($ONo)
    {
        $this->OrderNo=$ONo;
    }

    public function getLat()
    {
        return $this->Lat;
    }
    public function setLat($L)
    {
        $this->Lat=$L;
    }

    public function getLng()
    {
        return $this->Lng;
    }
    public function setLng($g)
    {
        $this->Lng=$g;
    }

public function Add(){
  
  return parent::RUNDML("insert into dcurrentposition (DPhone,OrderNo,Lat,Lng)
      values ('".$this->getDPhone()."','".$this->getOrderNo()."','".$this->getLat()."','"
      .$this->getLng()."')","Position has been added");

      }

  public function Update()
  {
    return parent::RUNDML("update dcurrentposition set Lat='".$this->getLat()
    ."' , Lng='".$this->getLng()."' where (OrderNo='".$this->getOrderNo()."') ","Position has been updated");
  }
  
  public function Search()
  {

  }

  public function Delete()
  {
      
  }

  public function GetData()
  {
    return parent::RUNSearch("select * from dcurrentposition where OrderNo='".$this->getOrderNo()."'
    and  DPhone='".$this->getDPhone()."'");
      
  }

  

}

?>