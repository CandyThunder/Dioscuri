<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer classes (adjust if your folder name is different)
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Load secure config
require '/home/u779624267/domains/dioscuri.design/config.php';  // This is outside public_html – secure!

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name    = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email   = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    // Validate inputs
    if (empty($name) || empty($email) || empty($message)) {
        http_response_code(400);
        echo "<div style='background-color: #f44336; color: white; padding: 15px; text-align: center; font-family: Arial, sans-serif;'>Bitte füllen Sie alle erforderlichen Felder aus.</div>";
        echo "<div style='text-align: center; margin-top: 20px;'><a href='https://dioscuri.design' style='padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; font-family: Arial, sans-serif; border-radius: 5px;'>Zurück zur Website</a></div>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "<div style='background-color: #f44336; color: white; padding: 15px; text-align: center; font-family: Arial, sans-serif;'>Ungültiges E-Mail-Format.</div>";
        echo "<div style='text-align: center; margin-top: 20px;'><a href='https://dioscuri.design' style='padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; font-family: Arial, sans-serif; border-radius: 5px;'>Zurück zur Website</a></div>";
        exit;
    }

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings for Hostinger
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $smtp_username;
        $mail->Password   = $smtp_password;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom($smtp_username, 'Dioscuri Design Website');
        $mail->addAddress($smtp_username);         // You receive the mail
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(false);
        $mail->Subject = "Kontaktformular: Neue Nachricht von $name";
        $mail->Body    = "Name: $name\nE-Mail: $email\n\nNachricht:\n$message";

        // Send
        $mail->send();

        // Success message
        echo "<!DOCTYPE html>
<html lang='de'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='refresh' content='3;url=https://dioscuri.design'>
    <title>E-Mail gesendet</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background-color: #f0f0f0; }
        .success { background-color: #4CAF50; color: white; padding: 20px 40px; text-align: center; border-radius: 8px; font-size: 18px; }
    </style>
</head>
<body>
    <div class='success'>E-Mail erfolgreich gesendet!<br>Sie werden in 3 Sekunden zur Website weitergeleitet.</div>
</body>
</html>";
        exit;

    } catch (Exception $e) {
        http_response_code(500);
        echo "<!DOCTYPE html>
<html lang='de'>
<head>
    <meta charset='UTF-8'>
    <title>Fehler beim Senden</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; margin: 0; background-color: #f0f0f0; }
        .error { background-color: #f44336; color: white; padding: 20px 40px; text-align: center; border-radius: 8px; margin-bottom: 20px; font-size: 18px; }
        .button { padding: 12px 24px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px; font-size: 16px; }
    </style>
</head>
<body>
    <div class='error'>E-Mail konnte nicht gesendet werden.<br>Fehler: {$mail->ErrorInfo}</div>
    <a href='https://dioscuri.design' class='button'>Zurück zur Website</a>
</body>
</html>";
        exit;
    }

} else {
    http_response_code(405);
    echo "<div style='background-color: #f44336; color: white; padding: 15px; text-align: center; font-family: Arial, sans-serif;'>Methode nicht erlaubt.</div>";
    echo "<div style='text-align: center; margin-top: 20px;'><a href='https://dioscuri.design' style='padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; font-family: Arial, sans-serif; border-radius: 5px;'>Zurück zur Website</a></div>";
    exit;
}