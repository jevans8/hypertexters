<?php


//get the user input
var_dump($_POST);

$email = $_POST['emailSubscribe'];
//send email to user

$fromAddress = "dr.day@dayside.com"; //change this to aaron@daysidellc.com
$toAddress = "$email";
$subject = "Subscription Confirmation";
$headers = "From: Dayside LLC <$fromAddress>";
$message = "Thank you for signing up for the Dayside LLC mailing list! You will regularly receive fresh ideas 
and free advice on leadership, management, and organizational change. You will receive quick and practical 
information delivered right to your inbox. To get a free consultation, please visit: 
hypertexter.greenriverdev.com/Dayside/form.php. You can unsubscribe at any time by replying to this email with 
the subject header: \"Unsubscribe\"";
echo mail($toAddress, $subject, $message, $headers);

//send email to Aaron
$fromAddress = "subscribe@daysidellc.com";
$toAddress = "jevans8@mail.greenriver.edu"; //change this to aaron@daysidellc.com
$subject = "New Subscriber";
$headers = "From: Dayside LLC <$fromAddress>";
$message = "New subscriber: $email\r\n";

echo mail($toAddress, $subject, $message, $headers);


