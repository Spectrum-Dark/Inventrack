<?php
// Página: Lista de Productos — visual, con estilos exactos y funciones activas
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="ventas-container">
        <div class="table-card">
            <h2 class="titulo-tabla">Lista de Productos</h2>

            <!-- 🔍 Barra de búsqueda y filtro -->
            <div class="busqueda-filtro">
                <div class="campo-busqueda">
                    <label for="buscar"><strong>Buscar producto:</strong></label>
                    <input type="text" id="buscar" class="input-busqueda" placeholder="Escribe el nombre o código del producto">
                </div>
                <div class="campo-filtro">
                    <label for="filtrar"><strong>Filtrar producto:</strong></label>
                    <input type="text" id="filtrar" class="input-filtro" placeholder="Filtra por categoría, proveedor, etc.">
                </div>
            </div>

            <!-- 🧾 Tabla de productos -->
            <table id="productTable" class="tabla-productos">
                <thead class="encabezado-tabla">
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Descripción</th>
                        <th>Categoría</th>
                        <th>Proveedor</th>
                        <th>Vencimiento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="cuerpo-tabla">
                    <tr>
                        <td>001</td>
                        <td>Barra de Chocolate</td>
                        <td>$1.50</td>
                        <td>20</td>
                        <td>Chocolate amargo dulce</td>
                        <td>Snacks</td>
                        <td>Nestlé</td>
                        <td>2025-12-01</td>
                        <td class="acciones">
                            <button class="btn-editar">Editar</button>
                            <button class="btn-eliminar">Eliminar</button>
                        </td>
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
                        <td class="acciones">
                            <button class="btn-editar">Editar</button>
                            <button class="btn-eliminar">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // 🔎 Buscar y filtrar productos en la tabla
        const buscarInput = document.getElementById('buscar');
        const filtrarInput = document.getElementById('filtrar');
        const tabla = document.getElementById('productTable').getElementsByTagName('tbody')[0];

        function filtrarTabla() {
            const textoBuscar = buscarInput.value.toLowerCase();
            const textoFiltrar = filtrarInput.value.toLowerCase();
            const filas = tabla.getElementsByTagName('tr');

            for (let i = 0; i < filas.length; i++) {
                const celdas = filas[i].getElementsByTagName('td');
                let coincideBuscar = false;
                let coincideFiltrar = false;

                // Buscar coincidencia general
                for (let j = 0; j < celdas.length - 1; j++) {
                    const textoCelda = celdas[j].textContent.toLowerCase();
                    if (textoCelda.includes(textoBuscar)) coincideBuscar = true;
                    if (textoCelda.includes(textoFiltrar)) coincideFiltrar = true;
                }

                // Mostrar u ocultar fila
                if ((textoBuscar === "" || coincideBuscar) && (textoFiltrar === "" || coincideFiltrar)) {
                    filas[i].style.display = "";
                } else {
                    filas[i].style.display = "none";
                }
            }
        }

        buscarInput.addEventListener('input', filtrarTabla);
        filtrarInput.addEventListener('input', filtrarTabla);

        // 🗑️ Funciones de los botones editar/eliminar
        document.querySelectorAll('.btn-editar').forEach(btn => {
            btn.addEventListener('click', e => {
                const fila = e.target.closest('tr');
                const producto = fila.cells[1].textContent;
                alert(`Editar producto: ${producto}`);
            });
        });

        document.querySelectorAll('.btn-eliminar').forEach(btn => {
            btn.addEventListener('click', e => {
                const fila = e.target.closest('tr');
                const producto = fila.cells[1].textContent;
                if (confirm(`¿Eliminar el producto "${producto}"?`)) {
                    fila.remove();
                }
            });
        });
    </script>
</body>
</html>
