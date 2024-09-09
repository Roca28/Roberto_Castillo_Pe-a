<?php
include 'conexion.php';

// Consulta avanzada para calcular el número de reservas por hotel
$sql_avanzada = "SELECT h.nombre, COUNT(r.id_reserva) AS num_reservas
                 FROM HOTEL h
                 JOIN RESERVA r ON h.id_hotel = r.id_hotel
                 GROUP BY h.id_hotel
                 HAVING COUNT(r.id_reserva) > 2";

$result_avanzada = $conn->query($sql_avanzada);

if ($result_avanzada->num_rows > 0) {
    echo "<h2>Hoteles con más de dos reservas</h2>";
    while ($row = $result_avanzada->fetch_assoc()) {
        echo "Nombre del Hotel: " . $row["nombre"] . " - Número de Reservas: " . $row["num_reservas"] . "<br>";
    }
} else {
    echo "No se encontraron hoteles con más de dos reservas.";
}

$conn->close();
?>
