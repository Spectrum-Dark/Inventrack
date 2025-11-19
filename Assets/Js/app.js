document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("productForm");

  // Si por alguna razón el formulario no existe → no hacemos nada y no explota
  if (!form) {
    console.warn("Formulario con id='productForm' no encontrado en la página");
    return;
  }

  // Todo el código original, ahora seguro
  form.addEventListener("submit", (e) => {
    e.preventDefault(); // Detenemos el envío por defecto

    const nombre = document.getElementById("nombre").value.trim();
    const precio = document.getElementById("precio").value.trim();
    const cantidad = document.getElementById("cantidad").value.trim();
    const descripcion = document.getElementById("descripcion").value.trim();
    const categoria = document.getElementById("categoria").value;
    const proveedor = document.getElementById("proveedor").value.trim();

    // Validación de campos vacíos
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
        text: "Por favor, completa todos los campos obligatorios.",
      });
      return; // No envía el formulario
    }

    // Mensaje de carga
    Swal.fire({
      title: "Agregando producto...",
      text: "Por favor espera",
      icon: "info",
      allowOutsideClick: false,
      showConfirmButton: false,
      didOpen: () => {
        Swal.showLoading();
      },
    });

    // Pequeña pausa visual y luego enviamos el formulario real
    setTimeout(() => {
      form.submit(); // Aquí sí se envía el formulario al servidor
    }, 1200);

    // Mensaje de éxito (opcional, se muestra después del envío)
    setTimeout(() => {
      Swal.fire({
        title: "¡Producto agregado!",
        text: "Se ha guardado correctamente",
        icon: "success",
        timer: 2000,
        showConfirmButton: false,
      });
    }, 1400);
  });
});
