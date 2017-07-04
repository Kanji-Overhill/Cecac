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
	public function loginUsuarioController(){
		if (isset($_POST["nameLogin"])) {
			$datosController = array('usuario'=>$_POST["nameLogin"], 'password'=>$_POST["passwordLogin"]);
			$respuesta = Datos::loginUsuarioModel($datosController, "usuarios");

			if($respuesta["usuario"] == $_POST["nameLogin"] && $respuesta["password"] == $_POST["passwordLogin"]){
				if ($respuesta["rol"] == 0) {
					session_start();
					$_SESSION["user"]=true;
					header("location:user");
				}else{
					session_start();
					$_SESSION["admin"]=true;
					header("location:administrador");
				}
			}else{
				header("location:fallo");
			}

		}
	}
	public function vistaUsuarioController(){
		$respuesta = Datos::vistaUsuarioModel("archivos");
		foreach ($respuesta as $datos => $item) {
			echo '<tr>
				      <th scope="row">'.$item["fecha"].'</th>
				      <td>'.$item["texto"].'</td>
				      <td><a target="blank" href="'.$item["url"].'"><img src="views/images/003-file.svg" alt=""></a></td>
				      <td class="alert ';
				    if ($item["status"] == 0) {
						echo 'alert-danger"><strong>Pendiente</strong></td>';
					}
					else{
						echo 'alert-success"><strong>Pagado</strong></td>';
					}
				    echo '</tr>';
		}
	}
	public function vistaAdministradorController(){
		$respuesta = Datos::vistaUsuarioModel("archivos");
		foreach ($respuesta as $datos => $item) {
			echo '<tr>
				      <th scope="row">'.$item["fecha"].'</th>
				      <td>'.$item["texto"].'</td>
				      <td><a target="blank" href="'.$item["url"].'"><img src="views/images/003-file.svg" alt=""></a></td>
				      <td class="alert ';
				    if ($item["status"] == 0) {
						echo 'alert-danger"><strong>Pendiente</strong></td>';
					}
					else{
						echo 'alert-success"><strong>Pagado</strong></td>';
					}
				    echo '</tr>';
		}
	}
}

?>

