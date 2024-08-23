<?php
$to = 'recipient@example.com';
$subject = 'Test Email';
$message = 'This is a test email sent from PHP.';
$headers = 'From: sender@example.com' . "\r\n" .
           'Reply-To: sender@example.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();
if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully.';
} else {
    echo 'Failed to send email.';
}
?>


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'username@example.com';
    $mail->Password = 'password';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    // Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('recipient@example.com', 'Joe User');
    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>


<?php
require_once 'vendor/autoload.php';
// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.example.com', 587, 'tls'))
  ->setUsername('username@example.com')
  ->setPassword('password');
// Create the Mailer using the created Transport
$mailer = new Swift_Mailer($transport);
// Create a message
$message = (new Swift_Message('Test Subject'))
  ->setFrom(['from@example.com' => 'Sender Name'])
  ->setTo(['recipient@example.com' => 'Recipient Name'])
  ->setBody('This is the body of the email');
// Send the message
$result = $mailer->send($message);
if ($result) {
    echo 'Email sent successfully.';
} else {
    echo 'Failed to send email.';
}
?>
