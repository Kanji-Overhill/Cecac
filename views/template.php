<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/png" href="views/images/favicon.png"/>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="views/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="views/css/styles.css">
	<title>CECAC | Corredor Empresarial Cuatlancingo A.C.</title>

</head>

<body>

<?php 

$mvc = new MvcController();
$mvc -> enlacesPaginasController();
include "views/modules/footer.php"
 ?>

	<!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="views/js/jquery-3.2.1.min.js"></script>
    <script src="views/js/bootstrap.min.js"></script>
    <script src="views/js/main.js"></script>
</body>

</html>