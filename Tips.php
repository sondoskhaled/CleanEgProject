<?php
include_once "Operations.php";
include_once "Database.php";
class Tips extends Database implements Operations
{
  var $TipsNo,
  $TipsTitle,$TipsDetails;

  public function getTipsNo()
    {
        return $this->TipsNo;
    }
    public function setTipsNo($TNo)
    {
        $this->TipsNo=$TNo;
    }

    public function getTipsTitle()
    {
        return $this->TipsTitle;
    }
    public function setTipsTitle($TTitle)
    {
        $this->TipsTitle=$TTitle;
    }

    public function getTipsDetails()
    {
        return $this->TipsDetails;
    }
    public function setTipsDetails($TDetails)
    {
        $this->TipsDetails=$TDetails;
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

  }

  public function SearchByID($TNo){
    return parent::RUNSearch("select * from Tips where TipsNo='".$TNo."'");

}
  public function GetData()
  {
      $T=parent::RunSearch("Select * From Tips");
    return $T;

  }

 


}

?>