<?php
include_once "Operations.php";
include_once "Database.php";
class Orders extends Database implements Operations
{
  var $OrderDate,$OrderTotal,$OrderStatus,$OrderCity,$OrderAddress,$CitizenEmail,$DeliveryPhone,$Lat,$Lng;


  public function getOrderDate()
  {
      return $this->OrderDate;
  }
  public function setOrderDate($ODate)
  {
      $this->OrderDate=$ODate;
  }

  public function getOrderTotal()
  {
      return $this->OrderTotal;
  }
  public function setOrderTotal($OTotal)
  {
      $this->OrderTotal=$OTotal;
  }

  public function getOrderStatus()
  {
      return $this->OrderStatus;
  }
  public function setOrderStatus($OS)
  {
      $this->OrderStatus=$OS;
  }


  public function getOrderCity()
  {
      return $this->OrderCity;
  }
  public function setOrderCity($OCity)
  {
      $this->OrderCity=$OCity;
  }


  public function getOrderAddress()
  {
      return $this->OrderAddress;
  }
  public function setOrderAddress($OAdd)
  {
      $this->OrderAddress=$OAdd;
  }


  public function getCitizenEmail()
  {
      return $this->CitizenEmail;
  }
  public function setCitizenEmail($CEmail)
  {
      $this->CitizenEmail=$CEmail;
  }


  public function getDeliveryPhone()
  {
      return $this->DeliveryPhone;
  }
  public function setDeliveryPhone($DPhone)
  {
      $this->DeliveryPhone=$DPhone;
  }

  public function setLat($L)
  {
      $this->Lat=$L;
  }
  public function getLat()
  {
      return $this->Lat;
  }

  public function setLng($L)
  {
      $this->Lng=$L;
  }
  public function getLng()
  {
      return $this->Lng;
  }



public function Add(){

    return parent::RUNDML("insert into Orders 
    (OrderDate,OrderTotal,OrderStatus,CitizenEmail,DeliveryPhone,OrderCity,OrderAddress,Lat,Lng) 
    values ('". $this->getOrderDate()."','".$this->getOrderTotal()."','"
    .$this->getOrderStatus()."','".$this->getCitizenEmail()."','".$this->getDeliveryPhone()."','".$this->getOrderCity()."','".$this->getOrderAddress()."','".$this->getLat()."','".$this->getLng()."')","");
 }
  public function Update()
  {

  }
  public function Delete(){

  }
  public function Search()
  {

  }

  public function GetMaxOrderNo(){
      return parent::RUNSearch("select max(OrderNo) from Orders where CitizenEmail='".$this->getCitizenEmail()."'");
  }

  public function GetData(){
    return parent::RUNSearch("select * from Orders where CitizenEmail='".$this->getCitizenEmail()."' order by OrderDate desc");
  }

  public function GetDataPending(){
    return parent::RUNSearch("select * from Orders where CitizenEmail='".$this->getCitizenEmail()."' and OrderStatus='Pending' order by OrderDate desc");
  }

  public function GetDataShipping(){
    return parent::RUNSearch("select * from Orders where CitizenEmail='".$this->getCitizenEmail()."' and OrderStatus='Shipping' order by OrderDate desc");
  }

  public function GetDataDone(){
    return parent::RUNSearch("select * from Orders where CitizenEmail='".$this->getCitizenEmail()."' and OrderStatus='Done' order by OrderDate desc");
  }

  public function GetDataByONo($ONo){
    return parent::RUNSearch("select * from Orders where OrderNo='".$ONo."'");
  }

public function GetDataByDNo(){
    return parent::RUNSearch("select * from OrderView where DeliveryPhone='".$this->getDeliveryPhone()."' and OrderStatus='".$this->getOrderStatus()."'");
}
public function GetPendingOrders(){
    return parent::RUNSearch("select * from orders where OrderStatus = 'Pending' ");
  }

public function GetCount(){
return parent::RUNSearch("select Count(*) from orders where DeliveryPhone = '".$this->getDeliveryPhone()."' and (OrderStatus = 'Pending' or OrderStatus = 'Shipping')");
}
public function Count(){
return parent::RUNSearch("select Count(*) from orders where OrderStatus = 'Pending' and DeliveryPhone='".$this->getDeliveryPhone()."' ");
}




public function UpdateStatus($ONo)
  {
    return parent::RUNDML("update Orders set OrderStatus='".$this->getOrderStatus()."' where OrderNo='".$ONo."'","");
  }

  


}

?>