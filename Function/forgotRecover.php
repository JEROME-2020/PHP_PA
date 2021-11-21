<?php 


	require '../PHPMailer-master/src/Exception.php';
    require '../PHPMailer-master/src/PHPMailer.php';
    require '../PHPMailer-master/src/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;



	include('../Database/DB_connection.php');


	if(isset($_POST['forgot'])){

		$mail = new PHPMailer(true); 

		$email = $_POST['email'];
		$subject = "verifyconnection code";

		$sql = "SELECT * FROM user WHERE email = '$email'";


		$result = mysqli_query($connect_db, $sql);
		
		$numrow = mysqli_num_rows($result);


		if($numrow  > 0){


			$random_numer = rand(1000, 2000);	

			
			$sql2 = "UPDATE user SET code = '$random_numer' WHERE email = '$email'";


			$result_code = mysqli_query($connect_db, $sql2);

			if(!$result_code){
				echo "You have an Error" . mysqli_error();
			}
			else{
				       try {

                		// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                		$mail->isSMTP();                                            //Send using SMTP
                		$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                		$mail->Username   = 'randygaspar654@gmail.com';                     //SMTP username
                		$mail->Password   = '@Lanuzovaldez2020';                               //SMTP password
                		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                		$mail->Port       = 465; 

                                //Recipients
		                $mail->setFrom('randygaspar654@gmail.com', 'Mailer');
		                $mail->addAddress($email);     //Add a recipient
		                $mail->Subject = $subject;
		                $mail->isHTML(true); 
		                //Attachment
		                $mail->Body    = "This is your code: " . $random_numer;
		                //Content
		                                                 //Set email format to HTML
		             
		                $mail->send();
		                header('location: http://localhost/PHP_PA/PHP_file/ResetPassword.php?Message=The essage is send');

		            } catch (Exception $e) {
		                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		            }
			}
		}
		else{
			echo "Error! The user is not exists";
		}

		

	}



