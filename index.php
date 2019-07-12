

<?php

$dir_ini = "/pos/";
$host = $_SERVER["HTTP_HOST"].$dir_ini;
$nodir = $_SERVER["REQUEST_URI"];
$dir = str_replace($dir_ini, '', $nodir);
define('IS_HOST', $host);
define('IS_DIR', $dir);


require_once "controladores/plantilla.controlador.php";
require_once "modelos/plantilla.modelo.php";

if(IS_DIR != '')
    $DIR = IS_DIR;
else
    $DIR = "inicio";


require_once "controladores/".$DIR.".controlador.php";
require_once "modelos/".$DIR.".modelo.php";


$plantilla = new ControladorPlantilla();

$plantilla->ctrPlantilla();