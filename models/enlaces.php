<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){


		if($enlaces == "inicio" || $enlaces == "servicios" || $enlaces == "miembros" || $enlaces == "noticias" || $enlaces == "contacto" || $enlaces == "salir"){

			$module =  "views/modules/".$enlaces.".php";
		
		}else{

			$module =  "views/modules/inicio.php";

		}
		
		return $module;

	}

}

?>