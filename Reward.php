<?php
include_once "Operations.php";
include_once "Database.php";
class Reward extends Database implements Operations
{
  var $RewardNo,
  $CitizenEmail,$Money;

  public function getRewardNo()
    {
        return $this->RewardNo;
    }
    public function setRewardNo($RNo)
    {
        $this->RewardNo=$RNo;
    }

    public function getCitizenEmail()
    {
        return $this->CitizenEmail;
    }
    public function setCitizenEmail($CEmail)
    {
        $this->CitizenEmail=$CEmail;
    }

    public function getMoney()
    {
        return $this->Money;
    }
    public function setMoney($M)
    {
        $this->Money=$M;
    }

   


public function Add(){
    return parent::RUNDML("insert into Rewards (CitizenEmail,Money)
    values ('".$this->getCitizenEmail()."','".$this->getMoney()."')","Done");
}
  public function Update()
  {
     return parent::RUNDML("update Rewards set Money=Money+'".$this->getMoney()
        ."' where (CitizenEmail='".$this->getCitizenEmail()."')","Money has been updated");
  }

  public function UpdateMoney()
  {
     return parent::RUNDML("update Rewards set Money='".$this->getMoney()
        ."' where (CitizenEmail='".$this->getCitizenEmail()."')","Money has been updated");
  }
  public function Delete(){

  }
  public function Search()
  {

  }


  public function GetData()
  {
      $T=parent::RunSearch("Select count(*) From Rewards where CitizenEmail='".$this->getCitizenEmail()."'");
    return $T;

  }

  public function GetMoneyData()
  {
      $T=parent::RunSearch("Select * From Rewards where CitizenEmail='".$this->getCitizenEmail()."'");
    return $T;

  }

 


}

?>