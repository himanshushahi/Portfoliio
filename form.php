<?php
  $to = "himanshushahi0478@gmail.com";
  $subject = "Form Submission";

  $htmlContent = '<p> <b>Client Name:</b> Himanshu Kumar </p>
   <p> <b>Email:</b> himanshu105@gmail.com</p>
   <p> <b>Massage</b> test-mail</p>';

  $headers = "From:" . $name;
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  $result = mail($to, $subject, $htmlContent, $headers);

  if ($result) {
    echo "The message was sent successfully!";
  } else {
    echo "Error: Message was not sent, Try again Later";
  }
?>
