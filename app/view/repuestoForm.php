<form class="form-colors2" method="post">
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
        
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-secondary" type="submit">Registrar Repuesto</button>
        </div>
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
            <td><?php $repuesto->mostrarDatos('id'); ?></td>
            <td><?php $repuesto->mostrarDatos('nombre'); ?></td>
            <td><?php $repuesto->mostrarDatos('precio'); ?></td>
            <td><?php $repuesto->mostrarDatos('stock'); ?></td>
        </tr>

    </tbody>
</table>