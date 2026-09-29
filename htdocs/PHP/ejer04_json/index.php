<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 04 - Objetos en PHP y JSON</title>
    <style>
        body { font-family: sans-serif; margin: 20px; line-height: 1.6; }
        table { border-collapse: collapse; width: 60%; margin-bottom: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #eee; }
        .json-output { background-color: #282c34; color: #61dafb; padding: 15px; border-radius: 5px; font-family: monospace; white-space: pre-wrap; }
    </style>
</head>
<body>
    <h1>Ejercicio 04: Objetos y JSON</h1>

    <h2>1. Objeto individual</h2>
    <?php
    // Instanciar objeto individual
    $renglon_de_pedido = new stdClass();
    $renglon_de_pedido->codigo_articulo = "A001";
    $renglon_de_pedido->descripcion = "Monitor 24 pulgadas";
    $renglon_de_pedido->precio_unitario = 150.50;
    $renglon_de_pedido->cantidad = 2;

    echo "<p><strong>Datos del renglón:</strong><br>";
    echo "Código: " . $renglon_de_pedido->codigo_articulo . "<br>";
    echo "Descripción: " . $renglon_de_pedido->descripcion . "<br>";
    echo "Precio Unitario: $" . $renglon_de_pedido->precio_unitario . "<br>";
    echo "Cantidad: " . $renglon_de_pedido->cantidad . "</p>";
    
    echo "<p>Tipo de dato de \$renglon_de_pedido: <strong>" . gettype($renglon_de_pedido) . "</strong></p>";
    ?>

    <h2>2. Arreglo de objetos</h2>
    <?php
    // Crear otros objetos para el arreglo
    $renglon2 = new stdClass();
    $renglon2->codigo_articulo = "A002";
    $renglon2->descripcion = "Teclado mecánico";
    $renglon2->precio_unitario = 45.00;
    $renglon2->cantidad = 1;

    $renglon3 = new stdClass();
    $renglon3->codigo_articulo = "A003";
    $renglon3->descripcion = "Ratón inalámbrico";
    $renglon3->precio_unitario = 25.99;
    $renglon3->cantidad = 3;

    // Arreglo de objetos
    $renglones = array($renglon_de_pedido, $renglon2, $renglon3);

    echo "<p>Tipo de dato de \$renglones: <strong>" . gettype($renglones) . "</strong></p>";
    echo "<p>Longitud del arreglo: <strong>" . count($renglones) . "</strong> elementos.</p>";
    ?>

    <h3>Tabla de Renglones</h3>
    <table>
        <tr>
            <th>Código</th>
            <th>Descripción</th>
            <th>Precio Unit.</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>
        <?php
        // Recorrido en tabla
        foreach ($renglones as $item) {
            $subtotal = $item->precio_unitario * $item->cantidad;
            echo "<tr>";
            echo "<td>" . $item->codigo_articulo . "</td>";
            echo "<td>" . $item->descripcion . "</td>";
            echo "<td>$" . number_format($item->precio_unitario, 2) . "</td>";
            echo "<td>" . $item->cantidad . "</td>";
            echo "<td>$" . number_format($subtotal, 2) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h2>3. Objeto contenedor y serialización JSON</h2>
    <?php
    // Objeto contenedor
    $renglones_de_pedido = new stdClass();
    $renglones_de_pedido->renglones = $renglones;
    $renglones_de_pedido->cantidad_total_renglones = count($renglones);

    // Convertir a JSON
    $json_string = json_encode($renglones_de_pedido, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    ?>
    <div class="json-output"><?php echo $json_string; ?></div>

</body>
</html>
