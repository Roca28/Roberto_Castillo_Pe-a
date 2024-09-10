<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
$habitaciones_disponibles = $_POST['habitaciones_disponibles'];
$tarifa_noche = $_POST['tarifa_noche'];

// Validaciones básicas en el servidor
if (empty($nombre) || empty($ubicacion) || empty($habitaciones_disponibles) || empty($tarifa_noche)) {
    die("Todos los campos son obligatorios.");
}

if (!is_numeric($habitaciones_disponibles) || !is_numeric($tarifa_noche)) {
    die("Habitaciones disponibles y tarifa por noche deben ser números.");
}

$sql = "INSERT INTO HOTEL (nombre, ubicacion, habitaciones_disponibles, tarifa_noche) VALUES ('$nombre', '$ubicacion', '$habitaciones_disponibles', '$tarifa_noche')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo hotel agregado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
    