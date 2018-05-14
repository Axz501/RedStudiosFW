<?php
class Usuario extends ClaseBase {
    public $nombre = '';
	public $apellido = '';
    public $nick = '';
	public $edad = 0;
    public $correo='';
    //Contructor que recibe un array
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="usuario";
        parent::__construct($tabla);

    }
   
    public function getid() {
        return $this->id;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function getNick() {
        return $this->nick;
    }
    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getEmail() {
        return $this->correo;
    }

    public function setEmail($email){
        $this->correo=$email;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function setNick($ni){
        $this->nick=$ni;
    }
    public function setEdad($edad){
        $this->edad=$edad;
    }

    public function getBusqueda($buscar){
        $usuarios=array();
        $stmt = $this->getDB()->prepare( 
            "SELECT * FROM usuarios 
            WHERE nombre like ? " );
        // Le agrego % para busque los que empiezan con la letra o terminan
        $buscar= '%'.$buscar.'%';
        $stmt->bind_param( "s",$buscar);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($fila=$resultado->fetch_object()) {
            $persona= new Usuario($fila);
                $usuarios[]=$persona;
        }
        return $usuarios;
    }

    public function agregar($pass){
        
        $nombre=$this->getNombre();
        $ape=$this->getApellido();
        $edad=$this->getEdad();
        $ni=$this->getNick();
        $password = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 15]);
        $email=$this->getEmail();

        $stmt = $this->getDB()->prepare( 
            "INSERT INTO usuario 
        (nombre, apellido,edad,nick,correo,contra) 
           VALUES (?,?,?,?,?,?)" );
        $stmt->bind_param("ssisss",$nombre,
            $ape,$edad,$ni,$email,$password);
        $stmt->execute();
        if (file_exists(DIRECTORIO."img/usuarios/".$ni.".jpg")){
            $stmt = $this->getDB()->prepare("UPDATE `redstudio`.`usuario` SET `imagen`='img/usuarios/".$ni.".jpg' WHERE `nick`='".$ni."'");
            $stmt->execute();
        }
        if (file_exists(DIRECTORIO."img/usuarios/".$ni.".png")){
            $stmt = $this->getDB()->prepare("UPDATE `redstudio`.`usuario` SET `imagen`='img/usuarios/".$ni.".png' WHERE `nick`='".$ni."'");
            $stmt->execute();
        }
    }

    public function login($email,$pass){
        ini_set("display_errors", 1);
        error_reporting(E_ALL & ~E_NOTICE);
        /*$stmt = $this->getDB()->prepare( "SELECT * from  usuarios WHERE email=? AND pass=?" );
        $stmt->bind_param("ss",$email,$pass);*/
        if ($stmt = $this->getDB()->prepare( "SELECT * from  usuario WHERE correo=? or nick=?" )){
            //$stmt = DB::conexion->prepare( "SELECT * from  usuarios WHERE email=? " );
            $stmt->bind_param("ss",$email,$email);
            $stmt->execute();
            $resultado = $stmt->get_result();
            if($resultado->num_rows<1){
                return "no hay tuplas";
            }    
            $res=$resultado->fetch_object();
            $passdebd = $res->contra;
            if (password_verify($pass, $passdebd)) {
                Session::init();
                Session::set('usuario_logueado', true);
                Session::set('usuario_nick', $res->nick);
                Session::set('usuario_nombre', ucfirst($res->nombre)." ".ucfirst($res->apellido));
                Session::set('usuario_email', $res->email);
                if (!empty($res->imagen)){
                    Session::set('usuario_imagen', $res->imagen);
                }
                return "si";
            }
        else{
            //$error = $mysqli->errno.' '.$mysqli->error;
            return "contra no";
            }
        }
    }
    
   public function logout(){
        Session::init();
        Session::destroy();
   }

   public function controlnickcorreo($nick,$correo){
        ini_set("display_errors", 1);
        error_reporting(E_ALL & ~E_NOTICE);
        if ($stmt = $this->getDB()->prepare( "SELECT * from  usuario WHERE correo=? " )){
            $stmt->bind_param("s",$correo);
            $stmt->execute();
            $resultado = $stmt->get_result();
            if($resultado->num_rows>0){
                return "no";
            }  
        }
        if ($stmt2 = $this->getDB()->prepare( "SELECT * from  usuario WHERE nick=? " )){
            $stmt2->bind_param("s",$nick);
            $stmt2->execute();
            $resultado = $stmt2->get_result();
            if($resultado->num_rows>0){
                return "no";
            }  
        }
        return "si";
   } 
}
?>