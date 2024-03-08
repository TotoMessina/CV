<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "lucastotomessina@gmail.com";
    $subject = "Nuevo mensaje del formulario de contacto";
    $body = "Nombre: $name\nEmail: $email\nMensaje:\n$message";

    if (mail($to, $subject, $body)) {
        echo "<p>¡Mensaje enviado correctamente!</p>";
    } else {
        echo "<p>¡Hubo un error al enviar el mensaje!</p>";
    }
}
?>
