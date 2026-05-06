<!-- <form class="form-colors1" method="post">
        <fieldset class="row g-3">
            <legend>Registrar Cliente</legend>

            <div class="input-group mb-3">
                <label class="input-group-text" for="id">ID:</label>
                <input type="text" class="form-control" id="id" name="datosCliente[]"><br><br>

                <label class="input-group-text" for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="datosCliente[]"><br><br>
            </div>

            <div class="input-group col-6">
                <label class="input-group-text" for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="datosCliente[]"><br><br>
            </div>

            <div class="input-group col-6">
                <label class="input-group-text" for="direccion">direccion:</label>
                <input type="text" class="form-control" id="direccion" name="datosCliente[]"><br><br>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-secondary" type="submit">Registrar Cliente</button>
            </div>

        </fieldset>
    </form> -->

<main class="container">

    <form action="app/controller/clientecontroller.php" method="post">
        <div class="form-container">
            <h2 class="mb-4">Registrar Cliente</h2>
            <fieldset class="row g-3">
                <legend>Introduzca los datos del cliente:</legend>
                <div class="row g-3 mb-4">
                    <div class="col-md-4 w-auto">
                        <input type="text" class="form-control custom-input" name="id" placeholder="Ingrese la cedula del cliente:" aria-label="Cedula">
                    </div>
                    <div class="input-group col-md-6 w-auto">
                        <input type="text" aria-label="Nombre" name="nombre" placeholder="Nombre:" class="form-control custom-input ">
                        <input type="text" aria-label="Apellido" name="apellido" placeholder="Apellido:" class="form-control custom-input ">
                    </div>
                </div>
            </fieldset>
            <div class="row g-3 mb-4">
                <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary dropdown-toggle custom-input" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Prefijo
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">0424</a></li>
                        <li><a class="dropdown-item" href="#">0426</a></li>
                        <li><a class="dropdown-item" href="#">0416</a></li>
                        <li><a class="dropdown-item" href="#">0414</a></li>
                        <li><a class="dropdown-item" href="#">0412</a></li>
                    </ul>
                    <input type="number" class="form-control custom-input" aria-label="Text input with dropdown button" name="telefono" placeholder="Número de teléfono">
                </div>
            </div>
            <div class="input-group mb-4 shadow-sm rounded-pill overflow-hidden">
                <span class="input-group-text border-0 bg-white ps-4"><i class="bi bi-geo-alt text-danger"></i></span>
                <input type="text" class="form-control border-0 py-3" name="direccion" placeholder="Direccion" aria-label="Direccion del cliente">
            </div>

            <button class="btn w-100 py-3 search-btn" type="submit">
                <i class="bi bi-search me-2 animated-icon"></i> Registrar Cliente
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
/*
$datoscliente = $_POST['datosCliente'] ?? NULL;

$cliente = new Cliente($datoscliente[0]  ?? NULL, $datoscliente[1] ?? NULL, $datoscliente[2] ?? NULL, $datoscliente[3] ?? NULL);
//$cliente->mostrarDatos();
// echo '<br>';
// var_dump($datoscliente);
// echo '<br>';
// var_dump($cliente);
echo '<br>';*/
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>