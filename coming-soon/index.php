<?php
$uri = $_SERVER['REQUEST_URI'];

?>
<!DOCTYPE html>
<html>
<?php require '../head.php';?>
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