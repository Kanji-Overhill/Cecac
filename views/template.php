<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="views/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="views/css/styles.css">
	<title>Template</title>

</head>

<body>

<?php 

$mvc = new MvcController();
$mvc -> enlacesPaginasController();

 ?>

	<!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="views/js/jquery-3.2.1.min.js"></script>
    <script src="views/js/main.js"></script>
</body>

</html>