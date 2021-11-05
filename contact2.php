<?php

// echo"<pre>";

//     print_r($_POST);

// echo"</pre>";
    
    if(isset($_POST['btn-send'])) {
      // submit the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if(empty($email) || empty($name) || empty($phone) || empty($message)) {

    // DEV 
    // $url = "http://localhost:8000/index.php?error#contactForm";
    // header('location: http://localhost:8000/index.php?error#contactForm');

    // TEST
    // $url = "https://www.hesi-test.robertbender.net/index.php?error#contactForm";
    // header('location: https://www.hesi-test.robertbender.net/index.php?error#contactForm');

    // GENERAL
    // header("location: index.php?error");
    
    // echo '<script language="javascript">window.location.href ="'.$url.'"</script>';

    } else {
  
        $to = "robb.webdev@gmail.com"; // use your email here
        $body = "";

        $subject .="From: ".$name. "\r\n";
        // $subject.="Email: ".$email. "\r\n";
        // $subject.="Phone: ".$phone. "\r\n";
        // $body.="Message: ".$message. "\r\n";

        $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
        // $headers = "Phone: " . strip_tags($_POST['phone']) . "\r\n";
        $headers .= "CC: hesi.math.tutors@gmail.com\r\n";
        // $headers .= "MIME-Version: 1.0\r\n";
        // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        
        $body .="From: ".$name. "\r\n";
        $body .="Phone: ".$phone. "\r\n";
        $body .= "Message: ".$message. "\r\n";
    
          if(mail($to, $subject, $body, $headers)) {
            
            // DEV
            // header('location: http://localhost:8000/index.php?success');

            // TEST PROD
            // $url = 'https://www.hesi-test.robertbender.net/#page-top';
            // header('location: https://www.hesi-test.robertbender.net/index.php?success'); // muy bueno

            // GENERAL 
            header('Location: index.php?success');
        }
   }
}

?>