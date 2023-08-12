<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "alonsovaldez@powerlineelectricals.com"; // Cambia esto por tu dirección de correo electrónico
    $subject = "New message sent from your site";
    $message = "Name: " . $_POST["name"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n";
    $message .= "Message: " . $_POST["message"];

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtpout.secureserver.net'; // Cambia esto por el servidor SMTP de tu proveedor de correo
    $mail->SMTPAuth = true;
    $mail->Username = 'alonsovaldez@powerlineelectricals.com'; // Cambia esto por tu nombre de usuario SMTP
    $mail->Password = '3104729293'; // Cambia esto por tu contraseña SMTP
    $mail->SMTPSecure = 'tls'; // Usar 'ssl' si el servidor SMTP lo requiere
    $mail->Port = 587; // Puerto SMTP seguro (tls) o 465 (ssl)

    $mail->setFrom('pedrito@gmail.com ', 'pedro');
    $mail->addAddress($to);
    $mail->isHTML(false);

    $mail->Subject = $subject;
    $mail->Body = $message;

    if ($mail->send()) {
        echo"<script>alert('Your email has been sent.')</script>";
        echo"<script> setTimeout(\"location.href='./index.php'\",120)</script>";
 
    } else {
        echo "Hubo un problema al enviar el formulario: " . $mail->ErrorInfo;
    }
}
?>

