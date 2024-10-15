<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $personas = $_POST["personas"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];

    // Aquí puedes hacer lo que quieras con los datos, por ejemplo, enviar un correo electrónico, guardarlos en una base de datos, etc.
    echo "Gracias por tu reserva, " . $nombre . "!<br>";
    echo "Detalles de la reserva:<br>";
    echo "Personas: " . $personas . "<br>";
    echo "Fecha: " . $fecha . "<br>";
    echo "Hora: " . $hora;
}
?>