<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $company = $_POST['company'];
  $phone = $_POST['phone'];
  $interesthpp = $_POST['hpp']
  $interesthpp = $_POST['coldPressed']
  $interestdirectToConsumer = $_POST['directToConsumer']
  $message = $_POST['message']

  if (isset($_POST['hpp'])) {
  $interesthpp = "yes";
  } else {
    $interesthpp = "";
  }

  if (isset($_POST['coldPressed'])) {
  $interestcoldPressed = "yes";
  } else {
  $interestcoldPressed = "";
  }

  if (isset($_POST['directToConsumer'])) {
  $interestdirectToConsumer = "yes";
  } else {
  $interestdirectToConsumer = "";
  }

  $email_from = "contactForm@dorasnaturals.com";

  $email_subject = "Contact Form Submission";

  $email_body = "Name: $name.\n"
                "Email: $email.\n"
                "Company: $compnay.\n"
                "Phone: $phone.\n";
                "Interst: $interesthpp $interesthpp $interestdirectToConsumer.\n"
                "Message: $message./n"


  $to = "info@dorasnaturals.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Contact Form");


?>
