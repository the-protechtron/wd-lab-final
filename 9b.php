<?php
// Define the recipient email, subject, and message body
$to = "recipient@example.com";
$subject = "Test Email from PHP";
$message = "Hello! This is a simple test email sent from a PHP script.";
$headers = "From: sender@example.com";

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Email successfully sent to $to";
} else {
    echo "Failed to send email.";
}
?>
