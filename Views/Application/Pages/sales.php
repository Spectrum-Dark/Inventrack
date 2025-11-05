<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ventas</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>VENTAS</h1>

  <div class="form-container">
    <div class="inputs">
      <div class="input-group">
        <label for="codigo"><strong>Código del producto:</strong></label>
        <input type="text" id="codigo" placeholder="Escribe el código del producto">
      </div>
      <div class="input-group">
        <label for="numero"><strong>Cantidad del producto:</strong></label>
        <input type="text" id="numero" placeholder="Escribe la cantidad del producto" maxlength="10">
      </div>
    </div>
    <button class="agregar" id="agregarBtn">Agregar producto</button>
  </div>

  <table id="tablaProductos">
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
        <td><button class="delete-btn" title="Eliminar producto">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-trash" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 6h18M9 6v12a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V6M10 11h4M4 6l1 14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2l1-14"/>
          </svg>
        </button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>P002</td>
        <td>Producto B</td>
        <td>200.00</td>
        <td>1</td>
        <td>200.00</td>
        <td><button class="delete-btn" title="Eliminar producto">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-trash" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 6h18M9 6v12a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V6M10 11h4M4 6l1 14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2l1-14"/>
          </svg>
        </button></td>
      </tr>
    </tbody>
  </table>

  <div class="total" id="total">Total: 500.00</div>

  <div class="buttons">
    <button class="btn green" id="terminarBtn">TERMINAR VENTA</button>
    <button class="btn red" id="cancelarBtn">CANCELAR VENTA</button>
  </div>

  <script>
    const btnAgregar = document.getElementById('agregarBtn');
    const tabla = document.getElementById('tablaProductos').querySelector('tbody');
    const codigoInput = document.getElementById('codigo');
    const numeroInput = document.getElementById('numero');
    const totalEl = document.getElementById('total');
    const terminarBtn = document.getElementById('terminarBtn');
    const cancelarBtn = document.getElementById('cancelarBtn');

    let contador = 3;

    function actualizarTotal() {
      let suma = 0;
      tabla.querySelectorAll('tr').forEach(fila => {
        const subtotal = parseFloat(fila.children[5].textContent);
        suma += subtotal;
      });
      totalEl.textContent = "Total: " + suma.toFixed(2);
    }

    function crearIconoBasura() {
      return `
        <svg xmlns="http://www.w3.org/2000/svg" class="icon-trash" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M3 6h18M9 6v12a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V6M10 11h4M4 6l1 14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2l1-14"/>
        </svg>
      `;
    }

    btnAgregar.addEventListener('click', () => {
      const codigo = codigoInput.value.trim();
      const cantidadInput = numeroInput.value.trim();
      const cantidad = parseInt(cantidadInput);

      if (codigo === "" || cantidadInput === "" || isNaN(cantidad) || cantidad <= 0) {
        alert("Por favor ingrese el código y la cantidad correcta del producto.");
        return;
      }

      const precio = Math.floor(Math.random() * 200) + 50;
      const subtotal = precio * cantidad;

      const fila = document.createElement('tr');
      fila.innerHTML = `
        <td>${contador++}</td>
        <td>${codigo}</td>
        <td>Producto</td>
        <td>${precio.toFixed(2)}</td>
        <td>${cantidad}</td>
        <td>${subtotal.toFixed(2)}</td>
        <td><button class="delete-btn" title="Eliminar producto">${crearIconoBasura()}</button></td>
      `;

      tabla.appendChild(fila);
      actualizarTotal();

      codigoInput.value = "";
      numeroInput.value = "";
      codigoInput.focus();

      fila.querySelector(".delete-btn").addEventListener("click", () => {
        fila.remove();
        actualizarTotal();
      });
    });

    document.querySelectorAll(".delete-btn").forEach(btn => {
      btn.addEventListener("click", (e) => {
        e.target.closest("tr").remove();
        actualizarTotal();
      });
    });

    terminarBtn.addEventListener("click", () => {
      if (tabla.children.length === 0) {
        alert("No hay productos en la venta.");
        return;
      }
      alert("✅ Venta completada con éxito.\nTotal: " + totalEl.textContent.replace("Total: ", ""));
      tabla.innerHTML = "";
      actualizarTotal();
    });

    cancelarBtn.addEventListener("click", () => {
      if (confirm("¿Deseas cancelar la venta actual?")) {
        tabla.innerHTML = "";
        actualizarTotal();
      }
    });

    // Actualizar total inicial
    actualizarTotal();
  </script>
</body>
</html>
