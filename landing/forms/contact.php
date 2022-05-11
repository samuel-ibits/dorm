<?php
include('Mail.php'); // includes the PEAR Mail class, already on your server.
$name = $_POST['name']; // form field
 $email = $_POST['email']; // form field
 $message = $_POST['message']; // form field
 $subject = $_POST['subject'];

$username = 'info@dorm.com.ng'; // your email address
$password = 'J[G-W7hxUGpr'; // your email address password

$from = "dormcomn@dorm.com.ng";
$to = "dormcomn@dorm.com.ng";
$subject = " Dorm Contact form - $subject";
$body= "Name: ".$name." <br> Email: ".$email." <br>Message:".$message." ";

$headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject); // the email headers
$smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' =>'25'));$mail = $smtp->send($to, $headers, $body); // sending the email

if (PEAR::isError($mail)){
echo("<p>" . $mail->getMessage() . "</p>");
}
else {
echo("<p>Message successfully sent!</p>");
// header("Location: http://www.example.com/"); // you can redirect page on successful submission.
}
?>