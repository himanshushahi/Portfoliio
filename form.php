<?php
if (isset($_POST['submit'])) {
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $message = $_POST['massage'];

  $to = "himanshushahi0478@gmail.com";
  $subject = "Form Submission";

  $htmlContent = '<p> <b>Client Name:</b> ' . $name . '</p>
   <p> <b>Email:</b> ' . $email . '</p>
   <p> <b>Massage</b> ' . $message . '</p>';

  $headers = "From:" . $name . "<" . $email . ">";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  $result = mail($to, $subject, $htmlContent, $headers);

  if ($result) {
    $success = "The message was sent successfully!";
  } else {
    $failed = "Error: Message was not sent, Try again Later";
  }
}
?>