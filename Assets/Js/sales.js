const btnAgregar = document.getElementById("agregarBtn");
const tabla = document.getElementById("tablaProductos").querySelector("tbody");
const codigoInput = document.getElementById("codigo");
const numeroInput = document.getElementById("numero");
const totalEl = document.getElementById("total");
const terminarBtn = document.getElementById("terminarBtn");
const cancelarBtn = document.getElementById("cancelarBtn");

let contador = 3;
let total = 500;

function actualizarTotal() {
  let suma = 0;
  tabla.querySelectorAll("tr").forEach((fila) => {
    const valor = parseFloat(fila.children[5].textContent);
    suma += valor;
  });
  total = suma;
  totalEl.textContent = "Total: " + total.toFixed(2);
}

// Función para agregar icono dinámico
function crearIconoBasura() {
  return `
        <svg xmlns="http://www.w3.org/2000/svg" class="icon-trash" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M3 6h18M9 6v12a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V6M10 11h4M4 6l1 14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2l1-14"/>
        </svg>
      `;
}

btnAgregar.addEventListener("click", () => {
  const codigo = codigoInput.value.trim();
  const numero = numeroInput.value.trim();

  if (codigo === "" || numero === "") {
    alert("Por favor ingrese el código y número del producto.");
    return;
  }

  const precio = Math.floor(Math.random() * 200) + 50;
  const cantidad = 1;
  const subtotal = precio * cantidad;

  const fila = document.createElement("tr");
  fila.innerHTML = `
        <td>${contador++}</td>
        <td>${codigo}</td>
        <td>${numero}</td>
        <td>${precio.toFixed(2)}</td>
        <td>${cantidad}</td>
        <td>${subtotal.toFixed(2)}</td>
        <td><button class="delete-btn" title="Eliminar producto">${crearIconoBasura()}</button></td>
      `;

  tabla.appendChild(fila);
  actualizarTotal();

  codigoInput.value = "";
  numeroInput.value = "";
  codigoInput.focus();

  fila.querySelector(".delete-btn").addEventListener("click", () => {
    fila.remove();
    actualizarTotal();
  });
});

document.querySelectorAll(".delete-btn").forEach((btn) => {
  btn.addEventListener("click", (e) => {
    e.target.closest("tr").remove();
    actualizarTotal();
  });
});

terminarBtn.addEventListener("click", () => {
  if (tabla.children.length === 0) {
    alert("No hay productos en la venta.");
    return;
  }
  alert("✅ Venta completada con éxito.\nTotal: " + total.toFixed(2));
  tabla.innerHTML = "";
  actualizarTotal();
});

cancelarBtn.addEventListener("click", () => {
  if (confirm("¿Deseas cancelar la venta actual?")) {
    tabla.innerHTML = "";
    actualizarTotal();
  }
});
