<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Si usaste Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $mensaje = htmlspecialchars($_POST["asunto"]);

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Servidor SMTP (ejemplo: Gmail)
        $mail->SMTPAuth = true;
        $mail->Username = 'wildercarevelasquez@gmail.com'; // Tu correo
        $mail->Password = 'aztw zyck efxc hpin'; // ⚠️ Usa una contraseña segura o una App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configuración del correo
        $mail->setFrom($email, $nombre);
        $mail->addAddress('wilder.dev.velasquez@gmail.com'); // Correo del receptor
        $mail->Subject = "!! ".$nombre." HA VISTO TU PORTFOLIO!!";
        $mail->Body = "Has recibido un mensaje de $nombre ($email):\n\n$mensaje";

        // Enviar correo
        $mail->send();
        echo "Mensaje enviado con éxito";
    } catch (Exception $e) {
        echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
    }
} else {
    echo "Acceso no permitido.";
}
?>
