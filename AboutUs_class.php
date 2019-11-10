<?php
include_once "Operations.php";
include_once "Database.php";
class about extends Database implements Operations
{
  var $title , $content ,$adress , $email , $phone ;

  public function gettitle()
  {
      return $this->title;
  }
  public function settitle($ti)
  {
      $this->title=$ti;
  }

  public function getcontent()
  {
      return $this->content;
  }
  public function setcontent($co)
  {
      $this->content=$co;
  }

  public function getadress()
  {
      return $this->adress;
  }
  public function setadress($ad)
  {
      $this->adress=$ad;
  }

  public function getemail()
  {
      return $this->email;
  }
  public function setemail($em)
  {
      $this->email=$em;
  }


  public function getphone()
  {
      return $this->phone;
  }
  public function setphone($ph)
  {
      $this->phone=$ph;
  }



  

public function Add(){

}
  public function Update()
  {

  }
  public function Delete(){

  }
  public function Search()
  {
      return parent::RUNSearch("select * from about");

  }

 
  


}

?>