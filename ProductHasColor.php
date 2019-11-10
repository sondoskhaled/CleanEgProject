<?php
include_once "Operations.php";
include_once "Database.php";
class ProductHasColor extends Database implements Operations
{
  var $ProductNo,
  $ProductQuntity,$ColorNo;

  public function getProductNo()
    {
        return $this->ProductNo;
    }
    public function setProductNo($ProNo)
    {
        $this->ProductNo=$ProNo;
    }

 
    public function getProductQuntity()
    {
        return $this->ProductQuntity;
    }
    public function setProductQuntity($ProQun)
    {
        $this->ProductQuntity=$ProQun;
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
  
    return parent::RUNDML("insert into ProductHasColor (ProductNo,ColorNo,Quntity)
        values ('".$this->getProductNo()."','".$this->getColorNo()."','".$this->getProductQuntity()."')"
        ,"Product`s Color has been added");

      }

  
  public function Update()
  {

  }
  public function Delete(){
    return parent::RUNDML(" delete from ProductHasColor  where (ProductNo='".$this->getProductNo()."' and ColorNo='".$this->getColorNo()."')","Done");
  }
  public function Search()
  {

  }

  public function GetCount()
  {
      $Pro=parent::RunSearch("Select Count(*) From ProductHasColor where (ProductNo='".$this->getProductNo()."')");
    return $Pro;

  }

  public function GetQYT()
  {
      $Pro=parent::RunSearch("Select Quntity From ProductHasColor where (ProductNo='".$this->getProductNo()."') and (ColorNo='".$this->getColorNo()."')");
    return $Pro;

  }

  public function UpdateQuntity($m)
  {
        return parent::RUNDML("update ProductHasColor set Quntity=Quntity-'".$m
        ."' where (ProductNo='".$this->getProductNo()."') and (ColorNo='".$this->getColorNo()."')","Password has been updated");
  }

}

?>