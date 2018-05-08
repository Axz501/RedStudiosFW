<?php
require_once ("config/config.php");
require_once ("controladores/ctrl_index.php");
$controlIndex=new ControladorIndex();

if (isset($_POST["logincor"])){
		$ci = $_POST["logincor"];
		$pass = $_POST["loginpass"];
		$controlusuario = $controlIndex->cargarControlador("usuario");
		$datos = array($ci,$pass);
		$ok = $controlusuario->login($datos);
		//$ok = ingresaralsitio($ci,$pass);
		echo($ok);
	}

if (isset($_POST["nombre"])){
	$nom = $_POST["nombre"];
	$ap = $_POST["apellido"];
	$ni = $_POST["nick"];
	$ed = $_POST["edad"];
	$pas = $_POST["pass"];
	$cor = $_POST["correo"];
	//$img = $_POST["imagen"];
	session_start();
	$file = session_id();
	$directory = DIRECTORIO."img/usuarios/";
	if (file_exists($directory.$file.".jpg")){
		rename($directory.$file.".jpg", $directory.$ni.".jpg");
	}
	if (file_exists($directory.$file.".png")){
		rename($directory.$file.".png", $directory.$ni.".png");
	}
	session_destroy();
	$datos = array($nom,$ap,$ni,$ed,$pas,$cor);
	$controlusuario = $controlIndex->cargarControlador("usuario");
	$ok = $controlusuario->controlnickcorreo($ni,$cor);
	echo($ok);
	if ($ok==="si"){
		$controlIndex->redirect("usuario","nuevo",$datos);
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
	session_start();
	copy($imagen["tmp_name"], $directory.session_id().".".$imageFileType);
}   
?>