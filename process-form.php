<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["subject"];

  // Set the recipient email address
  $to = "dunnrhia@msu.edu";

  // Set the email subject
  $subject = "New contact form submission";

  // Set the email message
  $message = "Name: $name\nEmail: $email\nMessage: $message";

  // Set the email headers
  $headers = "From: $email";

  // Send the email
  mail($to, $subject, $message, $headers);

  // Redirect the user to a thank-you page
  header("Location: thank-you.html");
  exit();
}
?>
