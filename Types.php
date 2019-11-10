<?php
include_once "Operations.php";
include_once "Database.php";
class Types extends Database implements Operations
{
  var $TypeNo,
  $TypeName,$TypePoints,$TypePrice,$TypeQuntity;

  public function getTypeNo()
    {
        return $this->TypeNo;
    }
    public function setTypeNo($TNo)
    {
        $this->TypeNo=$TNo;
    }

    public function getTypeName()
    {
        return $this->TypeName;
    }
    public function setTypeName($TName)
    {
        $this->TypeName=$TName;
    }

    public function getTypePoints()
    {
        return $this->TypePoints;
    }
    public function setTypePoints($TPoints)
    {
        $this->TypePoints=$TPoints;
    }

    public function getTypePrice()
    {
        return $this->TypePrice;
    }
    public function setTypePrice($TPrice)
    {
        $this->TypePrice=$TPrice;
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
        
}
  public function Update()
  {
    return parent::RUNDML("update Type set Quntitiy=Quntitiy+'".$this->getTypeQuntity()
        ."' where (TypeNo='".$this->getTypeNo()."')","Type has been updated");
  }

  public function UpdateQ()
  {
    return parent::RUNDML("update Type set Quntitiy=Quntitiy-'".$this->getTypeQuntity()
        ."' where (TypeNo='".$this->getTypeNo()."')","Type has been updated");
  }

  public function Delete(){

  }
  public function Search()
  {

  }

  public function GetDataByNo()
  {
      $T=parent::RunSearch("Select * From Type where TypeNo='".$this->getTypeNo()."'");
    return $T;

  }

  public function GetData()
  {
      $T=parent::RunSearch("Select * From Type");
    return $T;

  }

 


}

?>