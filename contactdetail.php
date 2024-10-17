<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

if (isset($_POST["submit"])) {

    $mail = new PHPMailer();
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = "foxtrading.online";
    $mail->SMTPAuth = true;
    $mail->Username = "info@foxtrading.online";
    $mail->Password = "JN=5Gb?f!vuh";
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom("info@foxtrading.online", "RAMAKANT PRASAD MISHRA");
    $mail->addAddress("info@foxtrading.online", "RAMAKANT PRASAD MISHRA");
    $message = "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table rules='all' border='1' style='border-color: #666;' cellpadding='10'>
    <tr style='background: #eee;'><td colspan='2'><strong>FOX INTERNATIONAL</strong> </td></tr>
    <tr>
        <td><strong>Name:</strong></td>
        <td>" . htmlspecialchars($_POST['name']) . "</td>
    </tr>
    <tr>
        <td><strong>Email:</strong></td>
        <td>" . htmlspecialchars($_POST['email']) . "</td>
    </tr>
     <tr>
        <td><strong>Phone:</strong></td>
        <td>" . htmlspecialchars($_POST['phone']) . "</td>
    </tr>
     <tr>
        <td><strong>Address:</strong></td>
        <td>" . htmlspecialchars($_POST['address']) . "</td>
    </tr>
    
    <tr>
        <td><strong>Subject:</strong></td>
        <td>" . htmlspecialchars($_POST['subject']) . "</td>
    </tr>
    
     <tr>
        <td><strong>Message:</strong></td>
        <td>" . htmlspecialchars($_POST['message']) . "</td>
    </tr>
    
    
    
</table>
</body>
</html>";

    $mail->isHTML(true);
    $mail->Subject = "Contact Form Details";
    $mail->Body = $message;

    try {
        if ($mail->send()) {
            echo '<script type="text/javascript">alert("Email sent successfully");</script>';
            echo '<script type="text/javascript">window.location.href = "contact.php";</script>';
        } else {
            echo '<script type="text/javascript">alert("Failed to send email");</script>';
            echo '<script type="text/javascript">window.location.href = "contact.php";</script>';
        }
    } catch (Exception $e) {
        echo '<script type="text/javascript">alert("Failed to send email: ' . htmlspecialchars($e->getMessage()) . '");</script>';
        echo '<script type="text/javascript">window.location.href = "contact.php";</script>';
    }
} else {
    echo '<script type="text/javascript">alert("Form not submitted properly");</script>';
    echo '<script type="text/javascript">window.location.href = "contact.php";</script>';
}
