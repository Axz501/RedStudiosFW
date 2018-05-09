<?php
class Hospedaje extends ClaseBase{
    public $nombre = '';
    public $direccion = '';
	public $telefono = '';
    public $correo = '';
	public $descripcion = '';
	public $precio = 0;
	public $localidad = '';

	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="hospedaje";
        parent::__construct($tabla);

    }

	public function getid() {
        return $this->id;
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