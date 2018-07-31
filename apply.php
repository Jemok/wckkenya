<?php
//header('Content-type: application/json');
//$status = array(
//    'type'=>'success',
//    'message'=>'Thank you for contact us. As early as possible  we will contact you '
//);

$name       = @trim(stripslashes($_POST['name']));
$email      = @trim(stripslashes($_POST['email']));
$subject    = @trim(stripslashes($_POST['subject']));
$message    = @trim(stripslashes($_POST['message']));
$phone    = @trim(stripslashes($_POST['phone']));
$id_number    = @trim(stripslashes($_POST['id_number']));
$d_o_birth    = @trim(stripslashes($_POST['d_o_birth']));
$course    = @trim(stripslashes($_POST['course']));




$email_from = $email;
$email_to = 'info@wildlifeclubsofkenya.org';//replace with your email

$body = 'Course: ' . $course . 'Name: ' . "\n\n" . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message. "\n\n" . 'Phone: ' . $phone ."\n\n" . 'ID Number: ' . $id_number. "\n\n" . 'D.O.B: ' . $d_o_birth;

$success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

// echo json_encode($status);

header("Location: http://34.226.140.47/success.html");

die;