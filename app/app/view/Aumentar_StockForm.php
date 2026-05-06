<form class="form-colors2">
     <h4>Stock Actual: <?php echo $repuesto->mostrarDatos('stock') ?></h4>
    <fieldset class="row g-3">
        <legend>Aumentar Stock</legend>

        <div class="input-group col-6">
            <label class="input-group-text" for="stock">Stock a aumentar:</label>
            <input type="number" class="form-control" id="stock" name="numaumentar"><br><br>
        </div>

        <button class="btn btn-secondary" type="submit">Aumentar Stock</button>
    </fieldset>
</br>
    <fieldset class="row g-3">
        <legend>Reducir Stock</legend>

        <div class="input-group col-6">
            <label class="input-group-text" for="stock">Stock a reducir:</label>
            <input type="number" class="form-control" id="stock" name="numreducir"><br><br>
        </div>

        <button class="btn btn-secondary" type="submit">Reducir Stock</button>
    </fieldset>
</form>
<?php
$repuesto->aumentarstock($_POST['numaumentar'] ?? 0);
$repuesto->reducirstock($_POST['numreducir'] ?? 0);
?>