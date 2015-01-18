<?php
$uri = $_SERVER['REQUEST_URI'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hello World</title>
	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.css">
</head>
<body>
	<?php include 'header.php';  ?>
	<div class="container">
		<h1>Hello World</h1>
		<h2>And so it begins...</h2>
		<?php
		echo $uri;
		?>
	</div>

</body>
</html>