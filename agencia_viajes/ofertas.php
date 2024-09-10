<?php
function generarNotificaciones() {
    $notificaciones = [
        "Oferta: 20% de descuento en vuelos a París - Precio: $200000",
        "Oferta: 15% de descuento en hoteles en Nueva York - Precio: $150000 por noche",
        "Oferta: 10% de descuento en paquetes turísticos a Japón - Precio: $120000",
        "Oferta: 25% de descuento en alquiler de autos en Miami - Precio: $40000 por día",
        "Oferta: 30% de descuento en cruceros por el Caribe - Precio: $80000"
    ];

    echo "<script>";
    foreach ($notificaciones as $notificacion) {
        echo "alert('$notificacion');";
    }
    echo "</script>";
}
?>
