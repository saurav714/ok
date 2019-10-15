<?php	
	function sendOTP($email,$otp) {
			require ('C:/xampp/php/lib/enchant/my_phpmailer/class.phpmailer.php');
		$message_body = "One Time Password for PHP login authentication is:<br/><br/>" . $otp;
		$mail = new PHPMailer();
        $mail->AddReplyTo('hulo.lalpile@gmail.com','saurav');
		$mail->SetFrom('hulo.lalpile@gmail.com', 'saurav');
		$mail->AddAddress($email);
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		
		
		return $result;
	}
?>
