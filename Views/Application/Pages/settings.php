<div class="container">

<?php
// Datos simulados (en producción vienen de la base de datos)
$usuario = [
  'nombre' => 'Juan Pérez',
  'correo' => 'juan.perez@example.com',
  'idioma' => 'Español',
  'copias' => '1 por semana'
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Configuración - Inventrack</title>

  <!-- ====== Librerías Externas ====== -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- ====== CSS Propio ====== -->
  <link rel="stylesheet" href="../../assets/css/configuracion.css">

</head>
<body>

  <div class="config-layout">
    <div class="config-panel">

      <h2 class="config-titulo">
        <i class="fa-solid fa-sliders"></i> Configuración del Sistema
      </h2>

      <!-- ====== Preferencias Generales ====== -->
      <section class="config-card">
        <div class="config-card-header" onclick="toggleSection('preferencias')">
          <h3><i class="fa-solid fa-gear"></i> Preferencias Generales</h3>
          <i class="fa-solid fa-chevron-down toggle-icon" id="toggle-preferencias"></i>
        </div>
        <div class="config-card-content" id="content-preferencias">
          <div class="config-item">
            <div class="config-label">
              <i class="fa-solid fa-language"></i>
              <span>Idioma</span>
            </div>
            <select class="config-input">
              <option selected><?= $usuario['idioma']; ?></option>
              <option>Inglés</option>
              <option>Portugués</option>
              <option>Francés</option>
            </select>
          </div>
        </div>
      </section>

      <!-- ====== Copias de Seguridad ====== -->
      <section class="config-card">
        <div class="config-card-header" onclick="toggleSection('copias')">
          <h3><i class="fa-solid fa-cloud"></i> Copias de Seguridad</h3>
          <i class="fa-solid fa-chevron-down toggle-icon" id="toggle-copias"></i>
        </div>
        <div class="config-card-content" id="content-copias">

          <div class="config-item">
            <div class="config-label">
              <i class="fa-solid fa-clock-rotate-left"></i>
              <span>Frecuencia de copias</span>
            </div>
            <select class="config-input">
              <option selected><?= $usuario['copias']; ?></option>
              <option>1 por día</option>
              <option>1 por semana</option>
              <option>1 por mes</option>
            </select>
          </div>

          <div class="config-item">
            <div class="config-label">
              <i class="fa-solid fa-download"></i>
              <span>Generar copia manual</span>
            </div>
            <button class="btn-secundario"><i class="fa-solid fa-file-export"></i> Crear copia ahora</button>
          </div>

          <div class="config-item">
            <div class="config-label">
              <i class="fa-solid fa-upload"></i>
              <span>Restaurar copia</span>
            </div>
            <input type="file" id="backupFile" class="config-input" accept=".sql,.zip">
            <button class="btn-secundario"><i class="fa-solid fa-rotate-left"></i> Restaurar</button>
          </div>

          <div class="config-item">
            <div class="config-label">
              <i class="fa-solid fa-trash"></i>
              <span>Eliminar copias antiguas</span>
            </div>
            <button class="btn-peligro"><i class="fa-solid fa-trash-can"></i> Eliminar</button>
          </div>

        </div>
      </section>

      <!-- ====== Configuración del Usuario ====== -->
      <section class="config-card">
        <div class="config-card-header" onclick="toggleSection('usuario')">
          <h3><i class="fa-solid fa-user-cog"></i> Configuración del Usuario</h3>
          <i class="fa-solid fa-chevron-down toggle-icon" id="toggle-usuario"></i>
        </div>
        <div class="config-card-content" id="content-usuario">
          <div class="config-item">
            <div class="config-label">
              <i class="fa-solid fa-user"></i>
              <span>Nombre</span>
            </div>
            <input type="text" value="<?= $usuario['nombre']; ?>" class="config-input">
          </div>

          <div class="config-item">
            <div class="config-label">
              <i class="fa-solid fa-envelope"></i>
              <span>Correo</span>
            </div>
            <input type="email" value="<?= $usuario['correo']; ?>" class="config-input">
          </div>

          <div class="config-item">
            <div class="config-label">
              <i class="fa-solid fa-key"></i>
              <span>Contraseña</span>
            </div>
            <button class="btn-secundario"><i class="fa-solid fa-lock"></i> Cambiar</button>
          </div>

          <div class="config-item">
            <div class="config-label">
              <i class="fa-solid fa-image"></i>
              <span>Imagen de perfil</span>
            </div>
            <button class="btn-secundario"><i class="fa-solid fa-image-portrait"></i> Cambiar foto</button>
          </div>
        </div>
      </section>

      <!-- ====== Botón Guardar Cambios ====== -->
      <div class="config-save">
        <button class="btn-guardar"><i class="fa-solid fa-save"></i> Guardar cambios</button>
      </div>

    </div>
  </div>

  <script>
    // Función para alternar la visibilidad de las secciones
    function toggleSection(sectionId) {
      const content = document.getElementById(`content-${sectionId}`);
      const toggleIcon = document.getElementById(`toggle-${sectionId}`);
      
      content.classList.toggle('open');
      toggleIcon.classList.toggle('rotated');
    }

    // Inicializar una sección abierta por defecto
    document.addEventListener('DOMContentLoaded', function() {
      toggleSection('preferencias');
    });
  </script>

</body>
</html>


</div>