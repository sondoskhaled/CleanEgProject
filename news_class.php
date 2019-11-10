<?php
include_once "Operations.php";
include_once "Database.php";
class news extends Database implements Operations
{
  var $news_Title , $news_Content , $news_Date;

  public function getnews_Title()
  {
      return $this->news_Title;
  }
  public function setnews_Title($ti)
  {
      $this->news_Title=$ti;
  }

  public function getnews_Content()
  {
      return $this->news_Content;
  }
  public function setnews_Content($co)
  {
      $this->news_Content=$co;
  }

  public function getnews_Date()
  {
      return $this->news_Date;
  }
  public function setnews_Date($da)
  {
      $this->news_Date=$da;
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
      return parent::RUNSearch("select * from news  ");

  }

  public function Searchnews()
  {
      return parent::RUNSearch("select * from news order by  news_Date desc  limit 3");

  }

 
  


}

?>