<?php
class Test extends ClaseBase{
    public $idtest = 0;
    public $nombre = '';
    public $archivo = '';

	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="test";
        parent::__construct($tabla);
    }

	public function getidtest() {
        return $this->idtest;
    }

    public function getidNombre() {
        return $this->nombre;
    }
    
        public function getArchivo() {
        return $this->archivo;
    }
    
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function setArchivo($archivo){
        $this->archivo=$archivo;
    }


    
}
?>