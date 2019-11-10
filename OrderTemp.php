<?php
include_once "Operations.php";
include_once "Database.php";
class OrderTemp extends Database implements Operations
{
  var $OrderTempNo,
  $ProductNo,$ColorNo,$Quntity,$CitizenEmail;

  public function getOrderTempNo()
    {
        return $this->OrderTempNo;
    }
    public function setOrderTempNo($OTNo)
    {
        $this->OrderTempNo=$OTNo;
    }

    public function getProductNo()
    {
        return $this->ProductNo;
    }
    public function setProductNo($ProNo)
    {
        $this->ProductNo=$ProNo;
    }

    public function getQuntity()
    {
        return $this->Quntity;
    }
    public function setQuntity($QYT)
    {
        $this->Quntity=$QYT;
    }

    public function getCitizenEmail()
    {
        return $this->CitizenEmail;
    }
    public function setCitizenEmail($CEmail)
    {
        $this->CitizenEmail=$CEmail;
    }


    public function getColorNo()
    {
        return $this->ColorNo;
    }
    public function setColorNo($CNo)
    {
        $this->ColorNo=$CNo;
    }
 

public function Add(){

    return parent::RUNDML("insert into OrderTemp values
     ('Default','".$this->getProductNo()."','".$this->getColorNo()."','".$this->getQuntity()."','".$this->getCitizenEmail()."')","");
        
}
  public function Update()
  {

  }
  public function Delete(){
    return parent::RUNDML("delete from OrderTemp where CitizenEmail='".$this->getCitizenEmail()."'","");
  }
  public function DeleteByOrderNo($ONo){
    return Parent::RUNDML("delete from OrderTemp where OrderTempNo='".$ONo."'","");
}

public function UpdateByOrderNoM($ONo){
    return Parent::RUNDML("update  OrderTemp set Quntity=Quntity-1 where OrderTempNo='".$ONo."'","");
}

public function UpdateByOrderNoP($ONo){
    return Parent::RUNDML("update  OrderTemp set Quntity=Quntity+1 where OrderTempNo='".$ONo."'","");
}


  public function Search()
  {

  }

  public function SearchByID($TNo){
    //return parent::RUNSearch("select * from Tips where TipsNo='".$TNo."'");

}
  public function GetData()
  {
    //   $T=parent::RunSearch("Select * From Tips");
    // return $T;

  }

 


}

?>