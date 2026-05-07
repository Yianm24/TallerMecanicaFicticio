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

    <form method="post">
        <div class="form-container">
            <h2 class="mb-4">Registrar Repuesto</h2>
            <fieldset class="row g-3">
                <legend>Introduzca los datos del repuesto:</legend>
                <div class="row g-3 mb-4">
                    <div class="col-12">
                        <input type="text" class="form-control custom-input" name="nombre" placeholder="Ingrese el nombre del repuesto:" aria-label="Nombre">
                    </div>
                    <div class="input-group col-md-6">
                        <input type="number" aria-label="Precio" name="precio" placeholder="Precio:" class="form-control custom-input">
                        <input type="number" aria-label="Stock" name="stock" placeholder="Stock:" class="form-control custom-input">
                    </div>
                </div>
            </fieldset>
            <button class="btn w-100 py-3 search-btn" type="submit">
                <i class="bi bi-search me-2 animated-icon"></i> Registrar Repuesto
            </button>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
    <?php foreach ($result as $repuesto) { ?>
                <tr>
                    <td><?php echo $repuesto["id"]; ?></td>
                    <td><?php echo $repuesto["nombre"]; ?></td>
                    <td><?php echo $repuesto["precio"]; ?></td>
                    <td><?php echo $repuesto["stock"]; ?></td>
                    <td>
                        <form method="post" class="p-0 m-0 shadow-none border-0 bg-transparent" style="margin-bottom: 0;">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="delete_id" value="<?php echo $repuesto['id']; ?>">
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este repuesto?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
                

            <?php } ?>
        </tbody>
    </table>
</main>