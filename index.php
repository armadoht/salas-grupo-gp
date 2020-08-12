<?php
require_once('config/global.php');
require_once('core/ControladorBase.php');
require_once('core/ControladorFrontal.func.php');

//CONTROLADOR PRINCIPAL...
if(isset($_GET["controller"])){
	$controllerObj = cargarControlador($_GET["controller"]);
}else{
	$controllerObj = cargarControlador(CONTROLADOR_DEFECTO);
}
lanzarAccion($controllerObj);
?>