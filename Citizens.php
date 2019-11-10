<?php

include_once "Database.php";
include_once "Operations.php";
class Citizens extends Database implements Operations
{


    var
        $CitizenName,
        $CitizenEmail,
        $CitizenPhone,
        $CitizenAddress,
        $CitizenPassword,
        $CitizenSecurityQuestion,
        $CitizenSecurityAnswer,
        $CitizenCity,
        $CitizenGovernment;

    public function getCitizenName()
    {
        return $this->CitizenName;
    }
    public function setCitizenName($Name)
    {
        $this->CitizenName = $Name;
    }

    public function getCitizenEmail()
    {
        return $this->CitizenEmail;
    }
    public function setCitizenEmail($Email)
    {
        $this->CitizenEmail = $Email;
    }

    public function getCitizenPhone()
    {
        return $this->CitizenPhone;
    }
    public function setCitizenPhone($phone)
    {
        $this->CitizenPhone = $phone;
    }

    public function getCitizenAddress()
    {
        return $this->CitizenAddress;
    }
    public function setCitizenAddress($address)
    {
        $this->CitizenAddress = $address;
    }

    public function getCitizenPassword()
    {
        return $this->CitizenPassword;
    }
    public function setCitizenPassword($password)
    {
        $this->CitizenPassword = $password;
    }



    public function getCitizenSecurityQuestion()
    {
        return $this->CitizenSecurityQuestion;
    }
    public function setCitizenSecurityQuestion($SecurityQuestion)
    {
        $this->CitizenSecurityQuestion = $SecurityQuestion;
    }

    public function getCitizenSecurityAnswer()
    {
        return $this->CitizenSecurityAnswer;
    }
    public function setCitizenSecurityAnswer($SecurityAnswer)
    {
        $this->CitizenSecurityAnswer = $SecurityAnswer;
    }

    public function getCitizenCity()
    {
        return $this->CitizenCity;
    }
    public function setCitizenCity($city)
    {
        $this->CitizenCity = $city;
    }


    public function getCitizenGovernment()
    {
        return $this->CitizenGovernment;
    }
    public function setCitizenGovernment($gov)
    {
        $this->CitizenGovernment = $gov;
    }




