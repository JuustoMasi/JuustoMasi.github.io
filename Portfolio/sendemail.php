<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set the recipient email address (your email)
  $to = "salopuron@gmail.com";

  // Set the email subject
  $subject = "New message from your website: $name";

  // Set the email message
  $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";

  // Send the email using the PHP mail() function
  mail($to, $subject, $body);

  // Redirect the user to a thank-you page
  header("Location: thank-you.html");
  exit;
}
?>
