<?php

// 1. Clase Padre para herencia
abstract class EntidadBase {
    protected $id;
    protected $estado;

    public function __construct($id, $estado = "Activo") {
        $this->id = $id;
        $this->estado = $estado;
    }
}

// 2. Clase Repuesto
class Repuesto extends EntidadBase {
    private $nombre;
    private $precio;
    private $stock;

    public function __construct($id, $nombre, $precio, $stock) {
        parent::__construct($id);
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    public function getPrecio() { return $this->precio; }
    public function getNombre() { return $this->nombre; }

    // Control de inventario
    public function reducirStock($cantidad) {
        if ($this->stock >= $cantidad) {
            $this->stock -= $cantidad;
            return true;
        }
        throw new Exception("Stock insuficiente para: " . $this->nombre);
    }
}

// 3. Clase DetalleOrden (Maneja los múltiples repuestos por orden)
class DetalleOrden {
    private $cloneRepuesto;
    private $cantidad;
    private $subtotal;

    public function __construct(Repuesto $cloneRepuesto, $cantidad) {
        $this->repuesto = $cloneRepuesto;
        $this->cantidad = $cantidad;
        $this->subtotal = $cloneRepuesto->getPrecio() * $cantidad;
    }

    public function getRepuesto() { return $this->repuesto; }
    public function getCantidad() { return $this->cantidad; }
    public function getSubtotal() { return $this->subtotal; }
}

// 4. Clase OrdenServicio
class OrdenServicio extends EntidadBase {
    private $vehiculo_id;
    private $fecha;
    private $descripcion;
    private $total;
    private $detalles = []; // Array de objetos DetalleOrden

    public function __construct($id, $vehiculo_id, $descripcion) {
        parent::__construct($id, "Pendiente");
        $this->vehiculo_id = $vehiculo_id;
        $this->descripcion = $descripcion;
        $this->fecha = date('Y-m-d');
        $this->total = 0;
    }

    // Ventas con múltiples repuestos
    public function agregarRepuesto(Repuesto $repuesto, $cantidad) {
        if ($this->estado === "Cerrada") {
            echo "No se pueden agregar repuestos a una orden cerrada.\n";
            return;
        }
        $detalle = new DetalleOrden($repuesto, $cantidad);
        $this->detalles[] = $detalle;
        $this->calcularTotal();
    }

    private function calcularTotal() {
        $this->total = 0;
        foreach ($this->detalles as $detalle) {
            $this->total += $detalle->getSubtotal();
        }
    }

    // Transacciones al cerrar órdenes y Control de inventario
    public function cerrarOrden() {
        try {
            // Simulamos una transacción (En vida real esto va con la base de datos)
            foreach ($this->detalles as $detalle) {
                $repuesto = $detalle->getRepuesto();
                $repuesto->reducirStock($detalle->getCantidad());
            }
            $this->estado = "Cerrada";
            echo "Orden {$this->id} cerrada exitosamente. Total a pagar: $" . $this->total . "\n";
        } catch (Exception $e) {
            echo "Error al cerrar la orden: " . $e->getMessage() . "\n";
        }
    }
}

// --- PRUEBA DEL CÓDIGO ---

// Creamos inventario
$filtroAceite = new Repuesto(1, "Filtro de Aceite", 15.50, 10);
$pastillasFreno = new Repuesto(2, "Pastillas de Freno", 45.00, 5);

// Creamos una orden para el vehículo con ID 100
$orden = new OrdenServicio(1001, 100, "Mantenimiento preventivo y frenos");

// Agregamos múltiples repuestos
$orden->agregarRepuesto($filtroAceite, 1);
$orden->agregarRepuesto($pastillasFreno, 2);

// Cerramos la orden (Esto descuenta el inventario automáticamente)
$orden->cerrarOrden();

?>