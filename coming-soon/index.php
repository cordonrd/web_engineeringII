<?php
$uri = $_SERVER['REQUEST_URI'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Coming Soon | Messenger</title>
	<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
</head>
<body>
	<?php include '../header.php';  ?>
	<div class="container">
		<h1>Coming Soon</h1>
		<h2>And so it begins...</h2>
		<?php
		echo $uri;
		?>
	</div>

</body>
</html>