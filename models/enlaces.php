<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){


		if($enlaces == "inicio" || $enlaces == "servicios" || $enlaces == "miembros" || $enlaces == "noticias" || $enlaces == "contacto" || $enlaces == "salir"){

			$module =  "views/modules/".$enlaces.".php";
		
		}
		else if($enlaces == "admin"){

			$module =  "views/modules/admin/login.php";
		
		}
		else if($enlaces == "error-403"){

			$module =  "403.html";
		
		}
		else if($enlaces == "administrador"){

			$module =  "views/modules/admin/administrador.php";
		
		}
		else if($enlaces == "user"){

			$module =  "views/modules/admin/usuario.php";
		
		}
		else if($enlaces == "fallo"){

			$module =  "views/modules/admin/login.php";
		
		}
		else{

			$module =  "views/modules/inicio.php";

		}
		
		return $module;

	}

}

?>