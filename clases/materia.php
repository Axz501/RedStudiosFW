<?php
class Materia extends ClaseBase{
    public $idmateria = 0;
    public $nombre = '';

	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="materia";
        parent::__construct($tabla);
    }

	public function getidmateria() {
        return $this->idchat;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
}
?>