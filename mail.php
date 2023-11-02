<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = 2;									
	$mail->isSMTP();										
	$mail->Host	 = 'smtp.gfg.com;';				
	$mail->SMTPAuth = true;							
	$mail->Username = 'theapakalex@gmail.com';				
	$mail->Password = 'fcne qyab birx puhs';					
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;

	$mail->setFrom('theapakalex@gmail.com', 'alex');		
	$mail->addAddress('theapakalex@gmail.com');
	$mail->addAddress('theapakalex@gmail.com', 'raj');
	
	$mail->isHTML(true);								
	$mail->Subject = 'Subject';
	$mail->Body = 'HTML message body in <b>bold</b> ';
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	echo "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
