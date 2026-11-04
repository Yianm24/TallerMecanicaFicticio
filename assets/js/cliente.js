const inputCedula = document.querySelector('#inputCedula');
const inputCodCliente = document.querySelector('#inputCodCliente');
const inputNombre = document.querySelector('#inputNombre');
const inputApellido = document.querySelector('#inputApellido');
const inputTelefono = document.querySelector('#inputTelefono');
const inputDireccion = document.querySelector('#inputDireccion');

const btnCancelarEdit = document.querySelector('#btn-CancelarEdit');
const btnTipoSolicitud = document.querySelector('#btn-TipoSolicitud');


console.log(inputCedula);

function editarRegistro(cod_cliente,cedula, nombre, apellido, telefono, direccion) {

    const registro = {
        cod_cliente: cod_cliente,
        cedula: cedula,
        nombre: nombre,
        apellido: apellido,
        telefono: telefono,
        direccion: direccion
    }

    autoCompletarCampos(registro);

    btnCancelarEdit.style.display = "block"

    console.log(btnTipoSolicitud.value);
    btnTipoSolicitud.textContent = "Editar";
    btnTipoSolicitud.value = "editar";
    console.log(btnTipoSolicitud.value);


}

function autoCompletarCampos(cliente) {

    // console.log(cliente.cod_cliente);
    inputCodCliente.value = cliente.cod_cliente;
    inputCedula.value = cliente.cedula;
    inputNombre.value = cliente.nombre;
    inputApellido.value = cliente.apellido;
    inputTelefono.value = cliente.telefono;
    inputDireccion.value = cliente.direccion;
}



btnCancelarEdit.addEventListener('click', () => {


    inputCodCliente.value = "";
    inputCedula.value = "";
    inputNombre.value = "";
    inputApellido.value = "";
    inputTelefono.value = "";
    inputDireccion.value = "";

    btnTipoSolicitud.textContent = "Guardar";
    btnTipoSolicitud.value = "guardar";
    btnCancelarEdit.style.display = "none"
});