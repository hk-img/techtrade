<?php
// Manually include PHPMailer files
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        $subject = 'Contact Form Submission';
        $emailBody = "<h3>New Contact Form Submission</h3>
                      <p><strong>Full Name:</strong> $fullName</p>
                      <p><strong>Email:</strong> $email</p>
                      <p><strong>Mobile:</strong> $mobile</p>
                      <p><strong>City:</strong> $message</p>";

        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = '465';
        $mail->Username = 'udit.img@gmail.com'; // Your Gmail address
        $mail->Password = 'ncofrmkxvsrkmtyn';   // Your Gmail App Password

        // Email Headers
        $mail->setFrom('udit.img@gmail.com', 'Tech Trade');
        $mail->addAddress('udit.img@gmail.com');

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $emailBody;

        // Send Email
        if ($mail->send()) {
            echo json_encode(['success' => true, 'message' => 'Email has been sent']);
        } else {
            echo json_encode(['success' => false, 'message' => "Email could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
        }
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => "Email could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
    }
}
?>
