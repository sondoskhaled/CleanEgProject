<?php
include_once "Operations.php";
include_once "Database.php";
class Fav extends Database implements Operations
{
  var $FavNo,
  $CitizenEmail,$ProductNo,$ColorNo;

  public function getFavNo()
    {
        return $this->FavNo;
    }
    public function setFavNo($FNo)
    {
        $this->FavNo=$FNo;
    }

    public function getCitizenEmail()
    {
        return $this->CitizenEmail;
    }
    public function setCitizenEmail($CEmail)
    {
        $this->CitizenEmail=$CEmail;
    }

    public function getProductNo()
    {
        return $this->ProductNo;
    }
    public function setProductNo($PNo)
    {
        $this->ProductNo=$PNo;
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
    return parent::RUNDML("insert into Fav (CitizenEmail,ProductNo,ColorNo)
    values ('".$this->getCitizenEmail()."','".$this->getProductNo()."','".$this->getColorNo()."')","Done");
  }
  public function Update()
  {

  }
  public function Delete(){
    return parent::RUNDML("delete from Fav where FavNo='".$this->getFavNo()."'","");
 
  }
  public function Search()
  {

  }

  public function SearchByID(){
    return parent::RUNSearch("select * from Fav where CitizenEmail='".$this->getCitizenEmail()."'");

}
  public function GetData()
  {
      $T=parent::RunSearch("Select * From Fav");
    return $T;

  }

 
  public function GetCount($CEmail)
  {
    return parent::RUNSearch("select count(*) from FavView where CitizenEmail='".$CEmail."'");

  }

  public function SearchAllByID($CEmail){
    return parent::RUNSearch("select * from FavView where CitizenEmail='".$CEmail."' ");
  
  }

  public function SearchByIDLimit($CEmail){
    return parent::RUNSearch("select * from FavView where CitizenEmail='".$CEmail."' limit 3 ");

}

}

?>