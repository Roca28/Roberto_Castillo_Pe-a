<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Agencia de Viajes</title>
</head>
<body>
    <header>
        <h1>Agencia de Viajes</h1>
        <nav>
            <a href="productos.php">Paquetes Turísticos</a>
            <a href="carrito.php">Carrito de Compra</a>
        </nav>
    </header>
    <div class="search-container">
        <input type="text" id="destination" placeholder="Destino">
        <input type="date" id="travel-date">
        <button id="search-button">Buscar</button>
    </div>
    <div id="results-container">
        <!-- Los resultados de la búsqueda se mostrarán aquí -->
    </div>
    <div id="notifications-container">
        <!-- Las notificaciones se mostrarán aquí -->
    </div>
    <div class="register-button-container">
        <button class="register-button" onclick="window.location.href='formulario.php'">Registrar Viaje</button>
    </div>
    <footer>
        <p>© 2024 Agencia de Viajes. Todos los derechos reservados.</p>
    </footer>
    <script src="script.js"></script>
    <?php include 'ofertas.php'; generarNotificaciones(); ?>
</body>
</html>









