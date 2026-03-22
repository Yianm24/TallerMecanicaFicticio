<form method="post">
    <fieldset class="row g-3">
        <legend>Registrar Vehiculo</legend>

        <div class="input-group col-6">
            <label class="input-group-text" for="id">ID:</label>
            <input type="text" class="form-control" id="id" name="datosVehiculo[]"><br><br>
        </div>

        <div class="input-group col-6">
            <label class="input-group-text" for="marca">Marca:</label>
            <input type="text" class="form-control" id="marca" name="datosVehiculo[]"><br><br>
        </div>

        <div class="input-group col-6">
            <label class="input-group-text" for="modelo">Modelo:</label>
            <input type="text" class="form-control" id="modelo" name="datosVehiculo[]"><br><br>
        </div>

        <div class="input-group col-6">
            <label class="input-group-text" for="ano">Año:</label>
            <input type="text" class="form-control" id="ano" name="datosVehiculo[]"><br><br>
        </div>

        <div class="input-group col-6">
            <label class="input-group-text" for="placa">Placa:</label>
            <input type="text" class="form-control" id="placa" name="datosVehiculo[]"><br><br>
        </div>

        <button class="btn btn-success" type="submit">Registrar Vehículo</button>
    </fieldset>
</form>
<?php

$datosvehiculo = $_POST['datosVehiculo'] ?? NULL;

$vehiculo = new Vehiculo($datosvehiculo[0]  ?? NULL, $datosvehiculo[1] ?? NULL, $datosvehiculo[2] ?? NULL, $datosvehiculo[3] ?? NULL, $datosvehiculo[4] ?? NULL, $datosvehiculo[5] ?? NULL);
echo '<br>';
var_dump($datosvehiculo);
echo '<br>';
var_dump($vehiculo);
echo '<br>';
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Año</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td><?php $vehiculo->mostrarDatos(1); ?></td>
            <td><?php $vehiculo->mostrarDatos(2); ?></td>
            <td><?php $vehiculo->mostrarDatos(3); ?></td>
            <td><?php $vehiculo->mostrarDatos(4); ?></td>
        </tr>
        <tr>

    </tbody>
</table>
