<form method="post">
    <fieldset class="row g-3">
        <legend>Registrar Repuesto</legend>

        <div class="input-group col-6">
            <label class="input-group-text" for="id">ID:</label>
            <input type="text" class="form-control" id="id" name="datosRepuesto[]"><br><br>
        </div>

        <div class="input-group col-6">
            <label class="input-group-text" for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="datosRepuesto[]"><br><br>
        </div>

        <div class="input-group col-6">
            <label class="input-group-text" for="precio">Precio:</label>
            <input type="number" class="form-control" id="precio" name="datosRepuesto[]"><br><br>
        </div>

        <div class="input-group col-6">
            <label class="input-group-text" for="stock">Stock:</label>
            <input type="number" class="form-control" id="stock" name="datosRepuesto[]"><br><br>
        </div>

        <button class="btn btn-success" type="submit">Registrar Repuesto</button>
    </fieldset>
</form>
<?php

$datosrepuesto = $_POST['datosRepuesto'] ?? NULL;

$repuesto = new Repuesto($datosrepuesto[0]  ?? NULL, $datosrepuesto[1] ?? NULL, $datosrepuesto[2] ?? NULL, $datosrepuesto[3] ?? NULL);
// echo '<br>';
// var_dump($datosrepuesto);
// echo '<br>';
// var_dump($repuesto);
echo '<br>';
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td><?php $repuesto->mostrarDatos(1); ?></td>
            <td><?php $repuesto->mostrarDatos(2); ?></td>
            <td><?php $repuesto->mostrarDatos(3); ?></td>
            <td><?php $repuesto->mostrarDatos(4); ?></td>
        </tr>
        <tr>

    </tbody>
</table>