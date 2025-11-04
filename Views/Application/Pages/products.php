<?php
// Página: Agregar Nuevo Producto — visual, con estilos y scripts
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <div class="form-card">
            <h2>Agregar Nuevo Producto</h2>
            <form id="productForm">
                <div class="form-group">
                    <label for="codigo">Código del Producto</label>
                    <input type="text" id="codigo" name="codigo" placeholder="Ingrese el código">
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre del Producto</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre">
                </div>

                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" id="precio" name="precio" placeholder="Ingrese el precio">
                </div>

                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" id="cantidad" name="cantidad" placeholder="Ingrese la cantidad">
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="descripcion" placeholder="Ingrese la descripción"></textarea>
                </div>

                <div class="form-group">
                    <label for="categoria">Categoría</label>
                    <input type="text" id="categoria" name="categoria" placeholder="Ingrese la categoría">
                </div>

                <div class="form-group">
                    <label for="proveedor">Proveedor</label>
                    <input type="text" id="proveedor" name="proveedor" placeholder="Ingrese el proveedor">
                </div>

                <div class="form-group">
                    <label for="vencimiento">Fecha de Vencimiento (opcional)</label>
                    <input type="date" id="vencimiento" name="vencimiento">
                </div>

                <div class="form-actions">
                    <button type="button" id="btnAdd">Agregar</button>
                    <button type="reset" id="btnClose">Limpiar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="scripts.js"></script>
</body>
</html>
