<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Panel de Control — Inventrack</title>

  <!-- Fuentes e iconos -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Estilos (CSS externo) -->
  <link rel="stylesheet" href="./Assets/Css/dashboard.css">
</head>
<body>
  <div class="page-wrap">
    <!-- Encabezado -->
    <header class="topbar">
      <div class="greeting">
        <h1>Dashboard</h1>
      </div>
      <div class="top-search">
        <input id="globalSearch" type="search" placeholder="Buscar" aria-label="Buscar">
      </div>
    </header>

    <!-- Tarjetas de estadísticas -->
    <section class="stats-cards">
      <div class="card stat">
        <div class="icon"><i class="fa-solid fa-dollar-sign"></i></div>
        <div class="info">
          <div class="title">Total de Ventas Realizadas</div>
          <div class="value">$128,450</div>
          <div class="small positive"><i class="fa-solid fa-arrow-up"></i> 11% este mes</div>
        </div>
      </div>

      <div class="card stat">
        <div class="icon"><i class="fa-solid fa-users"></i></div>
        <div class="info">
          <div class="title">Clientes Registrados</div>
          <div class="value">2,154</div>
          <div class="small negative"><i class="fa-solid fa-arrow-down"></i> 5% este mes</div>
        </div>
      </div>

      <div class="card stat">
        <div class="icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
        <div class="info">
          <div class="title">Facturas Emitidas</div>
          <div class="value">312</div>
          <div class="small avatars">
            <img alt="a" src="https://i.pravatar.cc/32?img=10">
            <img alt="b" src="https://i.pravatar.cc/32?img=11">
            <img alt="c" src="https://i.pravatar.cc/32?img=12">
            <img alt="d" src="https://i.pravatar.cc/32?img=13">
          </div>
        </div>
      </div>
    </section>

    <!-- Panel principal con tabla -->
    <main class="panel">
      <div class="panel-header">
        <h2>Registro de Eventos</h2>
        <div class="panel-controls">
          <div class="tab-active">Eventos Activos</div>
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

  <!-- Script de búsqueda y orden -->
  <script>
    (function(){
      const table = document.getElementById('customersTable').tBodies[0];
      const globalSearch = document.getElementById('globalSearch');
      const tableSearch = document.getElementById('tableSearch');
      const sortSelect = document.getElementById('sortSelect');

      function filterRowsByText(text) {
        const t = text.trim().toLowerCase();
        for (const row of table.rows) {
          const rowText = row.textContent.toLowerCase();
          row.style.display = rowText.includes(t) ? '' : 'none';
        }
      }

      function filterByTableInput() {
        filterRowsByText(tableSearch.value);
      }

      globalSearch.addEventListener('input', e => {
        tableSearch.value = e.target.value;
        filterByTableInput();
      });

      tableSearch.addEventListener('input', filterByTableInput);

      sortSelect.addEventListener('change', function() {
        const rows = Array.from(table.rows);
        rows.sort((a,b) => {
          const da = new Date(a.dataset.date || 0);
          const db = new Date(b.dataset.date || 0);
          return this.value === 'newest' ? db - da : da - db;
        });
        rows.forEach(r => table.appendChild(r));
      });

      window.addEventListener('load', () => {
        sortSelect.dispatchEvent(new Event('change'));
      });
    })();
  </script>
</body>
</html>
