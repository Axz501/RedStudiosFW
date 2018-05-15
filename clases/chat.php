<?php
class Chat extends ClaseBase{
    public $idchat = 0;
    public $idEst1 = 0;
    public $idEst2 = 0;

	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="chat";
        parent::__construct($tabla);
    }

	public function getidchat() {
        return $this->idchat;
    }

    public function getidEst1() {
        return $this->nombre;
    }

        public function getidEst2() {
        return $this->nombre;
    }
    
    
}
?>