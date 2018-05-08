<?php
require "clases/clase_base.php";
require "clases/usuario.php";
require_once('clases/template.php');
require_once('clases/Utils.php');
require_once('clases/session.php');
require_once('clases/auth.php');

class ControladorUsuario extends ControladorIndex {

 function listado($params=array()){
 	
 	Auth::estaLogueado();

	$buscar="";
	$titulo="Listado";
	$mensaje="";
	if(!empty($params)){
		if($params[0]=="borrar"){
			$usuario=new Usuario();
			$idABorrar=$params[1];
	 		if($usuario->borrar($idABorrar)){
	 			//Redirigir al listado
	 			//header('Location: index.php');exit;
	 			$this->redirect("usuario","listado");
	 		}else{
	 			//Mostrar error
	 			$usr=$usuario->obtenerPorId($idABorrar);
	 			//$mensaje="Error!! No se pudo borrar el usuario  <b>".$usr->getNombre()." ".$usr->getApellido()."</b>";
	 			$mensaje="ERROR. No existe el usuario";
	 			$usuarios=$usuario->getListado();	
	 		}
		}else if($params[0]=="mail"){
	 		$usuario=new Usuario();
	 		$idAEnviar=$params[1];
	 		$usr=$usuario->obtenerPorId($idAEnviar);

	 		$utils=new Utils();
	 		$res=$utils->enviarEmail($usr->getEmail(),$usr->getNombre()." ".$usr->getApellido());	
	 		if($res){
	 			//Redirigir al listado
	 			$mensaje="Mail enviado!";
	 			$usuarios=$usuario->getListado();
	 		}else{
	 			$mensaje="Error!! No se pudo enviar email al usuario  <b>".$usr->getNombre()." ".$usr->getApellido()."</b>";
	 			$usuarios=$usuario->getListado();	
	 		}
	 	}else{
	 		$usuario=new Usuario();
			$usuarios=$usuario->getListado();	
	 	}
	}else{
 		$usuario=new Usuario();
		$usuarios=$usuario->getListado();	
 	}
	
	//Llamar a la vista
 	$tpl = Template::getInstance();
 	$datos = array(
    'usuarios' => $usuarios,
    'buscar' => $buscar,
    'titulo' => $titulo,
    'mensaje' => $mensaje,
    );

	$tpl->asignar('usuario_nuevo',$this->getUrl("usuario","nuevo"));
	$tpl->mostrar('usuarios_listado',$datos);

}
function buscar($params=array()){
 	
 	Auth::estaLogueado();

	$buscar="";
	$titulo="Listado";
	$mensaje="";
	$usuarios=array();
	if(isset($_POST["buscar"]) && $_POST["buscar"]!="" ){
			$titulo="Buscando..";
	 		$usuario=new Usuario();
	 		$buscar=$_POST["buscar"];
			$usuarios=$usuario->getBusqueda($buscar);	
	}else{
		$usuario=new Usuario();
		$usuarios=$usuario->getListado();
	}
 	
	//Llamar a la vista
	//require_once("vistas/usuarios_listado.php");
	
 	$tpl = Template::getInstance();
 	$datos = array(
    'usuarios' => $usuarios,
    'buscar' => $buscar,
    'titulo' => $titulo,
    'mensaje' => $mensaje,
    );

	
	$tpl->asignar('usuario_nuevo',$this->getUrl("usuario","nuevo"));
	$tpl->mostrar('usuarios_listado',$datos);

}

function nuevo($datos){
	$mensaje="Bienvenido ".$datos[0]." ".$datos[1];
	//if(isset($_POST["nombre"])){
		$usr= new Usuario();
		$usr->setNombre($datos[0]);
		$usr->setApellido($datos[1]);
		$usr->setNick($datos[2]);
		$usr->setEdad($datos[3]);
		$usr->setEmail($datos[5]);
		if($usr->agregar($datos[4])){
			$this->redirect("usuario","invitado");
			exit;
		}else{
			$mensaje="Error! No se pudo agregar el usuario";
			$this->redirect("usuario","invitado");
		}
	// $tpl = Template::getInstance();
	// $tpl->asignar('titulo',"Nuevo Usuario");
	// $tpl->asignar('buscar',"");
	// $tpl->asignar('mensaje',$mensaje);
	// $tpl->mostrar('usuarios_nuevo',array());
}

function invitado($params = array()){
	Auth::ingresar();

	$tpl = Template::getInstance();
	$tpl->asignar('titulo',"Nuevo Usuario");
	$tpl->asignar('loginUrl',$loginUrl);
	$tpl->asignar('buscar',"");
	$tpl->asignar('mensaje',$params[0]);
	$tpl->asignar('nombre',"Invitado");
	$tpl->mostrar('usuarios_invitado',array());
}


function login($datos){

	$mensaje="";
	session_start();
	
	// if(isset($_POST["email"])){
		$usr= new Usuario();
		
		$email=$datos[0];
		$pass=$datos[1];
		$mensaje = $usr->login($email,$pass);
		return $mensaje;
		//if($usr->login($email,$pass)){
		// 	$this->redirect("usuario","listado");
		// 	exit;
		// }else{
		// 	$mensaje="Error! No se pudo agregar el usuario";
		// }

		
	// }
	// $tpl = Template::getInstance();
	// $tpl->asignar('titulo',"Nuevo Usuario");
	// $tpl->asignar('loginUrl',$loginUrl);
	// $tpl->asignar('buscar',"");
	// $tpl->asignar('mensaje',$mensaje);
	// $tpl->mostrar('usuarios_login',array());

}
function logout(){
	$usr= new Usuario();
	$usr->logout();
	$this->redirect("usuario","invitado");
}

function favoritos(){
	$usuario=new Usuario();
	$usuarios=$usuario->getListado();	
	echo json_encode($usuarios);
}

function controlnickcorreo($nick,$correo){
	$usuario = new Usuario();
	$ok = $usuario->controlnickcorreo($nick,$correo);
	return $ok;
}

}
?>