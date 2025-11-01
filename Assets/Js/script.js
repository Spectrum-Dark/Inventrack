function mostrarRegistro() {
  document.getElementById("loginScreen").classList.remove("active");
  document.getElementById("registerScreen").classList.add("active");
}

function mostrarLogin() {
  document.getElementById("registerScreen").classList.remove("active");
  document.getElementById("loginScreen").classList.add("active");
}

// Google Login
window.onload = function () {
  google.accounts.id.initialize({
    client_id: "TU_CLIENT_ID_AQUI",
    callback: handleCredentialResponse,
  });

  const btn = document.getElementById("btnGoogle");
  btn.addEventListener("click", function () {
    google.accounts.id.prompt();
  });
};

function handleCredentialResponse(response) {
  console.log("Token de Google:", response.credential);
  alert("Inicio de sesión con Google exitoso. Token recibido en consola.");
}

function registrarFacebook() {
  alert(
    "Aquí se integrará el inicio de sesión con Facebook (por ejemplo con Facebook Login API)."
  );
}

function registrarTelefono() {
  alert(
    "Aquí se integrará el registro con número telefónico (por ejemplo, usando verificación por SMS)."
  );
}
