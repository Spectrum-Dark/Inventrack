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
  <!-- Elementos del vistas -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="../../../Assets/Css/dashboard.css">
  <link rel="stylesheet" href="../../../Assets/Css/products.css">
  <link rel="stylesheet" href="../../../Assets/Css/listproducts.css">

</head>

<body>
  <div class="sidebar">
    <h2 class="title_and_logo">Inventrack</h2>
    <ul class="menu">
      <li><a href="?view=dashboard" class="menu-item"><i class="fas fa-home"></i>Inicio</a></li>
      <li><a href="?view=products" class="menu-item"><i class="fas fa-box"></i>Productos</a></li>
      <li><a href="?view=listproducts" class="menu-item"><i class="fas fa-box"></i>Lista Prod..</a></li>
      <li><a href="?view=sales" class="menu-item"><i class="fas fa-chart-bar"></i>Ventas</a></li>
      <li><a href="?view=report" class="menu-item"><i class="fas fa-file-alt"></i>Reportes</a></li>
      <li><a href="?view=settings" class="menu-item"><i class="fas fa-cog"></i>Configuración</a></li>
    </ul>
  </div>

  <div class="main">
    <!-- Vistas de las paginas -->
    <?php require_once('../../../Controllers/controller.php');
    $pages = new Controller();
    $pages::Paginas(); ?>
  </div>

</body>

</html>