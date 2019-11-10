<?php
include_once "Operations.php";
include_once "Database.php";
class Delivery extends Database implements Operations
{
  var $DeliveryPhone,$DeliveryName,$DeliveryPassword,$DeliveryCity,$DeliveryStatus,$DeliveryAvaliableDateTime;


  public function getDeliveryPhone()
  {
      return $this->DeliveryPhone;
  }
  public function setDeliveryPhone($DPhone)
  {
      $this->DeliveryPhone=$DPhone;
  }

  public function getDeliveryName()
  {
      return $this->DeliveryName;
  }
  public function setDeliveryName($DName)
  {
      $this->DeliveryName=$DName;
  }

  public function getDeliveryPassword()
  {
      return $this->DeliveryPassword;
  }
  public function setDeliveryPassword($DPass)
  {
      $this->DeliveryPassword=$DPass;
  }


  public function getDeliveryCity()
  {
      return $this->DeliveryCity;
  }
  public function setDeliveryCity($DCity)
  {
      $this->DeliveryCity=$DCity;
  }


  public function getDeliveryStatus()
  {
      return $this->DeliveryStatus;
  }
  public function setDeliveryStatus($DStatus)
  {
      $this->DeliveryStatus=$DStatus;
  }


  public function getDeliveryAvaliableDateTime()
  {
      return $this->DeliveryAvaliableDateTime;
  }
  public function setDeliveryAvaliableDateTime($DAD)
  {
      $this->DeliveryAvaliableDateTime=$DAD;
  }




public function Add(){
    
    return parent::RUNDML("insert into Delivery 
    (DeliveryPhone,DeliveryName,DeliveryPassword,DeliveryCity,DeliveryStatus) 
    values ('". $this->getDeliveryPhone()."','".$this->getDeliveryName()."','D12345','".$this->getDeliveryCity()."','Available')","");
 
    
 }
  public function Update()
  {

  }
  public function Delete(){
    return parent::RUNDML("Delete from Delivery where DeliveryPhone='".$this->getDeliveryPhone()."'","Done");
 
    
  }
 
  public function Search()
  {
   return Parent::RUNSearch("select * from Delivery where DeliveryCity='".$this->getDeliveryCity()."' and DeliveryStatus='Available'");
  }

  public function SearchD()
  {
   return parent::RUNSearch("select * from Delivery where DeliveryPhone='".$this->getDeliveryPhone()."'");
  }

  public function UpdateStatus()
  {
    return parent::RUNDML("update Delivery set DeliveryStatus='Busy' where DeliveryPhone='".$this->getDeliveryPhone()."'","");
  }

  public function UpdateStatusDone()
  {
    return parent::RUNDML("update Delivery set DeliveryStatus='Available' where DeliveryPhone='".$this->getDeliveryPhone()."'","");
  }

  public function Login()
  {
      $log=parent::RunSearch("Select * From Delivery where (DeliveryPhone='".$this->getDeliveryPhone()."') and DeliveryPassword='".$this->getDeliveryPassword()."'");
    return $log;

  }

  public function GetData(){
    return parent::RUNSearch("select * from Delivery");
        }
  
  public function GetAllData(){
    return parent::RUNSearch("select * from orderview where OrderStatus='Pending'");
}
}
 
?>