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
            <h6 class="fw-semibold dash-card-subtitulo">Ingresos Totales</h6>
            <h2 class="fw-bold textocard dash-card-valor">$579,000</h2>
            <p class="mb-0 dash-card-texto">Ahorro del 25%</p>
          </div>
        </div>
      </div>

      <!-- Gastos Totales -->
      <div class="col-md-3 col-sm-6 dash-col-gastos">
        <div class="card text-white bg-info shadow border-0 dash-card dash-card-gastos">
          <div class="card-body dash-card-body">
            <h6 class="fw-semibold dash-card-subtitulo">Gastos Totales</h6>
            <h2 class="fw-bold textocard dash-card-valor">$579,000</h2>
            <p class="mb-0 dash-card-texto">Ahorro del 25%</p>
          </div>
        </div>
      </div>

      <!-- Efectivo Disponible -->
      <div class="col-md-3 col-sm-6 dash-col-efectivo">
        <div class="card text-white bg-purple shadow border-0 dash-card dash-card-efectivo">
          <div class="card-body dash-card-body">
            <h6 class="fw-semibold dash-card-subtitulo">Efectivo Disponible</h6>
            <h2 class="fw-bold textocard dash-card-valor">$92,000</h2>
            <p class="mb-0 dash-card-texto">Ahorro del 25%</p>
          </div>
        </div>
      </div>

      <!-- Margen de Ganancia -->
      <div class="col-md-3 col-sm-6 dash-col-ganancia">
        <div class="card text-white bg-success shadow border-0 dash-card dash-card-ganancia">
          <div class="card-body dash-card-body">
            <h6 class="fw-semibold dash-card-subtitulo">Margen de Ganancia</h6>
            <h2 class="fw-bold textocard dash-card-valor">$179,000</h2>
            <p class="mb-0 dash-card-texto">Ahorro del 65%</p>
          </div>
        </div>
      </div>

    </div> <!-- Fin de la fila -->
  </div>


  <!-- 📊 Estadísticas de Empleados -->
  <div class="card shadow-sm mb-4 border-0 dash-card-empleados">
    <div class="card-header bg-white d-flex justify-content-between align-items-center dash-card-header-empleados">
      <div class="dash-header-texto">
        <h5 class="card-title mb-1 text-primary fw-bold dash-card-titulo">Estadísticas de Empleados</h5>
        <p class="text-muted mb-0 small dash-card-subtexto">Nuevos empleados ingresados el 3 de Noviembre de 2025</p>
      </div>
      <i class="fa-solid fa-users text-primary fs-4 dash-icono-empleados"></i>
    </div>

    <div class="card-body p-0 dash-card-body-empleados">
      <div class="table-responsive dash-tabla-responsive">
        <table class="table table-hover align-middle mb-0 dash-tabla">
          <thead class="table-light dash-tabla-head">
            <tr class="dash-tabla-fila-head">
              <th scope="col" class="dash-tabla-col-id">ID</th>
              <th scope="col" class="dash-tabla-col-nombre">Nombre</th>
              <th scope="col" class="dash-tabla-col-salario">Salario</th>
              <th scope="col" class="dash-tabla-col-pais">País</th>
              <th scope="col" class="dash-tabla-col-ciudad">Ciudad</th>
            </tr>
          </thead>
          <tbody class="dash-tabla-body">
            <tr class="dash-tabla-fila">
              <td class="dash-tabla-dato">1</td>
              <td class="dash-tabla-dato">Armando-el borracho</td>
              <td class="dash-tabla-dato">$10</td>
              <td class="dash-tabla-dato">Nicaragua</td>
              <td class="dash-tabla-dato">LEON</td>
            </tr>
            <tr class="dash-tabla-fila">
              <td class="dash-tabla-dato">2</td>
              <td class="dash-tabla-dato">Minerva Hooper</td>
              <td class="dash-tabla-dato">$23,738</td>
              <td class="dash-tabla-dato">Curaçao</td>
              <td class="dash-tabla-dato">Sinaai-Waas</td>
            </tr>
            <tr class="dash-tabla-fila">
              <td class="dash-tabla-dato">3</td>
              <td class="dash-tabla-dato">Sage Rodríguez</td>
              <td class="dash-tabla-dato">$56,142</td>
              <td class="dash-tabla-dato">Países Bajos</td>
              <td class="dash-tabla-dato">Overland Park</td>
            </tr>
            <tr class="dash-tabla-fila">
              <td class="dash-tabla-dato">4</td>
              <td class="dash-tabla-dato">Philip Chaney</td>
              <td class="dash-tabla-dato">$38,735</td>
              <td class="dash-tabla-dato">Corea del Sur</td>
              <td class="dash-tabla-dato">Gloucester</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
