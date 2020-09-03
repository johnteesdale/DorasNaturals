<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $company = $_POST['company'];
  $phone = $_POST['phone'];

  $email_from = "test@test.com";

  $email_subject = "Contact Form Submission";

  $email_body = "Name: $name.\n"
                "Email: $email.\n"
                "Company: $compnay.\n"
                "Phone: $phone.\n";

  $to = "jht171297@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: test");


?>
