<?php
include 'conexion.php';

// Mostrar contenido de la tabla VUELO
$sql_vuelos = "SELECT * FROM VUELO";
$result_vuelos = $conn->query($sql_vuelos);

if ($result_vuelos->num_rows > 0) {
    echo "<h2>Vuelos</h2>";
    while ($row = $result_vuelos->fetch_assoc()) {
        echo "ID Vuelo: " . $row["id_vuelo"] . " - Origen: " . $row["origen"] . " - Destino: " . $row["destino"] . " - Fecha: " . $row["fecha"] . " - Plazas Disponibles: " . $row["plazas_disponibles"] . " - Precio: " . $row["precio"] . "<br>";
    }
} else {
    echo "No hay vuelos disponibles.";
}

// Mostrar contenido de la tabla HOTEL
$sql_hoteles = "SELECT * FROM HOTEL";
$result_hoteles = $conn->query($sql_hoteles);

if ($result_hoteles->num_rows > 0) {
    echo "<h2>Hoteles</h2>";
    while ($row = $result_hoteles->fetch_assoc()) {
        echo "ID Hotel: " . $row["id_hotel"] . " - Nombre: " . $row["nombre"] . " - Ubicación: " . $row["ubicacion"] . " - Habitaciones Disponibles: " . $row["habitaciones_disponibles"] . " - Tarifa por Noche: " . $row["tarifa_noche"] . "<br>";
    }
} else {
    echo "No hay hoteles disponibles.";
}

// Cerrar la conexión al final del script
$conn->close();
?>
