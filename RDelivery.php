<?php
include_once "Operations.php";
include_once "Database.php";
class RDelivery extends Database implements Operations
{
  var $DPhone,$DName,$DPassword,$DCity,$DStatus,$DAvaliableDateTime;


  public function getDPhone()
  {
      return $this->DPhone;
  }
  public function setDPhone($RDPhone)
  {
      $this->DPhone=$RDPhone;
  }

  public function getDName()
  {
      return $this->DName;
  }
  public function setDName($RDName)
  {
      $this->DName=$RDName;
  }

  public function getDPassword()
  {
      return $this->DPassword;
  }
  public function setDPassword($DPass)
  {
      $this->DPassword=$DPass;
  }


  public function getDCity()
  {
      return $this->DCity;
  }
  public function setDCity($RDCity)
  {
      $this->DCity=$RDCity;
  }


  public function getDStatus()
  {
      return $this->DStatus;
  }
  public function setDStatus($RDStatus)
  {
      $this->DStatus=$RDStatus;
  }


  public function getDAvaliableDateTime()
  {
      return $this->DAvaliableDateTime;
  }
  public function setDAvaliableDateTime($DAD)
  {
      $this->DAvaliableDateTime=$DAD;
  }


 

  public function Add(){
    
    return parent::RUNDML("insert into RequestDelivery 
    (DPhone,DName,DPassword,DCity,DStatus) 
    values ('". $this->getDPhone()."','".$this->getDName()."','RD12345','".$this->getDCity()."','Available')","");
 
    
 }
  public function Update()
  {

  }
  public function Delete(){
    return parent::RUNDML("Delete from RequestDelivery where DPhone='".$this->getDPhone()."'","Done");
 
    
  }
 
  public function Search()
  {
   return Parent::RUNSearch("select * from RequestDelivery where DCity='".$this->getDCity()."' and DStatus='Available'");
  }

  public function SearchD()
  {
   return Parent::RUNSearch("select * from RequestDelivery where DPhone='".$this->getDPhone()."'");
  }

  public function UpdateStatus()
  {
    return parent::RUNDML("update RequestDelivery set DStatus='Busy' where DPhone='".$this->getDPhone()."'","");
  }

  public function Login() 
  {
      $log=parent::RunSearch("Select * From RequestDelivery where (DPhone='".$this->getDPhone()."') and DPassword='".$this->getDPassword()."'");
    return $log;

  }

  public function GetData(){
    return parent::RUNSearch("select * from RequestDelivery");
        }
  
}

?>