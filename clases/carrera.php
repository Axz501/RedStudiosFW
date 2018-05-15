<?php
class Carrera extends ClaseBase{
    public $idcarrera = 0;
    public $nombre = '';


	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="carrera";
        parent::__construct($tabla);
    }

	public function getidcarrera() {
        return $this->idcarrera;
    }

    public function getNombre() {
        return $this->nombre;
    }
    
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

}
?>