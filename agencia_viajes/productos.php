<?php
session_start();
$paquetes = [
    1 => ['destino' => 'París', 'precio' => 255200],
    2 => ['destino' => 'Roma', 'precio' => 199000],
    3 => ['destino' => 'Nueva York', 'precio' => 551500]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paquetes Turísticos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Paquetes Turísticos</h1>
    </header>
    <ul>
        <?php foreach ($paquetes as $id => $paquete): ?>
            <li>
                <h2><?php echo $paquete['destino']; ?></h2>
                <p>Precio: $<?php echo number_format($paquete['precio'], 2); ?></p>
                <form action="agregar_carrito.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit">Agregar al Carrito</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <footer>
        <p>© 2024 Agencia de Viajes. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
