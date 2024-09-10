<?php
include 'conexion.php';

$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha = $_POST['fecha'];
$plazas_disponibles = $_POST['plazas_disponibles'];
$precio = $_POST['precio'];

// Validaciones básicas en el servidor
if (empty($origen) || empty($destino) || empty($fecha) || empty($plazas_disponibles) || empty($precio)) {
    die("Todos los campos son obligatorios.");
}

if (!is_numeric($plazas_disponibles) || !is_numeric($precio)) {
    die("Plazas disponibles y precio deben ser números.");
}

$sql = "INSERT INTO VUELO (origen, destino, fecha, plazas_disponibles, precio) VALUES ('$origen', '$destino', '$fecha', '$plazas_disponibles', '$precio')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo vuelo agregado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
