<?php
class Conexion{
	public function conectar(){
		$link = new PDO("mysql:host=localhost;dbname=cecac_admin","root","");
		return $link;
	}
}
?>