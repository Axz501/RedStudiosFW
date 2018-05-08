<?php
require_once "/db.php";
class Hospedaje {
    public $nombre = '';
    public $direccion = '';
	public $telefono = '';
    public $correo = '';
	public $descripcion = '';
	public $precio = 0;
	public $localidad = '';
	public function __construct($nombre='',$direccion="",$telefono="",$correo="",$descripcion="",$precio="",$localidad="") {
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->telefono=$telefono;
        $this->correo=$correo;
		$this->descripcion=$descripcion;
        $this->precio=$precio;
        $this->localidad=$localidad;
    }
	
    public function getNombre() {
        return $this->nombre;
    }
    public function getDireccion() {
        return $this->direccion;
    }
    public function getTelefono() {
        return $this->telefono;
    }
    public function getCorreo() {
        return $this->correo;
    }
    public function getDescripcion() {
        return $this->descripcion;
    }
    public function getPrecio() {
        return $this->precio;
    }
    public function getLocalidad() {
        return $this->localidad;
    }


}
?>