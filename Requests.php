<?php
include_once "Operations.php";
include_once "Database.php";
class Requests extends Database implements Operations
{
  var $RequestDate,$RequestStatus,$RequestCity,$RequestAddress,$CitizenEmail,$RDeliveryPhone;


  public function getRequestDate()
  {
      return $this->RequestDate;
  }
  public function setRequestDate($RDate)
  {
      $this->RequestDate=$RDate;
  }


  public function getRequestStatus()
  {
      return $this->RequestStatus;
  }
  public function setRequestStatus($RS)
  {
      $this->RequestStatus=$RS;
  }


  public function getRequestCity()
  {
      return $this->RequestCity;
  }
  public function setRequestCity($RCity)
  {
      $this->RequestCity=$RCity;
  }


  public function getRequestAddress()
  {
      return $this->RequestAddress;
  }
  public function setRequestAddress($RAdd)
  {
      $this->RequestAddress=$RAdd;
  }


  public function getCitizenEmail()
  {
      return $this->CitizenEmail;
  }
  public function setCitizenEmail($CEmail)
  {
      $this->CitizenEmail=$CEmail;
  }


  public function getRDeliveryPhone()
  {
      return $this->RDeliveryPhone;
  }
  public function setRDeliveryPhone($RDPhone)
  {
      $this->RDeliveryPhone=$RDPhone;
  }



public function Add(){

    return parent::RUNDML("insert into Requests 
    (RequestDate,RequestStatus,CitizenEmail,DeliveryPhone,RequestCity,RequestAddress) 
    values ('". $this->getRequestDate()."','"
    .$this->getRequestStatus()."','".$this->getCitizenEmail()."','".$this->getRDeliveryPhone()."','".$this->getRequestCity()."','".$this->getRequestAddress()."')","");}

  public function Update()
  {

  }
  public function Delete(){

  }
  public function Search()
  {

  }


  public function GetData(){ 
    return parent::RUNSearch("select * from Requests where CitizenEmail='".$this->getCitizenEmail()."' order by RequestDate desc");
}

  
public function GetDataByDNo(){
    return parent::RUNSearch("select * from RequestView where DeliveryPhone='".$this->getRDeliveryPhone()."' and RequestStatus='".$this->getRequestStatus()."'");
}
public function Count(){
return parent::RUNSearch("select Count(*) from orders where OrderStatus = 'Pending' and DeliveryPhone='".$this->getRDeliveryPhone()."' ");
}




public function UpdateStatus($ONo)
  {
    return parent::RUNDML("update Requests set RequestStatus='".$this->getRequestStatus()."' where RequestNo='".$ONo."'","");
  }

  public function GetCount(){
    return parent::RUNSearch("select Count(*) from Requests where DeliveryPhone = '".$this->getRDeliveryPhone()."' and (RequestStatus = 'Pending' or RequestStatus = 'Shipping')");
    }
    

}

?>