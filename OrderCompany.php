<?php
include_once "Operations.php";
include_once "Database.php";
class OrderCompany extends Database implements Operations
{
  var $OrderDate,$OrderTotal,$OrderStatus,$OrderQuntity,$TypeNo,$CompanyLicense;


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


  public function getOrderQuntity()
  {
      return $this->OrderQuntity;
  }
  public function setOrderQuntity($OQ)
  {
      $this->OrderQuntity=$OQ;
  }


  public function getTypeNo()
  {
      return $this->TypeNo;
  }
  public function setTypeNo($TNo)
  {
      $this->TypeNo=$TNo;
  }


  public function getCompanyLicense()
  {
      return $this->CompanyLicense;
  }
  public function setCompanyLicense($CLicense)
  {
      $this->CompanyLicense=$CLicense;
  }


  


public function Add(){

    return parent::RUNDML("insert into Ordercompany
    (OrderDate,OrderTotal,OrderStatus,CompanyLicense,OrderQuntity,TypeNo) 
    values ('". $this->getOrderDate()."','".$this->getOrderTotal()."','"
    .$this->getOrderStatus()."','".$this->getCompanyLicense()."','".$this->getOrderQuntity()."','".$this->getTypeNo()."')","Order has been added succefully");
 }
  public function Update()
  {

  }
   public function Delete()
  {

  }
 
  public function Deleteno($order){
    return parent::RUNDML("Delete from Ordercompany where OrderNo='".$order."'","Done");
 
    
  }
 
  public function Search()
  {

  }

  public function UpdateStatus($O)
  { 
        return parent::RUNDML("update Ordercompany set OrderStatus='Confirmed' where (OrderNo='".$O."')","Order Status has been updated");
  }


  public function GetData(){
    return parent::RUNSearch("select * from OrderCompany where CompanyLicense='".$this->getCompanyLicense()."'");
}

public function GetAllData(){
    return parent::RUNSearch("select * from OrderCompany  where OrderStatus='Pending'");
}
public function GetCount(){
return parent::RUNSearch("select Count(*) from OrderCompany where OrderStatus='Pending'");
}

  


}

?>