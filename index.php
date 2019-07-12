





<?php


/*
MALA METODOLOGIA DE ESTRUCTURA, CREARA SOBRE CARGA EN UN FUTURO
*/

require_once "controladores/plantilla.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";

require_once "modelos/plantilla.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/clientes.modelo.php";


/*
TERMIN LA MALA METODOLOGIA DE ESTRUCTURA, CREARA SOBRE CARGA EN UN FUTURO
*/

$plantilla = new ControladorPlantilla();

$plantilla->ctrPlantilla();