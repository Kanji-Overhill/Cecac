<?php
	include "menu.php";
	$mvc = new MvcController();
?>
<section class="container noticias-sec-1">
	<div class="row">
		<div class="col-12">
			<h1>Noticias del Sector</h1>
		</div>
	</div>
	<div class="row">
		<?php
		$mvc -> scrappingNoticias1Controller(); 
		$mvc -> scrappingNoticias2Controller(); 
		?>
	</div>
</section>
<section class="container-fluid no-padding-right no-padding-left">
	<div class="col-12 no-padding-right no-padding-left">
		<img src="views/images/city-2.png" alt="" class="img-fluid">
	</div>
</section>
