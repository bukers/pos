<?php

class ControladorPlantilla{

	public function ctrPlantilla(){

		include "vistas/plantilla.php";

	}
	
	public function loadView(){

	
		if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
	  
		 echo '<div class="wrapper">';
		  include "vistas/modulos/cabezote.php";
		  include "vistas/modulos/menu.php";
		  if(isset($_GET["ruta"])){
			if($_GET["ruta"] == IS_DIR){
				include "vistas/modulos/".IS_DIR.".php";
			}else{
			  include "vistas/modulos/404.php";
			}
		  }else{
			include "vistas/modulos/inicio.php";
		  }
		  include "vistas/modulos/footer.php";
		  echo '</div>';
		}else{
		  include "vistas/modulos/login.php";
		}
		


	}


}