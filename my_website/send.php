<?php

$name = $_POST['req_name'];
$email = $_POST['req_email'];

$to = 'xauz151@gmail.com';
$subject ='Request sent from XAOC production';
$message = "Request was send by $name his email: $email";
$headers = "From: $name <$email>" . "\r\n";

if (mail($to,$subject,$message,$headers)) {
	echo 'SUCCESS';
} else {
	echo 'ERROR!';
}

?>