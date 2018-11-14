<?php
//Load Composer's autoloader
require 'vendor/autoload.php';
require 'vendor/library/validation.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$class = new Sender();

class Sender
{
	public function sendMail($fields)
	{
		$validation = new Validation();

		$result = $validation->make($fields);

		if ($result['errors'] == false) {
			$mail = new PHPMailer(true);
				
			try {
				$mail->SMTPDebug = 2; 
				//$mail->isSMTP();
				//Sender account settings
				/*$mail->Host = 'smtp.gmail.com';
				$mail->SMTPAuth = true;
				$mail->Username = 'edgar.yerena@metodika.mx';
				$mail->Password = 'ma*AC6th';
				$mail->SMTPSecure = 'ssl';
				$mail->Port = 587;*/

				$mail->setFrom('from@example.com', 'Mailer');
				$mail->addAddress('edyerena086@gmail.com', 'Edgar Yerena');

				$mail->isHTML(true);
				$mail->Subject = 'Here is the subject';
				$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				$mail->send();

				echo json_encode(['errors' => false]);
			} catch (Exception $e) {
				 //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
				 echo json_encode(['errors' => true, 'message' => $mail->ErrorInfo]);
			}
		} else {
			echo json_encode($result);
		}
	}
}