<?php
include 'conexion.php';

// Mostrar contenido de la tabla RESERVA
$sql_reservas = "SELECT * FROM RESERVA";
$result_reservas = $conn->query($sql_reservas);

if ($result_reservas->num_rows > 0) {
    echo "<h2>Reservas</h2>";
    while ($row = $result_reservas->fetch_assoc()) {
        echo "ID Reserva: " . $row["id_reserva"] . " - ID Cliente: " . $row["id_cliente"] . " - Fecha de Reserva: " . $row["fecha_reserva"] . " - ID Vuelo: " . $row["id_vuelo"] . " - ID Hotel: " . $row["id_hotel"] . "<br>";
    }
} else {
    echo "No hay reservas disponibles.";
}

$conn->close();
?>
