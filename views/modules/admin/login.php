<?php
	include "menu-admin.php";
?>
<section class="container login-sec">
	<div class="row">
		<div class="col-md-4 col-12">
			<form method="post">
			  	<div class="form-group">
				    <label >Usuario:</label>
				    <input type="text" class="form-control" name="nameLogin" required>
			  	</div>
			  	<div class="form-group">
				    <label >Password:</label>
				    <input type="password" class="form-control" name="passwordLogin" required>
			  	</div>
			  	<div class="form-group">
			  		<input type="submit" value="Entrar">
			  	</div>
			  	<?php
					$ingreso = new MvcController();
					$ingreso -> loginUsuarioController();
					if (isset($_GET["action"])) {
						if ($_GET["action"] == "fallo") {
							echo '<div class="alert alert-danger" role="alert">
										  <strong> ☹️ <br></strong> Usuario o Password no encontrado.
										</div>';
						}
					}
				?>
			</form>
		</div>
	</div>
</section>