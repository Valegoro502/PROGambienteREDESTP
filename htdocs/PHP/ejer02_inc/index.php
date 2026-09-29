<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 02 - Include</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        .warning-box { background-color: #ffcccc; padding: 10px; border: 1px solid red; margin-bottom: 20px; }
        .success-box { background-color: #ccffcc; padding: 10px; border: 1px solid green; margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>Ejercicio 02: Uso de Include</h1>
    
    <p><strong>Nota explicativa:</strong> La función <code>include</code> en PHP permite insertar el contenido de un archivo dentro de otro archivo PHP antes de que el servidor lo ejecute. Si el archivo no se encuentra, <code>include</code> emitirá una advertencia (Warning), pero el script continuará ejecutándose.</p>
    
    <h2>1. Demostración de advertencias (Warnings)</h2>
    <div class="warning-box">
        <p>Intentando imprimir variables antes de hacer el include:</p>
        <?php
        // Intento de impresión antes del include
        echo "<p>Nombre persona 1: " . $persona1['nombre'] . "</p>";
        ?>
        <p>Como se puede observar arriba, PHP arroja advertencias porque la variable no está definida, pero esta línea (y el resto del script) se sigue ejecutando normalmente.</p>
    </div>

    <h2>2. Inclusión y lectura</h2>
    <div class="success-box">
        <?php
        // Inclusión del archivo
        include 'asignaciones.php';
        
        echo "<p>El archivo <code>asignaciones.php</code> ha sido incluido con éxito.</p>";
        
        // Volver a imprimir los datos
        echo "<h3>Datos de la Persona 1:</h3>";
        echo "<ul>";
        echo "<li>Nombre: " . $persona1['nombre'] . "</li>";
        echo "<li>Apellido: " . $persona1['apellido'] . "</li>";
        echo "<li>Fecha de nacimiento: " . $persona1['fecha_nacimiento'] . "</li>";
        echo "</ul>";
        
        echo "<h3>Datos de la Persona 2:</h3>";
        echo "<ul>";
        echo "<li>Nombre: " . $persona2['nombre'] . "</li>";
        echo "<li>Apellido: " . $persona2['apellido'] . "</li>";
        echo "<li>Fecha de nacimiento: " . $persona2['fecha_nacimiento'] . "</li>";
        echo "</ul>";
        
        // Mostrar longitud
        echo "<p>Longitud del arreglo \$persona1: " . count($persona1) . " elementos.</p>";
        echo "<p>Longitud del arreglo \$persona2: " . count($persona2) . " elementos.</p>";
        ?>
    </div>
</body>
</html>
