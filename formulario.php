<?php
// Obtener los datos enviados por el formulario
$pregunta1 = $_POST['pregunta1'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

// Procesar los datos (por ejemplo, guardar en una base de datos)
echo "Pregunta 1: " . $pregunta1 . "<br>";
echo "Fecha: " . $fecha . "<br>";
echo "Hora: " . $hora;
?>