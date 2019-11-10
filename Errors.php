<?php 

class Errors {

public function getErrorType($msg){
    if(strpos($msg,'PRIMARY'))     return "This user is exist";
    else if(strpos($msg,'Phone'))  return "This phone is exist";
    else if(strpos($msg,'Email'))  return "This email is exist";
    else if(strpos($msg,'License'))  return "This License is exist";
    else
     echo("<h4>".$msg."</h4>");
}

}


?>