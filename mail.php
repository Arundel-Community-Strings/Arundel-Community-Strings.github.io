<?php 

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$subject = "Contact Form";
	$verify = $_POST['g-recaptcha-response'];
	$recipient_email    =  'contact@arundelstrings.org'; //recipient email addrress
	

	if ($verify == true)
	{
		$mailheader = "From: ".$name." <".$email.">";
		if (! mail($email, $subject, $message, $mailheader)) {
		   header('Location: contact.php?mail');
		}
		header('Location: confirmation.php'); 
	} else {
		header('Location: contact.php?verify'); 
    }
?>