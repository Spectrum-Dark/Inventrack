<div class="container">
  <div class="subcontainer">
    <h2 class="sales-title">VENTAS</h2>

    <div class="sales-form-container">
      <div class="sales-inputs">
        <div class="sales-input-group">
          <label for="codigo"><strong>Código del producto:</strong></label>
          <input type="text" id="codigo" class="sales-input" placeholder="Ingrese el código o nombre del producto">
        </div>
        <div class="sales-input-group">
          <label for="numero"><strong>Cantidad del producto:</strong></label>
          <input type="text" id="numero" class="sales-input" placeholder="Ingrese cantidad" maxlength="10">
        </div>
      </div>
      <button class="sales-agregar" id="agregarBtn">Agregar producto</button>
    </div>

    <table id="tablaProductos" class="sales-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Código del producto</th>
          <th>Nombre</th>
          <th>Precio de venta</th>
          <th>Cantidad</th>
          <th>Total</th>
          <th>Quitar</th>
        </tr>
      </thead>
      <tbody>
        <!-- Productos iniciales -->
        <tr>
          <td>1</td>
          <td>P001</td>
          <td>Producto A</td>
          <td>150.00</td>
          <td>2</td>
          <td>300.00</td>
          <td>
            <button class="delete-btn sales-delete-btn" title="Eliminar producto">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon-trash" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 6h18M9 6v12a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V6M10 11h4M4 6l1 14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2l1-14" />
              </svg>
            </button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>P002</td>
          <td>Producto B</td>
          <td>200.00</td>
          <td>1</td>
          <td>200.00</td>
          <td>
            <button class="delete-btn sales-delete-btn" title="Eliminar producto">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon-trash" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 6h18M9 6v12a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V6M10 11h4M4 6l1 14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2l1-14" />
              </svg>
            </button>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="sales-total" id="total">Total: 500.00</div>

    <div class="sales-buttons">
      <button class="btn green sales-btn-terminar" id="terminarBtn">TERMINAR VENTA</button>
      <button class="btn red sales-btn-cancelar" id="cancelarBtn">CANCELAR VENTA</button>
    </div>
  </div>
</div>