<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'sacha.fargeaudou@gmail.com';  
$email_subject = "Website Contact Form:  $name";
$email_body = "Nouveau message provenant du site.\n\n"."Voici le contenus:\n\nNom: $name\n\nEmail: $email_address\n\nTel: $phone\n\nMessage:\n$message";
$headers = "From: noreply@lork.com\n"; 
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>