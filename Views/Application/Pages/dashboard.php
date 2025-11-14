<div class="container">
  <div class="page-wrap">
    <!-- Encabezado -->
    <header class="topbar">
    </header>

    <!-- Tarjetas de estadísticas -->
    <section class="stats-cards">
      <div class="card stat">
        <div class="icon"><i class="fa-solid fa-dollar-sign"></i></div>
        <div class="info">
          <div class="title">Total de Ventas Realizadas</div>
          <div class="value value-ventas">$128,450</div>
        </div>
      </div>

      <div class="card stat">
        <div class="icon"><i class="fa-solid fa-boxes-stacked"></i></div>
        <div class="info">
          <div class="title">Total en Stock</div>
          <div class="value value-stock">2,154</div>
        </div>
      </div>

      <div class="card stat">
        <div class="icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
        <div class="info">
          <div class="title">Facturas Emitidas</div>
          <div class="value value-facturas">312</div>
        </div>
      </div>
    </section>

    <!-- Panel principal con tabla -->
    <main class="panel">
      <div class="panel-header">
        <h2>Registro de Eventos</h2>
        <div class="panel-controls">
          <div class="tab-active">Buscar Eventos</div>
          <input id="tableSearch" type="search" placeholder="Buscar" aria-label="Buscar tabla">
          <select id="sortSelect" aria-label="Ordenar">
            <option value="newest">Ordenar por: Más recientes</option>
            <option value="oldest">Ordenar por: Más antiguos</option>
          </select>
        </div>
      </div>

      <div class="table-wrap">
        <table id="customersTable" class="customers">
          <thead>
            <tr>
              <th>ID</th>
              <th>Fecha</th>
              <th>Usuario</th>
              <th>Acción Realizada</th>
              <th>Detalles</th>
            </tr>
          </thead>
          <tbody>
            <tr data-date="2025-11-07" data-status="active">
              <td>EVT-001</td>
              <td>07/11/2025</td>
              <td>Administrador</td>
              <td>Actualizó inventario</td>
              <td><span class="badge active">Se modificaron 24 productos</span></td>
            </tr>

            <tr data-date="2025-11-06" data-status="active">
              <td>EVT-002</td>
              <td>06/11/2025</td>
              <td>Laura Gómez</td>
              <td>Inicio de sesión</td>
              <td><span class="badge active">Autenticación correcta</span></td>
            </tr>

            <tr data-date="2025-11-06" data-status="inactive">
              <td>EVT-003</td>
              <td>06/11/2025</td>
              <td>Mario López</td>
              <td>Intento de acceso</td>
              <td><span class="badge inactive">Contraseña incorrecta</span></td>
            </tr>

            <tr data-date="2025-11-05" data-status="active">
              <td>EVT-004</td>
              <td>05/11/2025</td>
              <td>Sofía Ramos</td>
              <td>Agregó nuevo producto</td>
              <td><span class="badge active">Producto: “Monitor HP 24”</span></td>
            </tr>

            <tr data-date="2025-11-05" data-status="active">
              <td>EVT-005</td>
              <td>05/11/2025</td>
              <td>Carlos Jiménez</td>
              <td>Eliminó registro</td>
              <td><span class="badge active">Producto ID: P-1025</span></td>
            </tr>

            <tr data-date="2025-11-04" data-status="inactive">
              <td>EVT-006</td>
              <td>04/11/2025</td>
              <td>Administrador</td>
              <td>Error en sincronización</td>
              <td><span class="badge inactive">Servidor no respondió</span></td>
            </tr>

            <tr data-date="2025-11-03" data-status="active">
              <td>EVT-007</td>
              <td>03/11/2025</td>
              <td>Elena Torres</td>
              <td>Descargó reporte</td>
              <td><span class="badge active">Inventario mensual generado</span></td>
            </tr>

            <tr data-date="2025-11-02" data-status="active">
              <td>EVT-008</td>
              <td>02/11/2025</td>
              <td>Marcos Pérez</td>
              <td>Actualizó perfil</td>
              <td><span class="badge active">Correo modificado</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>

    <footer class="page-footer">
      <small>Inventrack — Panel de Control UI</small>
    </footer>
  </div>
</div>

<!-- === SCRIPT DE BUSQUEDA Y ORDENAMIENTO === -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const searchInput = document.getElementById("tableSearch");
  const sortSelect = document.getElementById("sortSelect");
  const table = document.getElementById("customersTable");
  const tbody = table.querySelector("tbody");

  // --- Buscar en tiempo real ---
  searchInput.addEventListener("input", () => {
    const term = searchInput.value.toLowerCase();
    const rows = tbody.querySelectorAll("tr");

    rows.forEach(row => {
      const text = row.textContent.toLowerCase();
      row.style.display = text.includes(term) ? "" : "none";
    });
  });

  // --- Ordenar por fecha ---
  sortSelect.addEventListener("change", () => {
    const rowsArray = Array.from(tbody.querySelectorAll("tr"));

    rowsArray.sort((a, b) => {
      const fechaA = new Date(a.dataset.date);
      const fechaB = new Date(b.dataset.date);
      return sortSelect.value === "oldest" ? fechaA - fechaB : fechaB - fechaA;
    });

    tbody.innerHTML = "";
    rowsArray.forEach(row => tbody.appendChild(row));
  });
});
</script>
