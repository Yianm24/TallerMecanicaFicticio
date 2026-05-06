<!-- <form class="form-colors2" method="post">
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
</form> -->


<main class="container">

    <form>
        <div class="form-container">
            <h2 class="mb-4">Registrar Repuesto</h2>
            <fieldset class="row g-3">
                <legend>Introduzca los datos del repuesto:</legend>
                <div class="row g-3 mb-4">
                    <div class="col-12">
                        <input type="text" class="form-control custom-input" name="datosRepuesto[]" placeholder="Ingrese el nombre del repuesto:" aria-label="Nombre">
                    </div>
                    <div class="input-group col-md-6">
                        <input type="number" aria-label="Precio" name="datosRepuesto[]" placeholder="Precio:" class="form-control custom-input">
                        <input type="number" aria-label="Stock" name="datosRepuesto[]" placeholder="Stock:" class="form-control custom-input">
                    </div>
                </div>
            </fieldset>
            <button class="btn w-100 py-3 search-btn" type="button">
                <i class="bi bi-search me-2 animated-icon"></i> Registrar Repuesto
            </button>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>John</td>
                <td>Doe</td>
                <td>@social</td>
            </tr>
        </tbody>
    </table>
</main>


<?php

// $datosrepuesto = $_POST['datosRepuesto'] ?? NULL;

// $repuesto = new Repuesto($datosrepuesto[0]  ?? NULL, $datosrepuesto[1] ?? NULL, $datosrepuesto[2] ?? NULL, $datosrepuesto[3] ?? NULL);

// echo '<br>';
?>
