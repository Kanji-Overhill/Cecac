<?php
session_start();

if (!$_SESSION["admin"]) {
	header("location:admin");

	exit();
}
include_once "menu-administrador.php";
?>

Administrador