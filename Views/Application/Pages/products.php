<div class="container">
    <div class="pro-form-card">
        <h2 class="pro-title">Agregar Nuevo Producto</h2>
        <form id="productForm" class="pro-form">
            <div class="pro-form-group">
                <label for="codigo" class="pro-label">Código del Producto</label>
                <input type="text" id="codigo" name="codigo" placeholder="Ingrese el código" class="pro-input">
            </div>
            <div class="pro-form-group">
                <label for="nombre" class="pro-label">Nombre del Producto</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre" class="pro-input">
            </div>
            <div class="pro-form-group">
                <label for="precio" class="pro-label">Precio</label>
                <input type="number" id="precio" name="precio" placeholder="Ingrese el precio" class="pro-input">
            </div>
            <div class="pro-form-group">
                <label for="cantidad" class="pro-label">Cantidad</label>
                <input type="number" id="cantidad" name="cantidad" placeholder="Ingrese la cantidad" class="pro-input">
            </div>
            <div class="pro-form-group pro-full-width">
                <label for="descripcion" class="pro-label">Descripción</label>
                <textarea id="descripcion" name="descripcion" placeholder="Ingrese la descripción" class="pro-textarea" rows="3"></textarea>
            </div>
            <div class="pro-form-group">
                <label for="categoria" class="pro-label">Categoría</label>
                <select id="categoria" name="categoria" class="pro-select" required>
                    <option value="" disabled selected>Seleccione una categoría</option>
                    <!-- TODAS TUS CATEGORÍAS ORIGINALES (sin cambios) -->
                    <optgroup label="Electrónica">
                        <option value="smartphones">Smartphones</option>
                        <option value="laptops">Laptops</option>
                        <option value="tablets">Tablets</option>
                        <option value="televisores">Televisores</option>
                        <option value="audifonos">Audífonos</option>
                        <option value="camaras">Cámaras</option>
                        <option value="consolas">Consolas de videojuegos</option>
                        <option value="accesorios-electronicos">Accesorios electrónicos</option>
                    </optgroup>
                    <optgroup label="Moda y Ropa">
                        <option value="ropa-hombre">Ropa de hombre</option>
                        <option value="ropa-mujer">Ropa de mujer</option>
                        <option value="ropa-infantil">Ropa infantil</option>
                        <option value="calzado">Calzado</option>
                        <option value="bolsos">Bolsos y carteras</option>
                        <option value="relojes">Relojes</option>
                        <option value="joyeria">Joyería</option>
                        <option value="ropa-deportiva">Ropa deportiva</option>
                    </optgroup>
                    <!-- ... (todas las demás categorías que ya tenías) ... -->
                    <optgroup label="Otros">
                        <option value="mascotas">Productos para mascotas</option>
                        <option value="jardineria">Jardinería</option>
                        <option value="ferreteria">Ferretería</option>
                        <option value="instrumentos-musicales">Instrumentos musicales</option>
                        <option value="arte-suministros">Suministros de arte</option>
                    </optgroup>
                </select>
            </div>
            <div class="pro-form-group">
                <label for="proveedor" class="pro-label">Proveedor</label>
                <input type="text" id="proveedor" name="proveedor" placeholder="Ingrese el proveedor" class="pro-input">
            </div>
            <div class="pro-form-group">
                <label for="vencimiento" class="pro-label">Fecha de Vencimiento (opcional)</label>
                <input type="date" id="vencimiento" name="vencimiento" class="pro-input">
            </div>
            <div class="pro-form-actions">
                <button type="button" id="btnAdd" class="pro-btn pro-btn-success">Agregar</button>
                <button type="reset" id="btnClose" class="pro-btn pro-btn-danger">Limpiar</button>
            </div>
        </form>
    </div>
</div>