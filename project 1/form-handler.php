<?php
$name = $_POST['name'];
$visitors_email = $_POST['message'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = '77loveraj@gmail.com';

$email_subject = 'new form submission';

$email_body = "User Name: $name.\n".
"User Email: $visitors_email.\n".
"Subject: $subject.\n".
"User Message: $message.\n";

$to = '77loveraj63@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "Reply-To: $visitors_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

?>