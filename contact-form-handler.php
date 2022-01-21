<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'okmljiz@gmail.com';
	$email_subject = "new form submission";
	$email_body = "User Name: $name .\n".
					"User Email: $visitor_email.\n".
					"User Message: $message.\n";
	$to = "okmljiz@gmail.com";
	$headers = "From : $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	
	
	header("Location: Contacts.html");

	if(mail($to, $email_subject, $email_body, $headers)){
		echo "Mail sent";
	}else{
		echo "failed";
	}
?>