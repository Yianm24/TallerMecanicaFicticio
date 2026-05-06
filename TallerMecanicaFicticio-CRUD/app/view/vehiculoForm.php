<!-- <form class="form-colors1" method="post">
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

        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-secondary" type="submit">Registrar Vehículo</button>
        </div>
    </fieldset>
</form> -->

<main class="container">

    <form>
        <div class="form-container">
            <h2 class="mb-4">Registrar Vehículo</h2>
            <fieldset class="row g-3">
                <legend>Introduzca los datos del vehículo:</legend>
                <div class="row g-3 mb-4">
                    <div class="col-12">
                        <input type="text" class="form-control custom-input" name="datosVehiculo[]" placeholder="Ingrese la placa del vehículo:" aria-label="Placa">
                    </div>
                    <div class="input-group col-md-6">
                        <input type="text" aria-label="Marca" name="datosVehiculo[]" placeholder="Marca:" class="form-control custom-input">
                        <input type="text" aria-label="Modelo" name="datosVehiculo[]" placeholder="Modelo:" class="form-control custom-input">
                        <select aria-label="Ano" name="datosVehiculo[]" class="form-control custom-input">
                            <option value="" disabled selected>Año:</option>
                            <?php
                            $anioActual = date("Y");
                            for ($i = $anioActual; $i >= 1950; $i--) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>

                    </div>
                </div>
            </fieldset>

            <div class="input-group mb-4 shadow-sm rounded-pill overflow-hidden">
                <span class="input-group-text border-0 bg-white ps-4"><i class="bi bi-geo-alt text-danger"></i></span>
                <input type="text" class="form-control border-0 py-3" placeholder="Otros detalles" aria-label="Ingresar Detalles sobre el vehiculo" name="datosVehiculo[]">
            </div>
            <button class="btn w-100 py-3 search-btn" type="button">
                <i class="bi bi-search me-2 animated-icon"></i> Registrar Vehículo
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

// $datosvehiculo = $_POST['datosVehiculo'] ?? NULL;

// $vehiculo = new Vehiculo($datosvehiculo[0]  ?? NULL, $datosvehiculo[1] ?? NULL, $datosvehiculo[2] ?? NULL, $datosvehiculo[3] ?? NULL, $datosvehiculo[4] ?? NULL, $datosvehiculo[5] ?? NULL);
// echo '<br>';
?>