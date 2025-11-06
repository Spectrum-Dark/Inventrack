<div class="container">
    <div class="table-card">
        <h2 class="titulo-tabla">Lista de Productos</h2>

        <!-- 🔍 Barra de búsqueda y filtro -->
        <div class="busqueda-filtro">
            <div class="campo-busqueda">
                <label for="buscar"><strong>Buscar producto:</strong></label>
                <input type="text" id="buscar" class="input-busqueda" placeholder="Escribe el nombre o código del producto">
            </div>

            <div class="campo-filtro">
                <label for="filtrar"><strong>Filtrar por:</strong></label>
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
                <tr>
                    <td>001</td>
                    <td>Barra de Chocolate</td>
                    <td>$1.50</td>
                    <td>20</td>
                    <td>Chocolate amargo dulce</td>
                    <td>Snacks</td>
                    <td>Nestlé</td>
                    <td>2025-12-01</td>
                    <td class="acciones"><button class="btn-editar">Editar</button><button class="btn-eliminar">Eliminar</button></td>
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
                    <td class="acciones"><button class="btn-editar">Editar</button><button class="btn-eliminar">Eliminar</button></td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Galletas de Avena</td>
                    <td>$1.25</td>
                    <td>50</td>
                    <td>Galletas integrales con miel</td>
                    <td>Snacks</td>
                    <td>Gamesa</td>
                    <td>2025-10-20</td>
                    <td class="acciones"><button class="btn-editar">Editar</button><button class="btn-eliminar">Eliminar</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>