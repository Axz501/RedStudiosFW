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
    public function getDescripcion() {
        return $this->descripcion;
    }
    public function getPrecio() {
        return $this->precio;
    }
    public function getLocalidad() {
        return $this->localidad;
    }

	public function agregar(){
	        
	        $nombre=$this->getNombre();
	        $direccion=$this->getDireccion();
	        $telefono=$this->getTelefono();
	        $descripcion=$this->getDescripcion();
	        $precio=$this->getPrecio();
	        $localidad=$this->getLocalidad();

	        $stmt = $this->getDB()->prepare( 
	            "INSERT INTO hospedaje 
	        (nombre, direccion,telefono,descripcion,precio,localidad) 
	           VALUES (?,?,?,?,?,?)" );
	        $stmt->bind_param("ssssis",$nombre,
	            $direccion,$telefono,$descripcion,$precio,$localidad);
	        return $stmt->execute();
	    }


}
?>