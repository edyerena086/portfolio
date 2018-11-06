<?php
//Load Composer's autoloader
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Library\Validation;

$class = new Sender();

$class->sendMail();

class Sender
{
	public function sendMail()
	{
		$validation = new Validation();
	}
}