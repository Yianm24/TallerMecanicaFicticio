<!DOCTYPE html>
  <html lang="es">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <title>Poo1</title>
  </head>

  <body>

      <form  method="post">
          <fieldset class="row g-3">
              <legend>Registrar Cliente</legend>

              <div class="input-group col-6">
                  <label class="input-group-text" for="id">ID:</label>
                  <input type="text" class="form-control" id="id" name="datosCliente[]"><br><br>
              </div>

              <div class="input-group col-6">
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

              <button class="btn btn-success" type="submit">Registrar Cliente</button>
          </fieldset>
      </form>
      <?php

        $datoscliente = $_POST['datosCliente'] ?? NULL;

        $cliente = new Cliente($datoscliente[0]  ?? NULL, $datoscliente[1] ?? NULL, $datoscliente[2] ?? NULL, $datoscliente[3] ?? NULL);
        $cliente->mostrarDatos();
        echo '<br>' ;
        var_dump($datoscliente);
        echo '<br>' ;
        var_dump($cliente);
        echo '<br>' ;
        ?>
      <table class="table">
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Id</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">telefono</th>
                  <th scope="col">direccion</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <th scope="row">1</th>
                  <td><?php $cliente->mostrarDatos(1); ?></td>
                  <td><?php $cliente->mostrarDatos(2); ?></td>
                  <td><?php $cliente->mostrarDatos(3); ?></td>
                  <td><?php $cliente->mostrarDatos(4); ?></td>
              </tr>
              <tr>

          </tbody>
      </table>

  </body>

  </html>