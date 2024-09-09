<?php
include 'conexion.php';

// Datos de reservas de ejemplo
$reservas = [
    ['id_cliente' => 1, 'fecha_reserva' => '2024-07-14', 'id_vuelo' => 4, 'id_hotel' => 4],
    ['id_cliente' => 2, 'fecha_reserva' => '2024-08-07', 'id_vuelo' => 5, 'id_hotel' => 5],
    ['id_cliente' => 3, 'fecha_reserva' => '2024-08-25', 'id_vuelo' => 6, 'id_hotel' => 6],
    ['id_cliente' => 4, 'fecha_reserva' => '2025-01-30', 'id_vuelo' => 7, 'id_hotel' => 7],
    ['id_cliente' => 5, 'fecha_reserva' => '2025-10-04', 'id_vuelo' => 8, 'id_hotel' => 8],
    ['id_cliente' => 6, 'fecha_reserva' => '2024-10-10', 'id_vuelo' => 9, 'id_hotel' => 9],
    ['id_cliente' => 7, 'fecha_reserva' => '2024-07-10', 'id_vuelo' => 10, 'id_hotel' => 10],
    ['id_cliente' => 8, 'fecha_reserva' => '2024-12-06', 'id_vuelo' => 11, 'id_hotel' => 11],
    ['id_cliente' => 9, 'fecha_reserva' => '2024-09-05', 'id_vuelo' => 12, 'id_hotel' => 12],
    ['id_cliente' => 10, 'fecha_reserva' => '2024-10-10', 'id_vuelo' => 13, 'id_hotel' => 13]
];

foreach ($reservas as $reserva) {
    $sql = "INSERT INTO RESERVA (id_cliente, fecha_reserva, id_vuelo, id_hotel) VALUES 
            ('{$reserva['id_cliente']}', '{$reserva['fecha_reserva']}', '{$reserva['id_vuelo']}', '{$reserva['id_hotel']}')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Nueva reserva agregada exitosamente.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
    }
}

$conn->close();
?>
