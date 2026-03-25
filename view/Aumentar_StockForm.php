<form>
    <fieldset class="row g-3">
        <legend>Aumentar Stock</legend>

        <h2>Stock Actual: <?php echo $repuesto->mostrarDatos('stock')?></h2>

        <div class="input-group col-6">
            <label class="input-group-text" for="stock">Stock a aumentar:</label>
            <input type="number" class="form-control" id="stock" name="numaumentar"><br><br>
        </div>

        <button class="btn btn-success" type="submit">Aumentar Stock</button>
    </fieldset>

    <fieldset class="row g-3">
        <legend>Reducir Stock</legend>

        <div class="input-group col-6">
            <label class="input-group-text" for="id">ID:</label>
            <input type="text" class="form-control" id="id" name="datosRepuesto[]"><br><br>
        </div>

        <div class="input-group col-6">
            <label class="input-group-text" for="stock">Stock a reducir:</label>
            <input type="number" class="form-control" id="stock" name="numreducir"><br><br>
        </div>

        <button class="btn btn-success" type="submit">Reducir Stock</button>
    </fieldset>
</form>