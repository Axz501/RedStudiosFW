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
        if ($stmt = $this->getDB()->prepare( 
            "SELECT * FROM usuario 
            WHERE nombre like ? or nick like ?" )){
        // Le agrego % para busque los que empiezan con la letra o terminan
            $buscar= '%'.$buscar.'%';
            $stmt->bind_param( "ss",$buscar,$buscar);
            $stmt->execute();
            $resultado = $stmt->get_result();
            while ($fila=$resultado->fetch_object()) {
                $persona= new Usuario($fila);
                $usuarios[]=$persona;
            }
            return $usuarios;
        }
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

    public function editarperfil($pass){
        $stmt = $this->getDB()->prepare( "SELECT * from  usuario WHERE nick=?" );
        $nick = Session::get('usuario_nick');
        $datos = array();
        $stmt->bind_param("s",$nick);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $res=$resultado->fetch_object();
        $passdebd = $res->contra;
        if (password_verify($pass, $passdebd)) {
            Session::init();
            Session::set('usuario_nombre', ucfirst($res->nombre)." ".ucfirst($res->apellido));

            if(isset($_POST["email"])  && !empty($_POST["email"])){
                $correo = $_POST["email"];
                $query = $this->getDB()->prepare( "UPDATE usuario SET correo = '$correo' WHERE nick = '$nick'" );
                if ($query->execute()) {
                    array_push($datos, "Email");
                    Session::set('usuario_email', $correo);
                }
                else{ return "correo no";}
            }
            if (isset($_POST['quitarimagen'])){
                $query = $this->getDB()->prepare( "UPDATE usuario SET imagen = null WHERE nick = '$nick'" );
                $query->execute();
                array_push($datos, "Imagen Eliminada");
                $directory = DIRECTORIO."img/usuarios/";
                $nombreimagen = Session::get('usuario_nick');
                if (file_exists($directory.$nombreimagen.".png")){
                    unlink($directory.$nombreimagen.".png");
                    Session::set('usuario_imagen', "");
                }
                if (file_exists($directory.$nombreimagen.".jpg")){
                    unlink($directory.$nombreimagen.".jpg");
                    Session::set('usuario_imagen', "");
                }
            }
            $imagen = $_FILES["elegirimagen"];
            if(!empty($imagen["name"])){
                $target_file = basename($imagen["name"]);
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $directory = DIRECTORIO."img/usuarios/";
                if (!file_exists($directory)) {
                    mkdir($directory, 0777, true);
                }
                $nickusr = Session::get('usuario_nick');
                $nombreimagen = $nickusr.".".$imageFileType;
                copy($imagen["tmp_name"], $directory.$nombreimagen);
                if ($stmt = $this->getDB()->prepare("UPDATE usuario SET imagen = 'img/usuarios/$nombreimagen' WHERE `nick`='$nickusr'")){
                    $stmt->execute();
                    array_push($datos, "Imagen Subida");
                    Session::set('usuario_imagen', "img/usuarios/".$nombreimagen);
                }
            } 
            if(isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
                $nombre = $_POST["nombre"];
                $query = $this->getDB()->prepare( "UPDATE usuario SET nombre = '$nombre' WHERE nick = '$nick'" );
                $query->execute();
                $nombrecompleto = Session::get('usuario_nombre');
                $aux = explode(" ", $nombrecompleto);
                Session::set('usuario_nombre', ucfirst($nombre)." ".ucfirst($aux[1]));
                array_push($datos, "Nombre");
                Session::set('usuario_nombre_solo', $nombre);
            }
            if(isset($_POST["apellido"]) && !empty($_POST["apellido"])){
                $apellido = $_POST["apellido"];
                $query = $this->getDB()->prepare( "UPDATE usuario SET apellido = '$apellido' WHERE nick = '$nick'" );
                $query->execute();
                $nombrecompleto = Session::get('usuario_nombre');
                $aux = explode(" ", $nombrecompleto);
                Session::set('usuario_nombre', ucfirst($aux[0])." ".ucfirst($apellido));
                array_push($datos, "Apellido");
                Session::set('usuario_apellido_solo', $apellido);
            }
            if(isset($_POST["pass"])  && !empty($_POST["pass"])){
                $contra = $_POST["pass"];
                $password = password_hash($contra, PASSWORD_DEFAULT, ['cost' => 15]);
                $query = $this->getDB()->prepare( "UPDATE usuario SET contra = '$password' WHERE nick = '$nick'" );
                $query->execute();
                array_push($datos, "Contraseña");
            }
            if(isset($_POST["edad"])  && !empty($_POST["edad"])){
                $edad = $_POST["edad"];
                $query = $this->getDB()->prepare( "UPDATE usuario SET edad = '$edad' WHERE nick = '$nick'" );
                $query->execute();
                array_push($datos, "Edad");
                Session::set('usuario_edad', $edad);
            }
            
            return $datos;
        }
        else{
            return "contra no";
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
                $datos = array("nick" => $res->nick, "nombre" => ucfirst($res->nombre), "apellido" => ucfirst($res->apellido), "email" => $res->correo, "edad" => $res->edad, "pass" => $pass);
                Session::set('datos_sesion',$datos);
                Session::set('usuario_logueado', true);
                Session::set('usuario_nick', $res->nick);
                Session::set('usuario_nombre', ucfirst($res->nombre)." ".ucfirst($res->apellido));
                Session::set('usuario_nombre_solo', $res->nombre);
                Session::set('usuario_apellido_solo', $res->apellido);
                Session::set('usuario_edad', $res->edad);
                Session::set('usuario_email', $res->correo);
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