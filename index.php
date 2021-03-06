<?php
ini_set("display_errors", 1);
error_reporting(E_ALL & ~E_NOTICE);
require "db/db.php";
require 'vendor/autoload.php';
require "controladores/ctrl_index.php";
require_once('clases/template.php');
$controlIndex=new ControladorIndex();

$tpl = Template::getInstance();
$tpl->asignar('url_base',"http://localhost/RedStudiosFW/");
$tpl->asignar('url_logout',$controlIndex->getUrl("usuario","logout"));
$tpl->asignar('url_buscar',$controlIndex->getUrl("usuario","buscar"));
$tpl->asignar('proyecto'," RedStudios");

//Cargamos controladores y acciones

if(isset($_GET['url'])){
	$query = $_GET['url'];
	$request = explode('/', $query);
	$controller = (!empty($request[0])) ? $request[0] : 'usuario';
	$action = (!empty($request[1])) ? $request[1] : 'listado';
	$params=array();
	for ($i=2; $i <count($request) ; $i++) { 
		$params[]=$request[$i];
	}
}else{
	$controller="usuario";
	$action="listado";
	$params=array();
}

$controllerObj=$controlIndex->cargarControlador($controller);
  //  echo Session::get('usuario_imagen');
  // echo $action;
  // print_r($params);
$controlIndex->ejecutarAccion($controllerObj,$action,$params);

?>
