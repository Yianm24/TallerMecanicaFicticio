const inputPLaca = document.querySelector('#inputPlaca');
const inputModelo = document.querySelector('#inputModelo');
const inputMarca = document.querySelector('#inputMarca');
const selectAno = document.querySelector('#selectAno');
const inputDetalles = document.querySelector('#inputDetalles');
const inputCodVehiculo = document.querySelector('#inputCodVehiculo');
const btnCancelarEdit = document.querySelector('#btn-CancelarEdit');
const btnTipoSolicitud = document.querySelector('#btn-TipoSolicitud');


console.log(inputPLaca);

function editarRegistro(placa, modelo, marca, detalles, ano, cod_vehiculo) {

    const registro = {
        placa: placa,
        modelo: modelo,
        marca: marca,
        detalles: detalles,
        ano: ano,
        cod_vehiculo: cod_vehiculo
    }

    autoCompletarCampos(registro);

    btnCancelarEdit.style.display = "block"

    console.log(btnTipoSolicitud.value);
    btnTipoSolicitud.textContent = "Editar";
    btnTipoSolicitud.value = "editar";
    console.log(btnTipoSolicitud.value);


}

function autoCompletarCampos(vehiculo) {

    // console.log(vehiculo.cod_vehiculo);
    inputCodVehiculo.value = vehiculo.cod_vehiculo;
    inputPLaca.value = vehiculo.placa;
    inputModelo.value = vehiculo.modelo;
    inputMarca.value = vehiculo.marca;
    selectAno.value = vehiculo.ano;
    inputDetalles.value = vehiculo.detalles;

}



btnCancelarEdit.addEventListener('click', () => {


    inputCodVehiculo.value = "";
    inputPLaca.value = "";
    inputModelo.value = "";
    inputMarca.value = "";
    selectAno.value = "";
    inputDetalles.value = "";

    btnTipoSolicitud.textContent = "Guardar";
    btnTipoSolicitud.value = "guardar";
    btnCancelarEdit.style.display = "none"
});