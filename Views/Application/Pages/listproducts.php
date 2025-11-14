<div class="container">
    <div class="table-card">
        <h2 class="titulo-tabla">Lista de Productos</h2>

        <!-- 🔍 Barra de búsqueda y filtro -->
        <div class="busqueda-filtro">
            <div class="campo-busqueda">
                <label for="buscar"><strong>Buscar producto:</strong></label>
                <input type="text" id="buscar" class="input-busqueda" placeholder="Describe el producto">
            </div>

            <div class="campo-filtro">
                <label for="filtrar"><strong>Filtrar por propiedades</strong></label>
                <select id="filtrar" class="input-filtro">
                    <option hidden value="">Filtrar por:</option>
                    <option value="1">Nombre</option>
                    <option value="2">Precio</option>
                    <option value="3">Cantidad</option>
                    <option value="4">Descripción</option>
                    <option value="5">Categoría</option>
                    <option value="6">Proveedor</option>
                    <option value="7">Vencimiento</option>
                </select>
            </div>
        </div>

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
                <?php $X_X = new Controller_App_Index();
                $X_X->List_Products(); ?>
            </tbody>
        </table>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const inputBuscar = document.getElementById('buscar');
            const selectFiltrar = document.getElementById('filtrar');
            const table = document.getElementById('productTable');
            const rows = table.querySelectorAll('tbody tr');

            function filtrarTabla() {
                const textoBuscar = inputBuscar.value.toLowerCase().trim();
                const columnaFiltrar = selectFiltrar.value; // número de columna (1 a 8)

                rows.forEach(row => {
                    const cells = row.querySelectorAll('td');
                    let mostrar = false;

                    if (textoBuscar === '') {
                        // Si el campo de búsqueda está vacío, mostrar todas las filas
                        mostrar = true;
                    } else if (columnaFiltrar && columnaFiltrar >= 1 && columnaFiltrar <= 8) {
                        // Buscar solo en la columna seleccionada
                        const valorCelda = cells[columnaFiltrar - 1].textContent.toLowerCase();
                        mostrar = valorCelda.includes(textoBuscar);
                    } else {
                        // Buscar en todas las columnas visibles
                        mostrar = Array.from(cells).slice(0, 8).some(td =>
                            td.textContent.toLowerCase().includes(textoBuscar)
                        );
                    }

                    row.style.display = mostrar ? '' : 'none';
                });
            }
            // Eventos
            inputBuscar.addEventListener('input', filtrarTabla);
            selectFiltrar.addEventListener('change', filtrarTabla);
        });
    </script>
</div>