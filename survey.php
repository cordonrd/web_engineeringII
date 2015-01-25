<?php
$uri = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html>
<?php require 'head.php';?>
<body>
	<?php include 'header.php';  ?>
	<div class="container main img-rounded">
		<h1>Survey</h1>
		<form action="/results" method="get">
			<input type="text" placeholder="Name" name="name">
			<label>What is your favorite Programming Language?</label>
			<select name="lang">
				<option value="Python">Python</option>
				<option value="Php">Php</option>
				<option value="JavaScript">JavaScript</option>
				<option value="XQuery">XQuery</option>
				<option value="Ruby">Ruby</option>
				<option value="C++">C++</option>
				<option value="C#">C#</option>
				<option value="Perl">Perl</option>
				<option value="Java">Java</option>
			</select>

			<label>What is your major?</label>

			<select name="major">
				<option value="CS">CS</option>
				<option value="CIT">CIT</option>
				<option value="WDD">WDD</option>
				<option value="CE">CE</option>
				<option value="Other">Other</option>
			</select>

			<input type="submit" value="Submit">

		</form>
	</div>

</body>
</html>