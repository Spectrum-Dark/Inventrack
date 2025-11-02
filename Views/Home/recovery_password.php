<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperar Cuenta - Inventrack</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="./Assets/Css/recovery.css">
  <script defer src="./Assets/Js/recovery.js"></script>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="header">
        <h1>Inventrack</h1>
      </div>

      <!-- Formulario de correo -->
      <div id="step1" class="form-step active">
        <h2>Recuperar Cuenta</h2>
        <form class="form-user" action="" method="POST">
          <div class="input-group">
            <i class="fa-solid fa-user"></i>
            <input type="email" name="email" placeholder="Ingresa tu correo electrónico" required>
          </div>
          <button type="submit" class="btn">Enviar enlace de recuperación</button>
        </form>
        <?php if (!empty($messageEmail)): ?>
          <p class="message"><?= htmlspecialchars($messageEmail) ?></p>
        <?php endif; ?>
        <a class="next" onclick="showStep(2)">Siguiente</a>
        <a href="?" class="next"><i class="fa-solid fa-arrow-left"></i> Volver al inicio de sesión</a>
      </div>

      <!-- Formulario de código -->
      <div id="step2" class="form-step">
        <h2>Ingresar Código de Recuperación</h2>
        <form class="form-user" action="" method="POST">
          <div class="input-group">
            <i class="fa-solid fa-hashtag"></i>
            <input type="text" name="codigo" placeholder="Ingresa tu código" required>
          </div>
          <div class="input-group">
            <i class="fa-solid fa-key"></i>
            <input type="text" name="codigo" placeholder="Ingresa nueva contraseña" required>
          </div>
          <button type="submit" class="btn">Enviar</button>
        </form>
        <?php if (!empty($messageCodigo)): ?>
          <p class="message"><?= htmlspecialchars($messageCodigo) ?></p>
        <?php endif; ?>
        <a href="?" class="next"><i class="fa-solid fa-arrow-left"></i> Volver al login</a>
      </div>

    </div>
  </div>
</body>

</html>