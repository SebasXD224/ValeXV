function enviarDatos(event) {
    event.preventDefault(); // Evitar el envío del formulario tradicional

    let xhr = new XMLHttpRequest();
    let url = 'guardar.php'; // La URL a la que enviar los datos
    let formData = new FormData(document.getElementById('formulario'));

    xhr.open('POST', url, true);

    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 400) {
            // La respuesta del servidor
            alert("Datos enviados corretamente");
            borrarBoton();
        } else {
            alert("Error al enviar los datos");
        }
    };

    xhr.send(formData);
    reiniciarFormulario(event)
}
function reiniciarFormulario(event) {
    event.preventDefault(); // Evita el envío del formulario para manejarlo con JavaScript

    // Obtener el formulario
    let formulario = document.getElementById('formulario');
    formulario.reset();
}
function borrarBoton(){
    let btn = document.getElementById('boton')
    btn.style.display = "none"
}