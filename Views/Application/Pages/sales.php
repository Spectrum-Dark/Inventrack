<div class="container">
  <div class="subcontainer">
    <h2 class="sales-title">VENTAS</h2>

    <!-- FORMULARIO -->
    <div class="sales-form-container">
      <div class="sales-inputs">

        <div class="sales-input-group">
          <label><strong>Código del producto:</strong></label>
          <input list="listaProductos" id="codigo" class="sales-input" placeholder="Ingrese código o nombre">
          <datalist id="listaProductos"></datalist>
        </div>

        <div class="sales-input-group">
          <label><strong>Precio:</strong></label>
          <input type="text" id="precio" class="sales-input" readonly placeholder="Precio automático">
        </div>

        <div class="sales-input-group">
          <label><strong>Cantidad:</strong></label>
          <input type="number" id="numero" class="sales-input" placeholder="Ingrese cantidad" min="1" value="1">
        </div>

      </div>

      <button class="sales-agregar" id="agregarBtn">Agregar producto</button>
    </div>

    <!-- TABLA -->
    <table id="tablaProductos" class="sales-table">
      <thead>
        <tr>
          <th>Código</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Total</th>
          <th>Quitar</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>

    <div class="sales-total" id="total">Total: 0.00</div>

    <div class="sales-buttons">
      <button class="btn green" id="terminarBtn">TERMINAR VENTA</button>
      <button class="btn red" id="cancelarBtn">CANCELAR VENTA</button>
    </div>
  </div>
</div>

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="module">
  import VentaPOS from '../../../Assets/Js/sales.js';
  const pos = new VentaPOS();
  pos.iniciar();
</script>