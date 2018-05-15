<?php
class Pregunta extends ClaseBase{
    public $idpregunta = 0;
    public $idTest2 = 0;
    public $pregunta = '';

	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="pregunta";
        parent::__construct($tabla);
    }

	public function getid() {
        return $this->id;
    }

    public function getidTest2() {
        return $this->nombre;
    }
    
        public function getPregunta() {
        return $this->pregunta;
    }
    
    public function setPregunta($pregunta){
        $this->pregunta=$pregunta;
    }


    
}
?>