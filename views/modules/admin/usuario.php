<?php
session_start();

if (!$_SESSION["user"]) {
	header("location:admin");

	exit();
}
include "menu-user.php";
?>

