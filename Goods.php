<?php
include_once "Operations.php";
include_once "Database.php";
class Goods extends Database implements Operations
{
  var $GoodsNo,
  $RequestNo,$TypeNo,$TypeQuntity;

  public function getGoodsNo()
    {
        return $this->GoodsNo;
    }
    public function setGoodsNo($GNo)
    {
        $this->GoodsNo=$GNo;
    }

    public function getRequestNo()
    {
        return $this->RequestNo;
    }
    public function setRequestNo($RNo)
    {
        $this->RequestNo=$RNo;
    }

    public function getTypeNo()
    {
        return $this->TypeNo;
    }
    public function setTypeNo($TNo)
    {
        $this->TypeNo=$TNo;
    }


    public function getTypeQuntity()
    {
        return $this->TypeQuntity;
    }
    public function setTypeQuntity($TQ)
    {
        $this->TypeQuntity=$TQ;
    }

 

  public function Add(){
    return parent::RUNDML("insert into Goods (RequestNo,TypeNo,TypeQuntity)
     values ('".$this->getRequestNo()."','".$this->getTypeNo()."','"
     .$this->getTypeQuntity()."')","Done");
  }
  public function Update()
  {

  }
  public function Delete(){

  }
  public function Search()
  {

  }

  public function GetDataByNo()
  {
      $T=parent::RunSearch("Select * From Goods where RequestNo='".$this->getRequestNo()."'");
    return $T;

  }

  public function GetData()
  {
      $T=parent::RunSearch("Select * From Goods");
    return $T;

  }

 


}

?>