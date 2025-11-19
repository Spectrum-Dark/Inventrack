class VentaPOS {
  constructor() {
    this.API_URL = "http://localhost/Inventrack/Api/api.php";
    this.productosAPI = [];

    // Seleccionamos los elementos una sola vez
    this.codigoInput = document.getElementById("codigo");
    this.precioInput = document.getElementById("precio");
    this.numeroInput = document.getElementById("numero");
    this.datalist = document.getElementById("listaProductos");
    this.btnAgregar = document.getElementById("agregarBtn");
    this.tablaBody = document.querySelector("#tablaProductos tbody");
    this.totalEl = document.getElementById("total");
    this.terminarBtn = document.getElementById("terminarBtn");
    this.cancelarBtn = document.getElementById("cancelarBtn");

    // Solo inicializamos si todos los elementos existen
    if (!this.codigoInput || !this.btnAgregar || !this.tablaBody) {
      console.warn(
        "VentaPOS: No se encontraron todos los elementos necesarios en el DOM."
      );
      return;
    }

    // No hacemos nada automáticamente → todo se activa con .iniciar()
  }

  // Método principal para activar todo el sistema
  iniciar() {
    this.cargarProductos();
    this.eventos();
    console.log("Sistema de ventas POS iniciado");
  }

  async cargarProductos() {
    try {
      const resp = await fetch(this.API_URL);
      if (!resp.ok) throw new Error("HTTP " + resp.status);
      const json = await resp.json();

      if (json.status !== "success") {
        Swal.fire("Error", "No se pudo cargar la lista de productos.", "error");
        return;
      }

      this.productosAPI = json.data;
      this.datalist.innerHTML = "";

      this.productosAPI.forEach((p) => {
        const opt = document.createElement("option");
        opt.value = `${p.id_prod} | ${p.name_prod}`;
        this.datalist.appendChild(opt);
      });

      this.limpiarInputs();
    } catch (err) {
      console.error("Error cargando productos:", err);
      Swal.fire("Error", "No se pudo conectar con la API.", "error");
    }
  }

  limpiarInputs() {
    this.codigoInput.value = "";
    this.precioInput.value = "";
    this.numeroInput.value = 0;
    this.numeroInput.disabled = false;
    this.numeroInput.removeAttribute("max");
  }

  obtenerProducto() {
    const texto = this.codigoInput.value.trim();
    if (!texto) return null;

    const partes = texto.split("|");
    const codigo = partes[0] ? partes[0].trim() : texto;

    return (
      this.productosAPI.find(
        (p) =>
          p.id_prod === codigo ||
          p.name_prod.toLowerCase() === texto.toLowerCase() ||
          p.name_prod.toLowerCase().includes(texto.toLowerCase())
      ) || null
    );
  }

  eventos() {
    // Autocompletar precio y stock al escribir
    this.codigoInput.addEventListener("input", () => {
      const p = this.obtenerProducto();
      if (!p) {
        this.precioInput.value = "";
        this.numeroInput.value = 1;
        this.numeroInput.removeAttribute("max");
        this.numeroInput.disabled = false;
        return;
      }

      this.precioInput.value = parseFloat(p.price_prod).toFixed(2);
      this.numeroInput.value = 1;
      this.numeroInput.max = p.stock_prod;

      this.numeroInput.disabled = p.stock_prod <= 0;
    });

    // Agregar producto
    this.btnAgregar.addEventListener("click", (e) => {
      e.preventDefault();
      this.agregarProducto();
    });

    // Tecla Enter en código también agrega
    this.codigoInput.addEventListener("keypress", (e) => {
      if (e.key === "Enter") {
        e.preventDefault();
        this.agregarProducto();
      }
    });

    // Terminar venta
    this.terminarBtn.addEventListener("click", () => this.terminarVenta());

    // Cancelar venta
    this.cancelarBtn.addEventListener("click", () => this.cancelarVenta());
  }

  agregarProducto() {
    const p = this.obtenerProducto();
    if (!p) {
      Swal.fire("Error", "Selecciona un producto válido.", "error");
      return;
    }

    const cantidad = parseInt(this.numeroInput.value);
    if (!cantidad || cantidad < 1 || cantidad > p.stock_prod) {
      Swal.fire("Error", `Cantidad inválida (1 - ${p.stock_prod})`, "warning");
      return;
    }

    const precio = parseFloat(p.price_prod);
    const subtotal = precio * cantidad;

    const tr = document.createElement("tr");
    tr.innerHTML = `
            <td>${p.id_prod}</td>
            <td>${p.name_prod}</td>
            <td>${precio.toFixed(2)}</td>
            <td>${cantidad}</td>
            <td data-role="subtotal">${subtotal.toFixed(2)}</td>
            <td>
                <button class="sales-delete-btn" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-trash" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 6h18M9 6v12a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V6M10 11h4M4 6l1 14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2l1-14"/>
                    </svg>
                </button>
            </td>
        `;

    this.tablaBody.appendChild(tr);

    // Botón eliminar
    tr.querySelector(".sales-delete-btn").addEventListener("click", () => {
      tr.remove();
      this.actualizarTotal();
    });

    this.actualizarTotal();
    this.limpiarInputs();
    this.codigoInput.focus();
  }

  actualizarTotal() {
    let suma = 0;
    this.tablaBody
      .querySelectorAll("td[data-role='subtotal']")
      .forEach((td) => {
        suma += parseFloat(td.textContent);
      });
    this.totalEl.textContent = "Total: " + suma.toFixed(2);
  }

  terminarVenta() {
    if (!this.tablaBody.children.length) {
      Swal.fire("Sin productos", "Agrega al menos un producto.", "warning");
      return;
    }

    Swal.fire("Éxito", "Venta completada correctamente", "success");
    this.tablaBody.innerHTML = "";
    this.actualizarTotal();
    this.limpiarInputs();
  }

  cancelarVenta() {
    Swal.fire({
      title: "¿Cancelar venta?",
      text: "Se eliminarán todos los productos agregados",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Sí, cancelar",
      cancelButtonText: "No",
    }).then((result) => {
      if (result.isConfirmed) {
        this.tablaBody.innerHTML = "";
        this.actualizarTotal();
        this.limpiarInputs();
        Swal.fire("Cancelado", "La venta ha sido cancelada", "info");
      }
    });
  }
}

// Exportar si usas módulos (recomendado)
export default VentaPOS;
