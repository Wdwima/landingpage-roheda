<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader (assuming you installed PHPMailer via Composer)
require 'vendor/autoload.php';

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'mail.rohedagroup.com';  // Set the SMTP server to send through
    $mail->SMTPAuth = true;                // Enable SMTP authentication
    $mail->Username = 'test@rohedagroup.com'; // SMTP username (full email address)
    $mail->Password = 'IT@rg2023';         // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable SSL encryption (use ENCRYPTION_STARTTLS for TLS)
    $mail->Port = 465;                     // TCP port to connect to

    // Recipients
    $mail->setFrom('test@rohedagroup.com', $name); // Use your email for sender
    $mail->addAddress('inquiry@rohedagroup.com');        // Add a recipient

    // Content
    $mail->isHTML(true);                   // Set email format to HTML
    $mail->Subject = 'New Message from Contact Form';
    $mail->Body    = '<b>Name:</b> ' . $name . '<br><b>Email:</b> ' . $email . '<br><b>Message:</b><br>' . nl2br($message);
    $mail->AltBody = 'Name: ' . $name . '\nEmail: ' . $email . '\nMessage: ' . $message;

    // Send email
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
