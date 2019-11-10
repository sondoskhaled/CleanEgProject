<?php
include_once "Operations.php";
include_once "Database.php";
class OrderDetails extends Database implements Operations
{
  var $OrderNo,$ProductNo,$ProductColorNo,$Quntity,$Price,$Total;


  public function getOrderNo()
  {
      return $this->OrderNo;
  }
  public function setOrderNo($ONo)
  {
      $this->OrderNo=$ONo;
  }

  public function getProductNo()
  {
      return $this->ProductNo;
  }
  public function setProductNo($PNo)
  {
      $this->ProductNo=$PNo;
  }

  public function getQuntity()
  {
      return $this->Quntity;
  }
  public function setQuntity($Q)
  {
      $this->Quntity=$Q;
  }


  public function getPrice()
  {
      return $this->Price;
  }
  public function setPrice($P)
  {
      $this->Price=$P;
  }


  public function getTotal()
  {
      return $this->Total;
  }
  public function setTotal($T)
  {
      $this->Total=$T;
  }

  public function getProductColorNo()
  {
      return $this->ProductColorNo;
  }
  public function setProductColorNo($T)
  {
      $this->ProductColorNo=$T;
  }


public function Add(){

   return  parent::RUNDML("insert into OrderDetails values ('".$this->getOrderNo()."','".$this->getProductNo()."','".$this->getProductColorNo()."','".$this->getQuntity()."','".$this->getPrice()."','".$this->getTotal()."')","");
 }
  public function Update()
  {

  }
  public function Delete(){

  }
  public function Search()
  {

  }

  public function GetData(){
    return parent::RUNSearch("select * from OrderDetails where OrderNo='".$this->getOrderNo()."'");
}

  


}

?>