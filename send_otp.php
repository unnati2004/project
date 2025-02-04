<?php
session_start();
include('connect.php');
require 'vendor/autoload.php'; // Use Composer's autoloader

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Check if email exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Generate OTP
        $otp = rand(100000, 999999);
        $_SESSION['otp'] = $otp;
        $_SESSION['otp_email'] = $email;

        // Send OTP via email
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'your_email@gmail.com';
            $mail->Password = 'your_password';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('your_email@gmail.com', 'Your Site Name');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Password Reset OTP';
            $mail->Body = "Your OTP is <b>$otp</b>. It is valid for 10 minutes.";

            $mail->send();
            header("Location: verify_otp.php");
        } catch (Exception $e) {
            echo "Error: " . $mail->ErrorInfo;
        }
    } else {
        echo "<script>alert('Email not registered!'); window.location.href = 'forgot_password.php';</script>";
    }
}
?>
