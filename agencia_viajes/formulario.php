<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario de Viaje</title>
</head>
<body>
    <header>
        <h1>Registro de Viaje</h1>
    </header>
    <div class="form-container">
        <form action="procesar_formulario.php" method="post">
            <label for="nombreHotel">Nombre del Hotel:</label>
            <input type="text" id="nombreHotel" name="nombreHotel" required>

            <label for="ciudad">Ciudad:</label>
            <input type="text" id="ciudad" name="ciudad" required>

            <label for="pais">País:</label>
            <input type="text" id="pais" name="pais" required>

            <label for="fechaViaje">Fecha de Viaje:</label>
            <input type="date" id="fechaViaje" name="fechaViaje" required>

            <label for="duracionViaje">Duración del Viaje (días):</label>
            <input type="number" id="duracionViaje" name="duracionViaje" required>

            <input type="submit" value="Registrar Viaje">
        </form>
    </div>
    <footer>
        <p>© 2024 Agencia de Viajes. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
