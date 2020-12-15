<?php
  $name = $_POST['contact-name'];
  $visitor_email = $_POST['contact-email'];
  $message = $_POST['contact-project'];

  $email_from = $visitor_email;

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".

  $to = "satwikp360@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);
?>
