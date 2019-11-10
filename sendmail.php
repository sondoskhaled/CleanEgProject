<?php
 
require_once "src/PHPMailer.php";
require_once "src/Exception.php";
require_once "src/SMTP.php";
require_once "vendor/autoload.php";
include_once "connection.php";


class forgetpassword
{


	public function resetpass($user, $conn){

		
		$sql = "SELECT * FROM `users` WHERE `username`=?";
		$stmt = $conn->prepare($sql);
		if(is_object( $stmt )){
			$stmt->bindParam(1, $user['txtuser'], PDO::PARAM_STR);
			$stmt->execute();
           
			if( $row = $stmt->fetch(PDO::FETCH_OBJ) ){

				 $status = $this->sending($row);
			}
				 	if($status=="Message has been sent successfully")
	     {
			 	echo("<script> alert('Password has been sent to Your Mail successfully') </script> ");	
		    echo "<script> location.href='index.php'; </script>"; 
		}
		else {
				echo("<script> alert('Invaild username') </script> ");	
		    echo "<script> location.href='index.php'; </script>"; 
		}
			
			
			
		}

	}
	
	
	public function sending($d)
	{
		     //PHPMailer Object
             $mail = new  PHPMailer\PHPMailer\PHPMailer();

            //From email address and name
            $mail->From = "maha@nti.com";
            $mail->FromName = "Maha Gamal";

            //To address and name
            $mail->addAddress($d->email, $d->username);
           // $mail->addAddress("recepient1@example.com"); //Recipient name is optional

        



            //Send HTML or Plain Text email
             $mail->isHTML(true);
             $pass="555";
             $mail->Subject = "Recovery Password";
             $mail->Body = "Dear "." ".$d->username."...."."<br>"."      Your password is "." ".$d->password;
              //$mail->Body = "<i>Your password is</i>";
            // $mail->AltBody = "555";

           if(!$mail->send()) 
               {  
                   return "Mailer Error: " . $mail->ErrorInfo;
                 } 
               else 
                  {
                      return "Message has been sent successfully";
				  }
		
	}
	
	
public function verifysending()
{
	
	$obj=new connection;
    $conn=$obj->getcon();
	$result = $this->resetpass($_POST, $conn);

		
}	
	
	
	
}

$forgetpassword=new forgetpassword;
$forgetpassword->verifysending();
