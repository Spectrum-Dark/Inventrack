<?php require_once('../../../Controllers/controller.php'); $App = new Controller(); $App::Session_App(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventrack - Inventario</title>
  <!-- css principal -->
  <link rel="stylesheet" href="../../../Assets/Css/app.css">
  <link rel="stylesheet" href="../../../Assets/Css/pages.css">
  <script defer src="../../../Assets/Js/script.js"></script>
  <script defer src="../../../Assets/Js/sales.js"></script>
  <script defer src="../../../Assets/Js/listproducts.js"></script>
  <!-- Elementos del vistas -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="../../../Assets/Css/dashboard.css">
  <link rel="stylesheet" href="../../../Assets/Css/products.css">
  <link rel="stylesheet" href="../../../Assets/Css/listproducts.css">
  <link rel="stylesheet" href="../../../Assets/Css/sales.css">
  <link rel="stylesheet" href="../../../Assets/Css/settings.css">
  <link rel="stylesheet" href="../../../Assets/Css/reports.css">
   <!-- ====== Librerías Externas ====== -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Fuentes e iconos -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>

<body>
  <?php $view = $_GET['view'] ?? 'dashboard'; ?>

  <div class="sidebar">
    <h2 class="title_and_logo">Inventrack</h2>
    <ul class="menu">
      <li><a href="?view=dashboard" class="menu-item <?= $view == 'dashboard' ? 'active' : '' ?>"><i class="fas fa-home"></i>Inicio</a></li>
      <li><a href="?view=products" class="menu-item <?= $view == 'products' ? 'active' : '' ?>"><i class="fas fa-box"></i>Productos</a></li>
      <li><a href="?view=listproducts" class="menu-item <?= $view == 'listproducts' ? 'active' : '' ?>"><i class="fas fa-box"></i>Lista Prod..</a></li>
      <li><a href="?view=sales" class="menu-item <?= $view == 'sales' ? 'active' : '' ?>"><i class="fas fa-chart-bar"></i>Ventas</a></li>
      <li><a href="?view=report" class="menu-item <?= $view == 'report' ? 'active' : '' ?>"><i class="fas fa-file-alt"></i>Reportes</a></li>
      <li><a href="?view=settings" class="menu-item <?= $view == 'settings' ? 'active' : '' ?>"><i class="fas fa-cog"></i>Configuración</a></li>
      <li><a href="?view=signout" class="menu-item <?= $view == 'signout' ? 'active' : '' ?>"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a></li>
    </ul>
  </div>

  <div class="main">
    <!-- Vistas de las paginas -->
    <?php
      $App::Paginas();
    ?>
  </div>
</body>
</html>
