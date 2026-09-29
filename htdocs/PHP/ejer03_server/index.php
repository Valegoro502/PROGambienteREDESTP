<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 03 - Variables de servidor</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Ejercicio 03: Variables superglobales $_SERVER</h1>
    
    <h2>1. Variables principales agrupadas</h2>
    <table>
        <tr>
            <th>Categoría</th>
            <th>Variable</th>
            <th>Valor</th>
        </tr>
        <!-- Variables del Servidor -->
        <tr>
            <td rowspan="4"><strong>Variables del Servidor</strong></td>
            <td>SERVER_ADDR</td>
            <td><?php echo isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : 'N/A'; ?></td>
        </tr>
        <tr>
            <td>SERVER_NAME</td>
            <td><?php echo isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'N/A'; ?></td>
        </tr>
        <tr>
            <td>HTTP_HOST</td>
            <td><?php echo isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'N/A'; ?></td>
        </tr>
        <tr>
            <td>DOCUMENT_ROOT</td>
            <td><?php echo isset($_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] : 'N/A'; ?></td>
        </tr>
        
        <!-- Variables del Cliente -->
        <tr>
            <td rowspan="2"><strong>Variables del Cliente</strong></td>
            <td>REMOTE_ADDR</td>
            <td><?php echo isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'N/A'; ?></td>
        </tr>
        <tr>
            <td>REMOTE_PORT</td>
            <td><?php echo isset($_SERVER['REMOTE_PORT']) ? $_SERVER['REMOTE_PORT'] : 'N/A'; ?></td>
        </tr>
        
        <!-- Variables de Requerimiento -->
        <tr>
            <td rowspan="4"><strong>Variables de Requerimiento</strong></td>
            <td>SCRIPT_NAME</td>
            <td><?php echo isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : 'N/A'; ?></td>
        </tr>
        <tr>
            <td>REQUEST_METHOD</td>
            <td><?php echo isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'N/A'; ?></td>
        </tr>
        <tr>
            <td>QUERY_STRING</td>
            <td><?php echo isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : 'N/A'; ?></td>
        </tr>
        <tr>
            <td>REQUEST_URI</td>
            <td><?php echo isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'N/A'; ?></td>
        </tr>
    </table>

    <h2>2. Barrido completo del arreglo $_SERVER</h2>
    <div class="full-list">
        <ul>
            <?php
            foreach ($_SERVER as $clave => $valor) {
                echo "<li><span class='clave'>$clave</span>: $valor</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
