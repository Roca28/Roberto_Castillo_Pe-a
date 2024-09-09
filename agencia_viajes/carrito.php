<?php
session_start();
$paquetes = [
    1 => ['destino' => 'París', 'precio' => 255200],
    2 => ['destino' => 'Roma', 'precio' => 199000],
    3 => ['destino' => 'Nueva York', 'precio' => 551500]
];
$carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compra</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Carrito de Compra</h1>
    </header>
    <?php if (empty($carrito)): ?>
        <p>El carrito está vacío.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($carrito as $id => $cantidad): ?>
                <li>
                    <h2><?php echo $paquetes[$id]['destino']; ?></h2>
                    <p>Precio: $<?php echo number_format($paquetes[$id]['precio'], 2); ?></p>
                    <p>Cantidad: <?php echo $cantidad; ?></p>
                    <form action="eliminar_carrito.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <button type="submit">Eliminar del Carrito</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
        <form action="vaciar_carrito.php" method="post">
            <button type="submit">Vaciar Carrito</button>
        </form>
    <?php endif; ?>
    <a href="productos.php">Seguir Comprando</a>
    <footer>
        <p>© 2024 Agencia de Viajes. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
