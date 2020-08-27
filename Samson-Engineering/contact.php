<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$visitor_number = $_POST['phone-number'];
	$message = $_POST['message'];
		
	$email_from= 'cairole.se@gmail.com';
	$email_subject = "New Form Submission";
	$email_body = "User Name: $name.\n".
		"User Email: $visitor_email.\n".
		"User Phone Number : $visitor_number.\n".
		"User Message: $message.\n";

	$to = "cairole@comcast.net";
	$headers = "from: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email, $visitor_number \r\n";
	mail($to,$email_subject,$email_body,$headers);

?>