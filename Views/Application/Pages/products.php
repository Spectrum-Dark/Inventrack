<?php $X_X = new Controller_App_Index();
$X_X->Add_Products($X_X->DataViewAll()); ?>
<div class="container">
    <div class="pro-form-card">
        <h2 class="pro-title">Agregar Nuevo Producto</h2>
        <form method="POST" id="productForm" class="pro-form">
            <input type="text" name="view" value="products" hidden>
            <input type="text" name="action" value="Insertar_" hidden>
            <div class="pro-form-group">
                <label for="nombre" class="pro-label">Nombre del Producto</label>
                <input type="text" id="nombre" name="Name_Product" placeholder="Ingrese el nombre" class="pro-input">
            </div>
            <div class="pro-form-group">
                <label for="precio" class="pro-label">Precio</label>
                <input type="number" id="precio" name="Price_Product" placeholder="Ingrese el precio" class="pro-input">
            </div>
            <div class="pro-form-group">
                <label for="cantidad" class="pro-label">Cantidad</label>
                <input type="number" id="cantidad" name="Stock_Product" placeholder="Ingrese la cantidad" class="pro-input">
            </div>
            <div class="pro-form-group pro-full-width">
                <label for="descripcion" class="pro-label">Descripción</label>
                <textarea id="descripcion" name="Description_Product" placeholder="Ingrese la descripción" class="pro-textarea" rows="3"></textarea>
            </div>
            <div class="pro-form-group">
                <label for="categoria" class="pro-label">Categoría</label>
                <select id="categoria" name="Category_Product" class="pro-select" required>
                    <option value="" disabled selected>Seleccione una categoría</option>

                    <!-- Electrónica -->
                    <optgroup label="Electrónica">
                        <option value="smartphones">Smartphones</option>
                        <option value="laptops">Laptops</option>
                        <option value="tablets">Tablets</option>
                        <option value="televisores">Televisores</option>
                        <option value="audifonos">Audífonos</option>
                        <option value="camaras">Cámaras</option>
                        <option value="consolas">Consolas de videojuegos</option>
                        <option value="accesorios-electronicos">Accesorios electrónicos</option>
                        <option value="gadgets">Gadgets y wearables</option>
                        <option value="smart-home">Hogar inteligente</option>
                        <option value="drones">Drones</option>
                    </optgroup>

                    <!-- Moda y Ropa -->
                    <optgroup label="Moda y Ropa">
                        <option value="ropa-hombre">Ropa de hombre</option>
                        <option value="ropa-mujer">Ropa de mujer</option>
                        <option value="ropa-infantil">Ropa infantil</option>
                        <option value="calzado">Calzado</option>
                        <option value="bolsos">Bolsos y carteras</option>
                        <option value="relojes">Relojes</option>
                        <option value="joyeria">Joyería</option>
                        <option value="ropa-deportiva">Ropa deportiva</option>
                        <option value="accesorios-moda">Accesorios de moda</option>
                        <option value="ropa-interior">Ropa interior</option>
                    </optgroup>

                    <!-- Hogar y Cocina -->
                    <optgroup label="Hogar y Cocina">
                        <option value="muebles">Muebles</option>
                        <option value="decoracion">Decoración</option>
                        <option value="cocina">Utensilios de cocina</option>
                        <option value="electrodomesticos">Electrodomésticos</option>
                        <option value="camas-bano">Camas y baño</option>
                        <option value="iluminacion">Iluminación</option>
                        <option value="almacenamiento">Almacenamiento y organización</option>
                    </optgroup>

                    <!-- Deportes y Aire Libre -->
                    <optgroup label="Deportes y Aire Libre">
                        <option value="fitness">Fitness y entrenamiento</option>
                        <option value="bicicletas">Bicicletas y accesorios</option>
                        <option value="camping">Camping y outdoor</option>
                        <option value="ropa-deportiva">Ropa deportiva</option>
                        <option value="deportes-acuaticos">Deportes acuáticos</option>
                        <option value="calzado-deportivo">Calzado deportivo</option>
                    </optgroup>

                    <!-- Belleza y Cuidado Personal -->
                    <optgroup label="Belleza y Cuidado Personal">
                        <option value="maquillaje">Maquillaje</option>
                        <option value="cuidado-piel">Cuidado de la piel</option>
                        <option value="cuidado-cabello">Cuidado del cabello</option>
                        <option value="perfumes">Perfumes</option>
                        <option value="higiene">Higiene personal</option>
                        <option value="herramientas-belleza">Herramientas de belleza</option>
                    </optgroup>

                    <!-- Juguetes y Niños -->
                    <optgroup label="Juguetes y Niños">
                        <option value="juguetes">Juguetes</option>
                        <option value="videojuegos">Videojuegos</option>
                        <option value="articulos-bebe">Artículos para bebés</option>
                        <option value="libros-infantiles">Libros infantiles</option>
                        <option value="ropa-ninos">Ropa para niños</option>
                    </optgroup>

                    <!-- Alimentos y Bebidas -->
                    <optgroup label="Alimentos y Bebidas">
                        <option value="snacks">Snacks y golosinas</option>
                        <option value="bebidas">Bebidas (jugos, refrescos, agua)</option>
                        <option value="productos-lacteos">Lácteos</option>
                        <option value="panaderia">Panadería y repostería</option>
                        <option value="carnes">Carnes y embutidos</option>
                        <option value="frutas-verduras">Frutas y verduras</option>
                        <option value="alimentos-conserva">Alimentos en conserva</option>
                        <option value="cereales">Cereales y granos</option>
                        <option value="productos-vegano">Productos veganos y saludables</option>
                        <option value="especias-condimentos">Especias y condimentos</option>
                    </optgroup>

                    <!-- Otros -->
                    <optgroup label="Otros">
                        <option value="mascotas">Productos para mascotas</option>
                        <option value="jardineria">Jardinería</option>
                        <option value="ferreteria">Ferretería</option>
                        <option value="instrumentos-musicales">Instrumentos musicales</option>
                        <option value="arte-suministros">Suministros de arte</option>
                        <option value="automotriz">Accesorios automotrices</option>
                        <option value="libros">Libros y revistas</option>
                        <option value="coleccionables">Coleccionables</option>
                    </optgroup>
                </select>
            </div>
            <div class="pro-form-group">
                <label for="proveedor" class="pro-label">Proveedor</label>
                <input type="text" id="proveedor" name="Supplier_Product" placeholder="Ingrese el proveedor" class="pro-input">
            </div>
            <div class="pro-form-group">
                <label for="vencimiento" class="pro-label">Fecha de Vencimiento (opcional)</label>
                <input type="date" id="vencimiento" name="Expiration_Date" class="pro-input">
            </div>
            <div class="pro-form-actions">
                <button type="submit" id="btnAdd" class="pro-btn pro-btn-success">
                    Agregar
                </button>
                <button type="button" id="btnClose" class="pro-btn pro-btn-danger"
                    onclick="document.getElementById('productForm').reset();">
                    Limpiar
                </button>
            </div>
        </form>
    </div>
</div>