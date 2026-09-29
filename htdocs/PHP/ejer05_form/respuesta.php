<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Respuesta del Formulario</title>
</head>
<body>
    <h1>Datos recibidos en el servidor</h1>

    <?php
    // Detectar qué método se utilizó
    $metodo = $_SERVER['REQUEST_METHOD'];

    echo "<h2>Método utilizado: $metodo</h2>";

    if ($metodo === 'POST') {
        // Capturar datos desde $_POST
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'No definido';
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : 'No definido';
        
        echo "<p>Datos capturados desde <strong>\$_POST</strong>:</p>";
    } elseif ($metodo === 'GET') {
        // Capturar datos desde $_GET
        $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'No definido';
        $apellido = isset($_GET['apellido']) ? $_GET['apellido'] : 'No definido';
        
        echo "<p>Datos capturados desde <strong>\$_GET</strong>:</p>";
    } else {
        $nombre = "Desconocido";
        $apellido = "Desconocido";
    }

    echo "<ul>";
    echo "<li><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</li>";
    echo "<li><strong>Apellido:</strong> " . htmlspecialchars($apellido) . "</li>";
    echo "</ul>";
    ?>

    <br>
    <a href="index.html">
        <button>Volver al formulario</button>
    </a>
</body>
</html>
