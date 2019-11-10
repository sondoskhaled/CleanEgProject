<?php

include_once "Database.php";
include_once "Operations.php";
class ContactUsClass extends Database implements Operations
{


    var
        $ContactName,
        $ContactEmail,
        $ContactMessage;

    public function getContactName()
    {
        return $this->ContactName;
    }
    public function setContactName($Name)
    {
        $this->ContactName = $Name;
    }

    public function getContactEmail()
    {
        return $this->ContactEmail;
    }
    public function setContactEmail($Email)
    {
        $this->ContactEmail = $Email;
    }

    public function getContactMessage()
    {
        return $this->ContactMessage;
    }
    public function setContactMessage($Message)
    {
        $this->ContactMessage = $Message;
    }


    public function Add()
    {return parent::RUNDML("insert into contactus (contactName,contactEmail,contactMessage) values ('" . $this->getContactName() . "','" . $this->getContactEmail() . "','" . $this->getContactMessage() . "')", "Successfully sent"); }
    public function update()
    { }
    public function Delete()
    { }

    public function Search()
    { }
}