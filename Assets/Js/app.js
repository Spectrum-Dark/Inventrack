document.getElementById("productForm").addEventListener("submit", (e) => {
  e.preventDefault(); // Detenemos envío inicial

  const nombre = document.getElementById("nombre").value.trim();
  const precio = document.getElementById("precio").value.trim();
  const cantidad = document.getElementById("cantidad").value.trim();
  const descripcion = document.getElementById("descripcion").value.trim();
  const categoria = document.getElementById("categoria").value;
  const proveedor = document.getElementById("proveedor").value.trim();

  // Validamos campos vacíos
  if (
    nombre === "" ||
    precio === "" ||
    cantidad === "" ||
    descripcion === "" ||
    categoria === "" ||
    proveedor === ""
  ) {
    Swal.fire({
      icon: "error",
      title: "Datos incompletos",
      text: "Por favor, ingresa datos válidos en todos los campos obligatorios.",
    });
    return; // no enviar
  }

  // Si pasa la validación, enviar formulario
  Swal.fire({
    title: "Agregando producto...",
    text: "Por favor espera",
    icon: "info",
    showConfirmButton: false,
    timer: 1000,
  });

  setTimeout(() => {
    e.target.submit();

    Swal.fire({
      title: "¡Producto agregado!",
      text: "Se ha enviado correctamente",
      icon: "success",
      timer: 1500,
      showConfirmButton: false,
    });
  }, 1000);
});
