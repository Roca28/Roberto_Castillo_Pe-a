<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreHotel = $_POST['nombreHotel'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $fechaViaje = $_POST['fechaViaje'];
    $duracionViaje = $_POST['duracionViaje'];

    echo "Intención de viaje registrada:";
    echo "<br>Nombre del Hotel: " . htmlspecialchars($nombreHotel);
    echo "<br>Ciudad: " . htmlspecialchars($ciudad);
    echo "<br>País: " . htmlspecialchars($pais);
    echo "<br>Fecha de Viaje: " . htmlspecialchars($fechaViaje);
    echo "<br>Duración del Viaje: " . htmlspecialchars($duracionViaje) . " días";
}
?>

    