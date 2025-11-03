<?php require_once('./Controllers/controller_home.php'); $Home = new Controller_Home_App(); $Home->Home_App(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Assets/Ico/logo.png" type="image/x-icon">
    <title>Inventrack</title>
    <link rel="stylesheet" href="./Assets/Css/styles.css">
    <script defer src="./Assets/Js/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script defer src="https://accounts.google.com/gsi/client" async></script>
</head>

<body>

    <!-- LOGIN -->
    <div class="login-container active" id="loginScreen">
        <div class="login-header">
            <div class="logo-placeholder"></div>
            <h1>Inventrack</h1>
        </div>

        <div class="login-body">
            <h2>Iniciar Sesión</h2>
            <form method="POST">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Usuario / Correo electronico" required>
                </div>

                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="contrasena" placeholder="Contraseña" required>
                </div>

                <button type="submit" name="action" value="login" class="btn-ingresar">Ingresar</button>
                <button type="button" class="btn-registrarse" onclick="mostrarRegistro()">Registrarse</button>

                <div class="forgot">
                    <a href="?view=recovery">¿Olvidaste tu contraseña?</a>
                </div>
            </form>
        </div>
    </div>

    <!-- REGISTRO -->
    <div class="register-container" id="registerScreen">
        <div class="register-body">
            <h2>Crear cuenta</h2>

            <div class="social-buttons">
                <button id="btnGoogle" class="btn-google">
                    <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google logo">
                    Registrarse con Google
                </button>
            </div>

            <div class="divider">o completa el formulario</div>

            <form method="POST">
                <input type="text" name="user_type" value="user" hidden>
                <input type="text" name="username" placeholder="Nombre completo" required>
                <input type="email" name="email" placeholder="Correo electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="password" name="confirmarpass" placeholder="Confirmar contraseña" required>
                <button type="submit" name="action" value="register" class="btn-registrar">Registrar</button>
            </form>
            <div class="volver">
                <a href="" onclick="mostrarLogin()">← Volver al inicio de sesión</a>
            </div>
        </div>
    </div>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>