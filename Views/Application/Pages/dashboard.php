<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Inventrack</title>

  <!-- Librerías -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body class="dash-body">

  <div class="container dash-container">
    <div class="container-fluid mt-4 dash-container-fluid">
      <h2 class="fw-bold mb-4 text-dark dash-titulo">Panel General</h2>

      <!-- ===== CARDS ===== -->
      <div class="dash-row-cards">

        <!-- Ingresos Totales -->
        <div class="dash-col dash-col-fixed">
          <div class="card text-white bg-primary shadow border-0 dash-card dash-card-ingresos">
            <div class="card-body dash-card-body">
              <h6 class="fw-semibold dash-card-subtitulo">Total de Ventas Generadas</h6>
              <h2 class="fw-bold textocard dash-card-valor">000</h2>
            </div>
          </div>
        </div>

        <!-- Clientes Registrados -->
        <div class="dash-col dash-col-fixed">
          <div class="card text-white bg-info shadow border-0 dash-card dash-card-clientes">
            <div class="card-body dash-card-body">
              <h6 class="fw-semibold dash-card-subtitulo">Clientes Registrados</h6>
              <h2 class="fw-bold textocard dash-card-valor">000</h2>
            </div>
          </div>
        </div>

        <!-- Ganancia Neta -->
        <div class="dash-col dash-col-fixed">
          <div class="card text-white bg-purple shadow border-0 dash-card dash-card-ganancia-neta">
            <div class="card-body dash-card-body">
              <h6 class="fw-semibold dash-card-subtitulo">Ganancia Neta</h6>
              <h2 class="fw-bold textocard dash-card-valor">$000</h2>
            </div>
          </div>
        </div>

        <!-- Facturas Emitidas -->
        <div class="dash-col dash-col-fixed">
          <div class="card text-white bg-success shadow border-0 dash-card dash-card-facturas">
            <div class="card-body dash-card-body">
              <h6 class="fw-semibold dash-card-subtitulo">Facturas Emitidas</h6>
              <h2 class="fw-bold textocard dash-card-valor">000</h2>
            </div>
          </div>
        </div>

      </div> <!-- Fin fila de cards -->

      <!-- ===== REGISTRO DE EVENTOS ===== -->
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
            <table class="table align-middle mb-0 dash-tabla">
              <thead class="dash-tabla-head">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Acción Realizada</th>
                  <th scope="col">Detalles</th>
                </tr>
              </thead>
              <tbody class="dash-tabla-body">
                <tr>
                  <td>1</td>
                  <td>03/11/2025</td>
                  <td><span class="texto-usuario">admin</span></td>
                  <td><span class="texto-accion">Registro de nueva venta</span></td>
                  <td><span class="texto-detalle">Factura N°154 – <strong>Total:</strong> $320.00</span></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>03/11/2025</td>
                  <td><span class="texto-usuario">juanperez</span></td>
                  <td><span class="texto-accion">Ingreso de producto al inventario</span></td>
                  <td><span class="texto-detalle">“Coca Cola 600ml” – <strong>Stock inicial:</strong> 50 unidades</span></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>03/11/2025</td>
                  <td><span class="texto-usuario">admin</span></td>
                  <td><span class="texto-accion">Actualización de producto existente</span></td>
                  <td><span class="texto-detalle">“Arroz 10kg” – <strong>Precio ajustado:</strong> $15.50</span></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>03/11/2025</td>
                  <td><span class="texto-usuario">maria</span></td>
                  <td><span class="texto-accion">Nuevo cliente agregado</span></td>
                  <td><span class="texto-detalle">“Distribuidora El Sol” – <strong>Sede:</strong> Managua</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
