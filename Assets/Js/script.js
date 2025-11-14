function mostrarRegistro() {
  document.getElementById("loginScreen").classList.remove("active");
  document.getElementById("registerScreen").classList.add("active");
}

function mostrarLogin() {
  document.getElementById("registerScreen").classList.remove("active");
  document.getElementById("loginScreen").classList.add("active");
}

if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}
