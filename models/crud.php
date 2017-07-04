<?php
require_once "conexion.php";
require "simple_html_dom.php";

class Datos extends Conexion{
	public function loginUsuarioModel($datosModel, $tabla){
		$stmt = Conexion::conectar()->prepare("SELECT usuario, password, rol FROM $tabla WHERE usuario = :usuario");

		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->execute(); 

		return $stmt->fetch();

		$stmt->close();
	}
}
class Scrapping{
	public function scrappingNoticias1Model($enlacesModel){
		$html = file_get_html($enlacesModel);
		$posts = $html->find('article[class="f4_category-header__top__left__article"]');
		foreach ($posts as $post => $valor) {
			$link = $valor->find('h2 a',0);
			$item['url'] = $link->attr['href'];
			$item['title'] = $link->plaintext;
			$item['img'] = $valor->find('figure img', 0)->attr['data-full-size'];
			$articles[] = $item;
		}
		return $articles;
	}
	public function scrappingNoticias2Model($enlacesModel){
		$html = file_get_html($enlacesModel);
		$posts = $html->find('article[class="f4_segment__block"]');
		foreach ($posts as $post => $valor) {
			$link = $valor->find('div[class="f4_segment__block__left"] a',0);
			$item['url'] = $link->attr['href'];
			$item['title'] = $link->attr['title'];
			$item['img'] = $valor->find('div[class="f4_segment__block__left"] a img', 0)->attr['data-full-size'];
			$articles[] = $item;
		}
		return $articles;
	}
} 
?>