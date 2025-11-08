document.getElementById("productForm").addEventListener("submit", (e) => {
    // Mostramos el mensaje primero
    e.preventDefault(); // evitamos que se recargue inmediatamente

    Swal.fire({
        title: "¡Producto agregado!",
        text: "Se ha enviado correctamente",
        icon: "success",
        timer: 1500,
        showConfirmButton: false
    });

    // Después de 1.5s hacemos el submit normal
    setTimeout(() => {
        e.target.submit();
    }, 1000);
});
