<?php
$message_sent = false;
if (isset($_POST['email']) && $_POST['email'] != '') {

  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // if(empty($name) || empty($emailFrom) || empty($subject) || empty($message)) {
    //   echo ""
    // })

    $emailTo = "hello@robertbender.net";
    $body = "";

    $body .= "You have received an email from " . $name . ".\r\n";
    $body .= "Email: " . $emailFrom . ".\r\n";
    $body .= "Message: " . $message . ".\r\n";

    if (mail($emailTo, $subject, $body)) {

      $message_sent = true;
      header("Location: index.html");

    } else {

      echo 'Message Not Sent';
      header("Location: index.html");
      echo '<script language="javascript">';
      echo 'alert("Your message was not sent. Please try again later")';
      echo '</script>';

    }

  }
}