    public function Add()
    {

        // if ($this->getCitizenGovernment()=='0') {
        //     if($this->getCitizenPhone()=='')
        //     {
        //         return parent::RUNDML("insert into citizens (CitizenName,CitizenEmail,
        //     CitizenAddress,CitizenPassword,CitizenSecurityQuestion,CitizenSecutityAnswer)
        //      values ('".$this->getCitizenName()."','".$this->getCitizenEmail()."','"
        //      .$this->getCitizenAddress()."','"
        //      .$this->getCitizenPassword()."','".$this->getCitizenSecurityQuestion()."','"
        //      .$this->getCitizenSecurityAnswer()."')","Account has been successfully created");
        //     }

        // else
        // {return parent::RUNDML("insert into citizens (CitizenName,CitizenEmail,CitizenPhone,
        //     CitizenAddress,CitizenPassword,CitizenSecurityQuestion,CitizenSecutityAnswer)
        //      values ('".$this->getCitizenName()."','".$this->getCitizenEmail()."','"
        //      .$this->getCitizenPhone()."','".$this->getCitizenAddress()."','"
        //      .$this->getCitizenPassword()."','".$this->getCitizenSecurityQuestion()."','"
        //      .$this->getCitizenSecurityAnswer()."')","Account has been successfully created");}
        // }
        // elseif($this->getCitizenCity()=='0'){
        //     if($this->getCitizenPhone()=='')
        //         {
        //             return parent::RUNDML("insert into citizens (CitizenName,CitizenEmail,
        //         CitizenAddress,CitizenPassword,CitizenSecurityQuestion,CitizenSecutityAnswer,GovernmentNo)
        //          values ('".$this->getCitizenName()."','".$this->getCitizenEmail()."','"
        //          .$this->getCitizenAddress()."','"
        //          .$this->getCitizenPassword()."','".$this->getCitizenSecurityQuestion()."','"
        //          .$this->getCitizenSecurityAnswer()."','".$this->getCitizenGovernment()."')"
        //          ,"Account has been successfully created");
        //         }

        //     else
        //     {return parent::RUNDML("insert into citizens (CitizenName,CitizenEmail,CitizenPhone,
        //         CitizenAddress,CitizenPassword,CitizenSecurityQuestion,CitizenSecutityAnswer,GovernmentNo)
        //          values ('".$this->getCitizenName()."','".$this->getCitizenEmail()."','"
        //          .$this->getCitizenPhone()."','".$this->getCitizenAddress()."','"
        //          .$this->getCitizenPassword()."','".$this->getCitizenSecurityQuestion()."','"
        //          .$this->getCitizenSecurityAnswer()."','".$this->getCitizenGovernment()."')"
        //          ,"Account has been successfully created");}
        // }

        // else{

        if ($this->getCitizenPhone() == '') {
            return parent::RUNDML("insert into citizens (CitizenName,CitizenEmail,
                CitizenAddress,CitizenPassword,CitizenSecurityQuestion,CitizenSecutityAnswer,CityNo,GovernmentNo)
                 values ('" . $this->getCitizenName() . "','" . $this->getCitizenEmail() . "','"
                . $this->getCitizenAddress() . "','"
                . $this->getCitizenPassword() . "','" . $this->getCitizenSecurityQuestion() . "','"
                . $this->getCitizenSecurityAnswer() . "','" . $this->getCitizenCity() . "','"
                . $this->getCitizenGovernment() . "')", "Account has been successfully created");
        } else {
            return parent::RUNDML("insert into citizens (CitizenName,CitizenEmail,CitizenPhone,
                CitizenAddress,CitizenPassword,CitizenSecurityQuestion,CitizenSecutityAnswer,CityNo,GovernmentNo)
                 values ('" . $this->getCitizenName() . "','" . $this->getCitizenEmail() . "','"
                . $this->getCitizenPhone() . "','" . $this->getCitizenAddress() . "','"
                . $this->getCitizenPassword() . "','" . $this->getCitizenSecurityQuestion() . "','"
                . $this->getCitizenSecurityAnswer() . "','" . $this->getCitizenCity() . "','"
                . $this->getCitizenGovernment() . "')", "Account has been successfully created");
        }
        // }
    }
    public function update()
    { }
    public function UpdateID($rID)
    {
        if ($this->getCitizenPhone() == '') {
            return parent::RUNDML("update  citizens set CitizenName='" . $this->getCitizenName() . "',CitizenEmail='" . $this->getCitizenEmail() . "',
        CitizenAddress='"
                . $this->getCitizenAddress() . "',CitizenPassword='"
                . $this->getCitizenPassword() . "',CityNo='" . $this->getCitizenCity() . "',GovernmentNo='"
                . $this->getCitizenGovernment() . "' where CitizenID='" . $rID . "'", "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>Congratulations!</strong> Account has been successfully Updated.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>");
        } else {
            return parent::RUNDML("update citizens set CitizenName='" . $this->getCitizenName() . "',CitizenEmail='" . $this->getCitizenEmail() . "',CitizenPhone='"
                . $this->getCitizenPhone() . "',CitizenAddress='" . $this->getCitizenAddress() . "',CitizenPassword='"
                . $this->getCitizenPassword() . "',CityNo='" . $this->getCitizenCity() . "',GovernmentNo='"
                . $this->getCitizenGovernment() . "' where CitizenID='" . $rID . "'", "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                                                                            <strong>Congratulations!</strong> Account has been successfully Updated.
                                                                                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                                                                                <span aria-hidden='true'>&times;</span>
                                                                                            </button>
                                                                                        </div>");
        }
    }

    public function UpdatePW()
    {
        return parent::RUNDML("update citizens set CitizenPassword='" . $this->getCitizenPassword()
            . "' where (CitizenEmail='" . $this->getCitizenEmail() . "')", "Password has been updated");
    }
    public function Delete()
    {
        return parent::RUNDML(" delete from citizens  where (CitizenEmail='" . $this->getCitizenEmail() . "')", "");
    }

    public function Search()
    {
        $log = parent::RunSearch("Select * From citizens where (CitizenEmail='" . $this->getCitizenEmail() . "' or CitizenPhone='"
            . $this->getCitizenPhone()
            . "')");
        return $log;
    }

    public function Login()
    {
        $log = parent::RunSearch("Select * From citizens where (CitizenEmail='" . $this->getCitizenEmail() . "' or CitizenPhone='"
            . $this->getCitizenPhone()
            . "') and CitizenPassword='" . $this->getCitizenPassword() . "'");
        return $log;
    }


    public function CheckCitizen()
    {
        $log = parent::RunSearch("Select * From CitizenView
      where (CitizenEmail='" . $this->getCitizenEmail() . "' or CitizenPhone='"
            . $this->getCitizenPhone()
            . "')");
        return $log;
    }

    public function GetID()
    {
        $log = parent::RunSearch("Select CitizenID From Citizens
      where (CitizenEmail='" . $this->getCitizenEmail() . "' or CitizenPhone='"
            . $this->getCitizenPhone()
            . "')");
        return $log;
    }

    public function GetEmail($ID)
    {
        $log = parent::RunSearch("Select CitizenEmail From Citizens
      where (CitizenID='" . $ID . "')");
        return $log;
    }
}
