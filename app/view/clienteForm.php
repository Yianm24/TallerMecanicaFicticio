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

    <form method="post">
        <div class="form-container">
            <h2 class="mb-4">Registrar Cliente</h2>
            <fieldset class="row g-3">
                <legend>Introduzca los datos del cliente:</legend>
                <div class="row g-3 mb-4">
                    <div class="col-md-4 w-auto">
                        <input type="text" class="form-control custom-input" name="id" placeholder="Cedula del cliente:" aria-label="Cedula">
                    </div>
                    <div class="input-group col-md-6 w-auto">
                        <input type="text" aria-label="Nombre" name="nombre" placeholder="Nombre:" class="form-control custom-input ">
                        <input type="text" aria-label="Apellido" name="apellido" placeholder="Apellido:" class="form-control custom-input ">
                    </div>
                </div>
            </fieldset>
            <div class="row g-3 mb-4">
                <!--
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
            -->
                <div class="mb-4">
                    <input type="text" class="form-control custom-input" name="telefono" placeholder="Numero Telefonico:" aria-label="Número de teléfono">
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
                <th scope="col">Cedula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Se realiza un bucle (foreach) para mostrar los usuarios -->
            <?php foreach ($result as $cliente) { ?>
                <tr>
                    <td><?php echo $cliente["id"]; ?></td>
                    <td><?php echo $cliente["nombre"]; ?></td>
                    <td><?php echo $cliente["apellido"]; ?></td>
                    <td><?php echo $cliente["telefono"]; ?></td>
                    <td><?php echo $cliente["direccion"]; ?></td>
                    <td>
                        <form method="post" class="p-0 m-0 shadow-none border-0 bg-transparent" style="margin-bottom: 0;">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="delete_id" value="<?php echo $cliente['id']; ?>">
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este cliente?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
            <!-- Se cierra el ciclo -->
        </tbody>
    </table>
</main>
<?php

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>