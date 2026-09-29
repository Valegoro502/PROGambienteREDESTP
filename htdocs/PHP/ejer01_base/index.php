<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 01 - PHP Básico</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Ejercicio 01: PHP Básico</h1>
    
    <!-- Texto HTML fuera de marcas PHP -->
    <p>Este es un texto HTML escrito directamente fuera de las etiquetas PHP. El servidor lo enviará sin modificar.</p>
    
    <?php
    // Texto HTML desde PHP
    echo '<p>Este texto está impreso desde PHP usando comillas simples.</p>';
    echo "<p>Este texto está impreso desde PHP usando comillas dobles.</p>";
    echo "<hr />";
    
    // Variables, tipos de datos y tipado dinámico
    $nombre = "Juan";
    echo "<p class='texto-color'>Variable \$nombre: $nombre (tipo: " . gettype($nombre) . ")</p>";
    
    $b = 2;
    $c = 3;
    $d = $b + $c;
    echo "<p>Suma de enteros: $b + $c = $d (tipo: " . gettype($d) . ")</p>";
    
    $esValido = true;
    $esFalso = false;
    echo "<p>Variable lógica verdadera (true): " . $esValido . " (se imprime como un 1)</p>";
    echo "<p>Variable lógica falsa (false): " . $esFalso . " (se muestra vacío)</p>";
    
    // Constantes
    define("MI_CONSTANTE", "Valor de la constante");
    echo "<p>Constante MI_CONSTANTE: " . MI_CONSTANTE . "</p>";
    
    // Arreglos indexados numéricamente
    $saludo = array("Español", "Inglés");
    array_push($saludo, "Italiano", "Francés");
    
    echo "<h3>Arreglo indexado:</h3>";
    echo "<ul>";
    for ($i = 0; $i < count($saludo); $i++) {
        echo "<li>Elemento $i: " . $saludo[$i] . "</li>";
    }
    echo "</ul>";
    
    // Arreglos bidimensionales
    $diccionario = array(
        array("Idioma" => "Español", "Saludo" => "Hola"),
        array("Idioma" => "Inglés", "Saludo" => "Hello"),
        array("Idioma" => "Italiano", "Saludo" => "Ciao"),
        array("Idioma" => "Francés", "Saludo" => "Salut")
    );
    
    echo "<h3>Arreglo bidimensional (Diccionario):</h3>";
    echo "<table>";
    echo "<tr><th>Idioma</th><th>Saludo</th></tr>";
    foreach ($diccionario as $fila) {
        echo "<tr><td>" . $fila['Idioma'] . "</td><td>" . $fila['Saludo'] . "</td></tr>";
    }
    echo "</table>";
    
    // Arreglos asociativos
    $miAsociativo = array("nombre" => "Ana", "edad" => 25, "ciudad" => "Madrid");
    echo "<h3>Arreglo asociativo:</h3>";
    echo "<p>Cantidad de elementos: " . count($miAsociativo) . "</p>";
    echo "<p>Tipo de dato: " . gettype($miAsociativo) . "</p>";
    foreach ($miAsociativo as $clave => $valor) {
        echo "<p>$clave: $valor</p>";
    }
    
    // Expresiones aritméticas
    $x = 3;
    $y = 4;
    $suma = $x + $y;
    $producto = $x * $y;
    $cociente = $x / $y;
    echo "<h3>Expresiones aritméticas (\$x = 3, \$y = 4):</h3>";
    echo "<p>Suma: $suma (tipo: " . gettype($suma) . ")</p>";
    echo "<p>Producto: $producto (tipo: " . gettype($producto) . ")</p>";
    echo "<p>Cociente: $cociente (tipo: " . gettype($cociente) . ")</p>";
    
    // Ámbito de variables y $GLOBALS
    $GLOBALS['n1'] = 10;
    $GLOBALS['n2'] = 20;
    
    function sumarGlobales() {
        return $GLOBALS['n1'] + $GLOBALS['n2'];
    }
    
    echo "<h3>Ámbito de variables y \$GLOBALS:</h3>";
    echo "<p>Suma de globales (\$n1 + \$n2): " . sumarGlobales() . "</p>";
    
    function testAmbito() {
        $variableLocal = "Soy local";
        echo "<p>Dentro de la función: $variableLocal</p>";
    }
    testAmbito();
    
    echo "<p>Fuera de la función (intentando acceder a \$variableLocal): ";
    // Suprimimos el warning solo para que no ensucie la salida de forma fea, o lo dejamos para demostrar.
    // El ejercicio dice "Demostrar que las variables declaradas... poseen ámbito local".
    // Lo dejamos que genere el warning (lo normal) pero con un texto explicativo.
    echo @$variableLocal; 
    echo "(No se imprime nada y arrojaría un warning si no estuviese suprimido o manejado)</p>";
    
    ?>
</body>
</html>
