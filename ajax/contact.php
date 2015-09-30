<?php

if( isset( $_POST['phone'] ) ){

	$email = "p.khokhlow@oiler.com.ua";
	$subject = "Перезвонить (Мобильная страница)";
	$message = $_POST['phone'];

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		//print_r($_POST);
	mail($email, $subject, $message, $headers );


}

?>