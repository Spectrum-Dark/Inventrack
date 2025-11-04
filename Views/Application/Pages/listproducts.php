<?php
// Página: Lista de Productos — visual, con estilos exactos
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <!-- Enlazamos el CSS externo -->
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <div class="table-card">
            <h2>Lista de Productos</h2>
            <table id="productTable">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Descripción</th>
                        <th>Categoría</th>
                        <th>Proveedor</th>
                        <th>Vencimiento</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Barra de Chocolate</td>
                        <td>$1.50</td>
                        <td>20</td>
                        <td>Chocolate amargo dulce</td>
                        <td>Snacks</td>
                        <td>Nestlé</td>
                        <td>2025-12-01</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Jugo de Naranja</td>
                        <td>$2.00</td>
                        <td>15</td>
                        <td>Jugo natural de fruta</td>
                        <td>Bebidas</td>
                        <td>Del Valle</td>
                        <td>2026-01-15</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
