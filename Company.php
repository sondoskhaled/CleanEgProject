<?php

include_once "Database.php";
include_once "Operations.php";
class Company extends Database implements Operations{

    
    var	
    $CompanynName,
    $CompanyLicense,
    $CompanyEmail,
    $CompanyPhone,
    $CompanyAddress,
    $CompanyPassword,
    $CompanyAbout,
    $CompanyCity,
    $CompanyGovernment;

    public function getCompanyName()
    {
        return $this->CompanynName;
    }
    public function setCompanyName($Name)
    {
        $this->CompanynName=$Name;
    }

    public function getCompanyLicense()
    {
        return $this->CompanyLicense;
    }
    public function setCompanyLicense($License)
    {
        $this->CompanyLicense=$License;
    }

    public function getCompanyEmail()
    {
        return $this->CompanyEmail;
    }
    public function setCompanyEmail($Email)
    {
        $this->CompanyEmail=$Email;
    }

    public function getCompanyPhone()
    {
        return $this->CompanyPhone;
    }
    public function setCompanyPhone($phone)
    {
        $this->CompanyPhone=$phone;
    }

    public function getCompanyAddress()
    {
        return $this->CompanyAddress;
    }
    public function setCompanyAddress($address)
    {
        $this->CompanyAddress=$address;
    }

    public function getCompanyPassword()
    {
        return $this->CompanyPassword;
    }
    public function setCompanyPassword($password)
    {
        $this->CompanyPassword=$password;
    }



    public function getCompanyAbout()
    {
        return $this->CompanyAbout;
    }
    public function setCompanyAbout($About)
    {
        $this->CompanyAbout=$About;
    }


    public function getCompanyCity()
    {
        return $this->CompanyCity;
    }
    public function setCompanyCity($city)
    {
        $this->CompanyCity=$city;
    }

    
    public function getCompanyGovernment()
    {
        return $this->CompanyGovernment;
    }
    public function setCompanyGovernment($gov)
    {
        $this->CompanyGovernment=$gov;
    }




    public function Add(){

        if ($this->getCompanyGovernment()=='0') {
            if($this->getCompanyPhone()=='')
            {
                return parent::RUNDML("insert into company (CompanyName,CompanyLicense,CompanyEmail
                CompanyAddress,CompanyPassword,AboutCompany,CompanyStatus)
             values ('".$this->getCompanyName()."','".$this->getCompanyLicense()."','".$this->getCompanyEmail()."','"
             .$this->getCompanyAddress()."','"
             .$this->getCompanyPassword()."','".$this->getCompanyAbout()."','Pending')","Your request is pending waiting approved");
            }
       
        else
        {return parent::RUNDML("insert into company (CompanyName,CompanyLicense,CompanyEmail,CompanyPhone,
            CompanyAddress,CompanyPassword,AboutCompany,CompanyStatus)
             values ('".$this->getCompanyName()."','".$this->getCompanyLicense()."','".$this->getCompanyEmail()."','"
             .$this->getCompanyPhone()."','".$this->getCompanyAddress()."','"
             .$this->getCompanyPassword()."','".$this->getCompanyAbout()."','Pending')","Your request is pending waiting approved");}
        }
        elseif($this->getCompanyCity()=='0'){
            if($this->getCompanyPhone()=='')
                {
                    return parent::RUNDML("insert into company (CompanyName,CompanyLicense,CompanyEmail,
                    CompanyAddress,CompanyPassword,AboutCompany,GovernmentNo,CompanyStatus)
                 values ('".$this->getCompanyName()."','".$this->getCompanyLicense()."','".$this->getCompanyEmail()."','"
                 .$this->getCompanyAddress()."','"
                 .$this->getCompanyPassword()."','".$this->getCompanyAbout()."','"
                 .$this->getCompanyGovernment()."','Pending')"
                 ,"Your request is pending waiting approved");
                }
           
            else
            {return parent::RUNDML("insert into company (CompanyName,CompanyLicense,CompanyEmail,CompanyPhone,
                CompanyAddress,CompanyPassword,AboutCompany,GovernmentNo,CompanyStatus)
                 values ('".$this->getCompanyName()."','".$this->getCompanyLicense()."','".$this->getCompanyEmail()."','"
                 .$this->getCompanyPhone()."','".$this->getCompanyAddress()."','"
                 .$this->getCompanyPassword()."','".$this->getCompanyAbout()."','"
                 .$this->getCompanyGovernment()."','Pending')"
                 ,"Your request is pending waiting approved");}
        }
        
        else{
       
            if($this->getCompanyPhone()=='')
                {
                    return parent::RUNDML("insert into company (CompanyName,CompanyLicense,CompanyEmail
                    CompanyAddress,CompanyPassword,AboutCompany,CityNo,GovernmentNo,CompanyStatus)
                 values ('".$this->getCompanyName()."','".$this->getCompanyLicense()."','".$this->getCompanyEmail()."','"
                 .$this->getCompanyAddress()."','"
                 .$this->getCompanyPassword()."','".$this->getCompanyAbout()."','"
                 .$this->getCompanyCity()."','"
                 .$this->getCompanyGovernment()."','Pending')","Your request is pending waiting approved");
                }
           
            else
            {return parent::RUNDML("insert into company (CompanyName,CompanyLicense,CompanyEmail,CompanyPhone,
                CompanyAddress,CompanyPassword,AboutCompany,CityNo,GovernmentNo,CompanyStatus)
                 values ('".$this->getCompanyName()."','".$this->getCompanyLicense()."','".$this->getCompanyEmail()."','"
                 .$this->getCompanyPhone()."','".$this->getCompanyAddress()."','"
                 .$this->getCompanyPassword()."','".$this->getCompanyAbout()."','"
                 .$this->getCompanyCity()."','"
                 .$this->getCompanyGovernment()."','Pending')","Your request is pending waiting approved");}
        }
    }
  public function Update()
  {

  }


