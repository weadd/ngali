<?php 

	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$subject = $_POST['subject'];
	$formContent = "From : $name \n Message: $message";
	$recipient = "odeloic@gmail.com";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formContent, $mailheader) or die("Error sending Message");
	echo "Thank You!";

?>