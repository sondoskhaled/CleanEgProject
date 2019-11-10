<?php
include_once "Operations.php";
include_once "Database.php";
class Products extends Database implements Operations
{
  var $ProductNo,
  $ProductName,
  $ProductQuntity,$ProductDetails,$ProductPrice,$CompanyID,$CategoryNo;

  public function getProductNo()
    {
        return $this->ProductNo;
    }
    public function setProductNo($ProNo)
    {
        $this->ProductNo=$ProNo;
    }

    public function getProductName()
    {
        return $this->ProductName;
    }
    public function setProductName($ProName)
    {
        $this->ProductName=$ProName;
    }

    public function getProductQuntity()
    {
        return $this->ProductQuntity;
    }
    public function setProductQuntity($ProQun)
    {
        $this->ProductQuntity=$ProQun;
    }

    public function getProductDetails()
    {
        return $this->ProductDetails;
    }
    public function setProductDetails($ProDetails)
    {
        $this->ProductDetails=$ProDetails;
    }

    public function getProductPrice()
    {
        return $this->ProductPrice;
    }
    public function setProductPrice($ProPrice)
    {
        $this->ProductPrice=$ProPrice;
    }

    public function getCompanyID()
    {
        return $this->CompanyID;
    }
    public function setCompanyID($ComID)
    {
        $this->CompanyID=$ComID;
    }

    public function getCategoryNo()
    {
        return $this->CategoryNo;
    }
    public function setCategoryNo($CatNo)
    {
        $this->CategoryNo=$CatNo;
    }

public function Add(){
  
  return parent::RUNDML("insert into Products (ProductName,ProductQuntity,ProductDetails,
                         ProductPrice,CompanyID,CategoryNo)
      values ('".$this->getProductName()."','".$this->getProductQuntity()."','".$this->getProductDetails()."','"
      .$this->getProductPrice()."','"
      .$this->getCompanyID()."','".$this->getCategoryNo()."')","Product has been added");

      }

  public function Update()
  {

  }
  public function Delete(){
    return parent::RUNDML(" delete from Products  where (ProductNo='".$this->getProductNo()."')","Done");

  }
  public function Search()
  {

  }

  public function SearchByID($prono){
    return parent::RUNSearch("select * from productview where ProductNo='".$prono."'");

}
  public function GetData()
  {
      $Pro=parent::RunSearch("Select * From Products");
    return $Pro;

  }

  public function GetDataByNo()
  {
      $Pro=parent::RunSearch("Select * From Products where ProductNo='".$this->getProductNo()."'");
    return $Pro;

  }

  public function GetViewData()
  {
      $Pro=parent::RunSearch("Select * From productview order by ProductNo desc ");
    return $Pro;

  }

  public function GetViewDataByCompanyID()
  {
      $Pro=parent::RunSearch("Select * From productview where CompanyID='".$this->getCompanyID()."'");
    return $Pro;

  }

  public function GetAllViewData()
  {
      $Pro=parent::RunSearch("Select * From productview where Quntity >0");
    return $Pro;

  }
  public function GetCatPro($Cat)
  {
      $Pro=parent::RunSearch("Select * From productview where CategoryNo='".$Cat."'");
    return $Pro;

  }

  public function GetProByCat($P)
  {
      $Pro=parent::RunSearch("Select * From productview where ProductNo='".$P."' limit 1");
    return $Pro;

  }

  public function GetSpecificData($max,$min)
  {
      $Pro=parent::RunSearch("Select * From productview where ProductPrice  between ".$max." and ".$min."");
    return $Pro;

  }

  public function GetSpecificData1($max,$min)
  {
      $Pro=parent::RunSearch("Select * From productview where ProductPrice  between ".$max." and ".$min." order by ProductPrice desc ");
    return $Pro;

  }

  public function GetSpecificData2($max,$min)
  {
      $Pro=parent::RunSearch("Select * From productview where ProductPrice  between ".$max." and ".$min." order by ProductPrice asc ");
    return $Pro;

  }

  public function GetSpecificData3($max,$min)
  {
      $Pro=parent::RunSearch("Select * From productview where ProductPrice  between ".$max." and ".$min." order by ProductName desc ");
    return $Pro;

  }

  public function GetSpecificData4($max,$min)
  {
      $Pro=parent::RunSearch("Select * From productview where ProductPrice  between ".$max." and ".$min." order by ProductName asc ");
    return $Pro;

  }

  public function GetMaxNo()
  {
      $Pro=parent::RunSearch("Select max(productNo) From Products where CompanyID='".$this->getCompanyID()."'  ");
    return $Pro;

  }


  public function UpdateQuntity($m)
  {
        return parent::RUNDML("update Products set Quntity=Quntity-'".$m
        ."' where (ProductNo='".$this->getProductNo()."') ","Password has been updated");
  }

}

?>