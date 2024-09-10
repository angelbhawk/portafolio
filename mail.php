<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    # Dirección de correo del destinatario
    $mail_to = "mgamj13@gmail.com";

    # Datos del remitente
    $subject = trim($_POST["subject"]);
    $name = str_replace(array("\r", "\n"), array(" ", " "), strip_tags(trim($_POST["name"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);

    # Validación de los datos
    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($phone) || empty($subject) || empty($message)) {
        # Redirigir al inicio con un mensaje de error
        header("Location: /index.php?status=error");
        exit;
    }

    # Contenido del correo
    $content = "Nombre: $name\n";
    $content .= "Correo: $email\n";
    $content .= "Teléfono: $phone\n";
    $content .= "Mensaje:\n$message\n";

    # Encabezados del correo
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email";

    # Enviar el correo
    if (mail($mail_to, $subject, $content, $headers)) {
        # Redirigir al inicio con un mensaje de éxito
        header("Location: /angelbhawk/index.php?status=success");
        exit;
    } else {
        # Redirigir al inicio con un mensaje de error
        header("Location: /angelbhawk/index.php?status=error");
        exit;
    }
}
