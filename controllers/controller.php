<?php

class MvcController{

	public function pagina(){	
		
		include "views/template.php";
	} 

	public function enlacesPaginasController(){

		if(isset( $_GET['action'])){
			
			$enlaces = $_GET['action'];
		
		}

		else{

			$enlaces = "index?action=inicio";
		}

		$respuesta = Paginas::enlacesPaginasModel($enlaces);

		include $respuesta;
	}
	public function scrappingNoticias1Controller(){
		$enlacesController = "https://www.forbes.com.mx/tag/industria-automotriz/";
		$respuesta = Scrapping::scrappingNoticias1Model($enlacesController);
		foreach ($respuesta as $post) {
			echo '<div class="col-md-6 col-6">
						<a target="blank" href="'.$post["url"].'">
							<div class="img-con"><img src="'.$post["img"].'" alt="">
								<div class="cov-n"><p>'.$post["title"].'</p></div>
							</div>
						</a>
					</div>';
		}
	}
	public function scrappingNoticias2Controller(){
		$enlacesController = "https://www.forbes.com.mx/tag/industria-automotriz/";
		$respuesta = Scrapping::scrappingNoticias2Model($enlacesController);
		foreach ($respuesta as $post) {
			echo '<div class="col-md-3 col-6">
						<a target="blank" href="'.$post["url"].'">
							<div class="img-con"><img src="'.$post["img"].'" alt="">
							<div class="cov-n"><p>'.$post["title"].'</p></div></div>
						</a>
					</div>';
		}
	}

	
}

?>

