// Función para mostrar el paso deseado
function showStep(step) {
    document.querySelectorAll('.form-step').forEach(function(el) {
        el.classList.remove('active');
    });
    document.getElementById('step' + step).classList.add('active');
}
