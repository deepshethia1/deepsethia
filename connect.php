<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$msg = $_POST['msg'];
    
    $to = "bhnsl.deep@gmail.com";
    $subject = "Mail From Deep Photo Studio";

    $text = "Name = ". $name . "\r\n Email =". $email . "\r\n Mobile No. =". $number ."\r\n Message =". $msg;

    $header = "From: noreply@deepsethia.com";

    if($email!=NULL){
        mail($to, $subject, $text, $header);
    }

header("Location:thank.html");
?>