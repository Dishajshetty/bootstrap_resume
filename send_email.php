<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "dishajshetty9801@gmail.com"; // Change this to your email address

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Assuming you're using Gmail SMTP
        $mail->SMTPAuth   = true;
        $mail->Username   = 'dishajshetty9988@gmail.com'; // Your Gmail email address
        $mail->Password   = 'qilvoogybgajykhz'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom($email, $name);
        $mail->addAddress($to);

        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
        echo 'success';
        exit;
    } catch (Exception $e) {
        echo 'error';
        exit; 
    }
}
?>
