<?php
$name = $_POST['name'];
$number = $_POST['number'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$mailheader = "From:".$name."<".$email.">\r\n";
$recipient = "adanbhatti47@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo"Message Send";
?>