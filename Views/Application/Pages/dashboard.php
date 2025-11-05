<!-- Librerías (NO SE MODIFICAN) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- ==== Dashboard Inventrack ==== -->
<div class="container dash-container">
  <div class="container-fluid mt-4 dash-container-fluid">
    <h2 class="fw-bold mb-4 text-dark dash-titulo">Panel General</h2>

    <!-- FILA DE CARDS -->
    <div class="row g-4 dash-row-cards">

      <!-- Ingresos Totales -->
      <div class="col-md-3 col-sm-6 dash-col-ingresos">
        <div class="card text-white bg-primary shadow border-0 dash-card dash-card-ingresos">
          <div class="card-body dash-card-body">
            <h6 class="fw-semibold dash-card-subtitulo">Total de Ventas Generadas</h6>
            <h2 class="fw-bold textocard dash-card-valor">$000,000</h2>
          </div>
        </div>
      </div>

      <!-- Gastos Totales -->
      <div class="col-md-3 col-sm-6 dash-col-gastos">
        <div class="card text-white bg-info shadow border-0 dash-card dash-card-gastos">
          <div class="card-body dash-card-body">
            <h6 class="fw-semibold dash-card-subtitulo">Clientes Registrados</h6>
            <h2 class="fw-bold textocard dash-card-valor">👤000,000</h2>
          </div>
        </div>
      </div>

      <!-- Efectivo Disponible -->
      <div class="col-md-3 col-sm-6 dash-col-efectivo">
        <div class="card text-white bg-purple shadow border-0 dash-card dash-card-efectivo">
          <div class="card-body dash-card-body">
            <h6 class="fw-semibold dash-card-subtitulo">Ganancia Neta</h6>
            <h2 class="fw-bold textocard dash-card-valor">$000,000</h2>
          </div>
        </div>
      </div>

      <!-- Margen de Ganancia -->
      <div class="col-md-3 col-sm-6 dash-col-ganancia">
        <div class="card text-white bg-success shadow border-0 dash-card dash-card-ganancia">
          <div class="card-body dash-card-body">
            <h6 class="fw-semibold dash-card-subtitulo">Facturas Emitidas</h6>
            <h2 class="fw-bold textocard dash-card-valor">🧾000,000</h2>
          </div>
        </div>
      </div>

    </div> <!-- Fin de la fila -->
  </div>


  <!-- 🧾 Registro de Eventos -->
<div class="card shadow-sm mb-4 border-0 dash-card-eventos">
  <div class="card-header bg-white d-flex justify-content-between align-items-center dash-card-header-eventos">
    <div class="dash-header-texto">
      <h5 class="card-title mb-1 text-primary fw-bold dash-card-titulo">Registro de Eventos</h5>
      <p class="text-muted mb-0 small dash-card-subtexto">Historial de acciones realizadas en el sistema</p>
    </div>
    <i class="fa-solid fa-clipboard-list text-primary fs-4 dash-icono-eventos"></i>
  </div>

  <div class="card-body p-0 dash-card-body-eventos">
    <div class="table-responsive dash-tabla-responsive">
      <table class="table table-hover align-middle mb-0 dash-tabla">
        <thead class="table-light dash-tabla-head">
          <tr class="dash-tabla-fila-head">
            <th scope="col" class="dash-tabla-col-id">ID</th>
            <th scope="col" class="dash-tabla-col-fecha">Fecha</th>
            <th scope="col" class="dash-tabla-col-usuario">Usuario</th>
            <th scope="col" class="dash-tabla-col-accion">Acción Realizada</th>
            <th scope="col" class="dash-tabla-col-detalles">Detalles</th>
          </tr>
        </thead>
        <tbody class="dash-tabla-body">
          <tr class="dash-tabla-fila">
            <td class="dash-tabla-dato">1</td>
            <td class="dash-tabla-dato">03/11/2025</td>
            <td class="dash-tabla-dato">admin</td>
            <td class="dash-tabla-dato">Nueva venta registrada</td>
            <td class="dash-tabla-dato">Venta #154 – Total: $320</td>
          </tr>
          <tr class="dash-tabla-fila">
            <td class="dash-tabla-dato">2</td>
            <td class="dash-tabla-dato">03/11/2025</td>
            <td class="dash-tabla-dato">juanperez</td>
            <td class="dash-tabla-dato">Producto agregado</td>
            <td class="dash-tabla-dato">“Coca Cola 600ml” – Stock inicial: 50</td>
          </tr>
          <tr class="dash-tabla-fila">
            <td class="dash-tabla-dato">3</td>
            <td class="dash-tabla-dato">03/11/2025</td>
            <td class="dash-tabla-dato">admin</td>
            <td class="dash-tabla-dato">Producto actualizado</td>
            <td class="dash-tabla-dato">“Arroz 10kg” – Precio cambiado a $15.50</td>
          </tr>
          <tr class="dash-tabla-fila">
            <td class="dash-tabla-dato">4</td>
            <td class="dash-tabla-dato">03/11/2025</td>
            <td class="dash-tabla-dato">maria</td>
            <td class="dash-tabla-dato">Cliente registrado</td>
            <td class="dash-tabla-dato">“Distribuidora El Sol” – Managua</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
