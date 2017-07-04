<?php
session_start();

if (!$_SESSION["user"]) {
	header("location:admin");

	exit();
}
include "menu-user.php";
?>
<section class="container">
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
					<?php
				    	$mvc = new MvcController();
						$mvc -> vistaUsuarioController();
				    ?>
				</tbody>
			</table>
		</div>
	</div>
</section>
