<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if (isset($_GET['email'])) {
    $email = urldecode($_GET['email']); // Retrieve and decode the email parameter
    $username = urldecode($_GET['username']); // Retrieve and decode the email parameter
    $otp = urldecode($_GET['otp']); // Retrieve and decode the email parameter

    // Create a new PHPMailer instance
    $mail = new PHPMailer();

    // Set the mailer to use SMTP
    $mail->isSMTP();

    // SMTP Host (e.g., Gmail's SMTP server)
    $mail->Host = 'smtp.gmail.com';

    // SMTP Port (e.g., 587 for TLS, 465 for SSL)
    $mail->Port = 587;

    // SMTP Username and Password
    $mail->SMTPAuth = true;
    $mail->Username = 'digilearn74@gmail.com';
    $mail->Password = 'zbvmyoimazikqkxq';

    // Set your email address and name
    $mail->setFrom('digilearn74@gmail.com', 'DigiLearn');

    // Recipient email address
    $mail->addAddress($email, $username);

    // Email subject
    $mail->Subject = 'OTP Authentication';

    // Email message body
    $mail->Body = 'This is a test email sent with PHPMailer';

    // Optional: HTML email
    $mail->isHTML(true);
    $mail->Body = '
    <!DOCTYPE html>
        <html>
        <head>
            <title>OTP Email</title>
        </head>
        <body>
            <h1>DigiLearn</h1>
            <p>Hello ' . $username . '</p>
            <p style="text-alignment: justify;">We are excited to assist you with your authentication process. As part of our security measures, we have generated a one-time password (OTP) for you to use. Your OTP code is:</p>
            <h1 style="padding: 5px; width: 30%; text-align: center; background-color: purple; color: white; border-radius: 8px;">' . $otp . '</h1>
            <p>If you did not request this OTP or have any concerns about your accounts security, please contact our support team immediately.</p>
            <p>Thank you for joining our platform. We are committed to ensuring the safety and security of your account.<p/>
            <p>Best regards,<br> DigiLearn</p>
            </body>
            </html>
    ';
        

    // Optional: Add attachments
    // $mail->addAttachment('path/to/file.pdf');

    // Send the email
    if ($mail->send()) {
        header("Location: ../verify.php?email=$email&username=$username");
    } else {
        echo 'Email could not be sent. Error: ' . $mail->ErrorInfo;
    }


} else {
    // Handle the case when the email parameter is not provided
    echo "Email parameter is missing.";
}



?>