  public function UpdateID($rID)
  {
    if($this->getCompanyPhone()=='')
    {
        return parent::RUNDML("update  Company set CompanyName='".$this->getCompanyName()."', CompanyLicense='".$this->getCompanyLicense()."', 
         CompanyEmail='".$this->getCompanyEmail()."',
        CompanyAddress='"
     .$this->getCompanyAddress()."',CompanyPassword='"
     .$this->getCompanyPassword()."',CityNo='".$this->getCompanyCity()."',GovernmentNo='"
     .$this->getCompanyGovernment()."' where CompanyID='".$rID."'","Account has been successfully Updated");
    }

else
{return parent::RUNDML("update Company set CompanyName='".$this->getCompanyName()."', CompanyLicense='".$this->getCompanyLicense()."', CompanyEmail='".$this->getCompanyEmail()."',CompanyPhone='"
     .$this->getCompanyPhone()."',CompanyAddress='".$this->getCompanyAddress()."',CompanyPassword='"
     .$this->getCompanyPassword()."',CityNo='".$this->getCompanyCity()."',GovernmentNo='"
     .$this->getCompanyGovernment()."' where CompanyID='".$rID."'","Account has been successfully Updated");}
  }

  public function Delete(){
    return parent::RUNDML(" delete from company  where (CompanyLicense='".$this->getCompanyLicense()."')","");

  }

  public function Search()
  {
    $log=parent::RunSearch("Select * From company where (CompanyLicense='".$this->getCompanyLicense()."')");
  return $log;

  }

  public function CheckCompany()
  {
      $log=parent::RunSearch("Select * From CompanyView
      where (CompanyEmail='".$this->getCompanyEmail()."' or CompanyLicense='"
      .$this->getCompanyLicense()
      ."')");
    return $log;

  } 
 
  public function Login()
  {
      $log=parent::RunSearch("Select * From company where (CompanyLicense='".$this->getCompanyLicense()."') or (CompanyEmail='".$this->getCompanyEmail()."') and CompanyPassword='".$this->getCompanyPassword()."' and CompanyStatus='Confirmed'");
    return $log;

  }

  public function SearchEmail()
  {
    $log=parent::RunSearch("Select * From company where (CompanyEmail='".$this->getCompanyEmail()."')");
  return $log;

  }

  public function UpdatePW()
  { 
        return parent::RUNDML("update company set CompanyPassword='".$this->getCompanyPassword()
        ."' where (CompanyEmail='".$this->getCompanyEmail()."')","Password has been updated");
  }

  public function UpdateStatus()
  { 
        return parent::RUNDML("update company set CompanyStatus='Confirmed' where (CompanyLicense='".$this->getCompanyLicense()."')","Password has been updated");
  }

  public function GetData(){
    $log=parent::RunSearch("Select * From company ");
    return $log;
  }

  public function GetSpacificData(){
    $log=parent::RunSearch("Select * From company where CompanyLicense='".$this->getCompanyLicense()."' ");
    return $log;
  }

 

  public function GetID()
  {
      $log=parent::RunSearch("Select CompanyID From Company
      where (CompanyLicense='".$this->getCompanyLicense()."')");
    return $log;

  }

  public function GetPendingData()
  {
    $log=parent::RunSearch("Select * From company where CompanyStatus='Pending'");
    return $log;

  }

}

?>