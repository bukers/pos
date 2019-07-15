<?php

require_once "helpers/all.helper.php";

require_once "controladores/usuarios.controlador.php";
require_once "modelos/usuarios.modelo.php";

if(isset($_SESSION["id_usuario"]))
print_r($_SESSION["id_usuario"]);

?>

