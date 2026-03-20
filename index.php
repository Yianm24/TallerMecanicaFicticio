<?php
abstract class Base{
protected $id;

    public function __construct($id)
    {
        $this->id = $id;

    }

    public function getId(){
        return $this->id;}

    
}

class Cliente extends Base{

    private $nombre;
    private $telefono;
    private $direccion;

    public function __construct($id, $nombre, $telefono,$direccion)
    {
        parent::__construct($id);
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }

    public function mostrarDatos($opcion = null) {
        if ($opcion === null) {
            echo "ID: {$this->id}, Nombre: {$this->nombre}, Teléfono: {$this->telefono}, Dirección: {$this->direccion}<br>";
        } else {
            switch ($opcion) {
                case 1:
                    echo $this->id;
                    break;
                case 2:
                    echo $this->nombre;
                    break;
                case 3:
                    echo $this->telefono;
                    break;
                case 4:
                    echo $this->direccion;
                    break;
            }
        }
    }
}

class Vehiculo extends Base{
private $marca;
private $modelo;
private $ano;
private $idCliente;
private $placa;

    public function __construct($id, $marca, $modelo, $ano, $idCliente, $placa)
    {
        parent::__construct($id);
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->idCliente = $idCliente;
        $this->placa = $placa;
    }


}

class Repuesto extends Base{
    private $nombre;
    private $precio;
    private $stock;
    
    public function __construct($id, $nombre, $precio, $stock)
    {
        parent::__construct($id);
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >
    <title>Poo1</title>
</head>
<body>
    
    <form method="post">
        <fieldset class="row g-3">
            <legend>Registrar Cliente</legend>
       
        <div class="input-group col-md-6">
            <label class="input-group-text" for="id">ID:</label>
            <input type="text" class="form-control" id="id" name="datos[]"><br><br>
        </div>
        
        <div class="input-group ">
            <label class="input-group-text" for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="datos[]"><br><br>
        </div>    
        
        <div class="input-group ">
            <label class="input-group-text" for="telefono">Teléfono:</label>
            <input type="text" class="form-control" id="telefono" name="datos[]"><br><br>
        </div>
        
        <div class="input-group">
            <label class="input-group-text" for="direccion">direccion:</label>
            <input type="text" class="form-control" id="direccion" name="datos[]"><br><br>
        </div>

            <button class="btn btn-success" type="submit" >Registrar Cliente</button>
         </fieldset>
    </form>
    <?php  

    $datos = $_POST['datos'];

    $cliente = new Cliente($datos[0], $datos[1], $datos[2], $datos[3]);
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
      <td><?php $cliente->mostrarDatos(1);?></td>
      <td><?php $cliente->mostrarDatos(2);?></td>
      <td><?php $cliente->mostrarDatos(3);?></td>
      <td><?php $cliente->mostrarDatos(4);?></td>
    </tr>
    <tr>
      
  </tbody>
</table>
    
</body>
</html>

