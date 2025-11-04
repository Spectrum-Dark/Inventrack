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
                    <select id="categoria" name="categoria" class="form-control" required>
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
                        </optgroup>

                        <!-- Hogar y Muebles -->
                        <optgroup label="Hogar y Muebles">
                            <option value="muebles-sala">Muebles de sala</option>
                            <option value="muebles-dormitorio">Muebles de dormitorio</option>
                            <option value="cocina">Artículos de cocina</option>
                            <option value="electrodomesticos">Electrodomésticos</option>
                            <option value="decoracion">Decoración del hogar</option>
                            <option value="colchones">Colchones y camas</option>
                            <option value="iluminacion">Iluminación</option>
                        </optgroup>

                        <!-- Belleza y Cuidado Personal -->
                        <optgroup label="Belleza y Cuidado Personal">
                            <option value="maquillaje">Maquillaje</option>
                            <option value="cuidado-piel">Cuidado de la piel</option>
                            <option value="cuidado-cabello">Cuidado del cabello</option>
                            <option value="perfumes">Perfumes</option>
                            <option value="cuidado-personal">Cuidado personal</option>
                        </optgroup>

                        <!-- Deportes y Aire Libre -->
                        <optgroup label="Deportes y Aire Libre">
                            <option value="gimnasio">Equipos de gimnasio</option>
                            <option value="bicicletas">Bicicletas</option>
                            <option value="camping">Camping y senderismo</option>
                            <option value="ropa-deportiva">Ropa deportiva</option>
                            <option value="calzado-deportivo">Calzado deportivo</option>
                        </optgroup>

                        <!-- Juguetes y Bebés -->
                        <optgroup label="Juguetes y Bebés">
                            <option value="juguetes">Juguetes</option>
                            <option value="bebes-ropa">Ropa de bebé</option>
                            <option value="carriolas">Carriolas y cochecitos</option>
                            <option value="pañales">Pañales y accesorios</option>
                            <option value="muebles-bebe">Muebles para bebé</option>
                        </optgroup>

                        <!-- Alimentos y Bebidas -->
                        <optgroup label="Alimentos y Bebidas">
                            <option value="snacks">Snacks</option>
                            <option value="bebidas">Bebidas</option>
                            <option value="despensa">Despensa básica</option>
                            <option value="organicos">Productos orgánicos</option>
                            <option value="congelados">Congelados</option>
                        </optgroup>

                        <!-- Libros y Papelería -->
                        <optgroup label="Libros y Papelería">
                            <option value="libros">Libros</option>
                            <option value="papeleria">Papelería</option>
                            <option value="oficina">Artículos de oficina</option>
                            <option value="material-escolar">Material escolar</option>
                        </optgroup>

                        <!-- Automóviles y Accesorios -->
                        <optgroup label="Automóviles y Accesorios">
                            <option value="accesorios-auto">Accesorios para auto</option>
                            <option value="llantas">Llantas</option>
                            <option value="herramientas">Herramientas automotrices</option>
                        </optgroup>

                        <!-- Salud y Farmacia -->
                        <optgroup label="Salud y Farmacia">
                            <option value="medicamentos">Medicamentos</option>
                            <option value="suplementos">Suplementos alimenticios</option>
                            <option value="cuidado-salud">Cuidado de la salud</option>
                        </optgroup>

                        <!-- Otras categorías generales -->
                        <optgroup label="Otros">
                            <option value="mascotas">Productos para mascotas</option>
                            <option value="jardineria">Jardinería</option>
                            <option value="ferreteria">Ferretería</option>
                            <option value="instrumentos-musicales">Instrumentos musicales</option>
                            <option value="arte-suministros">Suministros de arte</option>
                        </optgroup>
                    </select>
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