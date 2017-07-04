<?php
session_start();

if (!$_SESSION["admin"]) {
	header("location:admin");

	exit();
}
$mvc = new MvcController();
include_once "menu-administrador.php";
?>
<section class="container admin-table">
	<div class="row">
		<div class="col-12">
			<a class="add-but" href=""><img src="views/images/001-file-2.svg" alt="Agregar Documento">Agregar Documento</a>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<table class="table table-bordered">
				<thead>
				    <tr>
				      <th>Fecha </th>
				      <th>Descripcion</th>
				      <th>Documento</th>
				      <th>Estado</th>
				    </tr>
				</thead>
				<tbody>
					<form method="post">
						<?php
						$mvc -> vistaAdministradorController();
					    ?>
				    </form>
				</tbody>
			</table>
		</div>
	</div>
</section>