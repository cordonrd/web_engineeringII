<?php
$uri = $_SERVER['REQUEST_URI'];
$data = json_decode(file_get_contents ('results.json'));
$postData = array("name" => htmlspecialchars($_GET["name"]), "lang" => htmlspecialchars($_GET["lang"]), "major" => htmlspecialchars($_GET["major"]));
array_push($data, $postData);
$json = json_encode($data);
$fp = fopen('results.json', 'w');
fwrite($fp, $json);
fclose($fp);


?>
<!DOCTYPE html>
<html>
<?php require '../head.php';?>
<body>
	<?php include '../header.php';  ?>
	<div class="container main img-rounded">
		<h1>Results</h1>

		<h2><small>Programming langugages</small></h2>
		<ul>
			<li>Python <span id="python"></span></li>
			<li>Php <span id="php"></span></li>
			<li>JavaScript <span id="js"></span></li>
			<li>XQuery <span id="xq"></span></li>
			<li>Ruby <span id="ruby"></span></li>
			<li>C++ <span id="cp"></span></li>
			<li>C# <span id="cshrp"></span></li>
			<li>Perl <span id="perl"></span></li>
			<li>Java <span id="java"></span></li>
		</ul>
		<h2><small>Majors</small></h2>
		<ul>
			<li>CS <span id="cs"></span></li>
			<li>CIT <span id="cit"></span></li>
			<li>WDD <span id="wdd"></span></li>
			<li>CE <span id="ce"></span></li>
			<li>Other <span id="other"></span></li>
		</ul>
		<div id="result"></div>
	</div>

	<script type="text/javascript">
	var results = <?php echo $json;?>;
	var python=0,php=0,js=0,xq=0,ruby=0,cp=0,cshrp=0,prl=0,jva=0,cs=0,cit=0,wdd =0,ce = 0,other = 0;
	for (var i = results.length - 1; i >= 0; i--) {
		if(results[i].lang=="Python"){python++}
		if(results[i].lang=="Php"){php++}
		if(results[i].lang=="JavaScript"){js++}
		if(results[i].lang=="XQuery"){xq++}
		if(results[i].lang=="Ruby"){ruby++}
		if(results[i].lang=="C++"){cp++}
		if(results[i].lang=="C#"){cshrp++}
		if(results[i].lang=="Pearl"){prl++}
		if(results[i].lang=="Java"){jva++}
		if(results[i].major=="CS"){cs++}
		if(results[i].major=="CIT"){cit++}
		if(results[i].major=="WDD"){wdd++}
		if(results[i].major=="CE"){ce++}
		if(results[i].major=="Other"){other++}
	};
	document.getElementById("python").innerHTML = Math.round((python/results.length)*100) +"%";
	document.getElementById("php").innerHTML = Math.round((php/results.length)* 100) +"%";
	document.getElementById("js").innerHTML = Math.round((js/results.length)* 100) +"%";
	document.getElementById("xq").innerHTML = Math.round((xq/results.length)* 100) +"%";
	document.getElementById("ruby").innerHTML = Math.round((ruby/results.length)* 100) +"%";
	document.getElementById("cp").innerHTML = Math.round((cp/results.length)* 100) +"%";
	document.getElementById("cshrp").innerHTML = Math.round((cshrp/results.length)* 100) +"%";
	document.getElementById("perl").innerHTML = Math.round((prl/results.length)* 100) +"%";
	document.getElementById("java").innerHTML = Math.round((jva/results.length)* 100) +"%";
	document.getElementById("cs").innerHTML = Math.round((cs/results.length)* 100) +"%";
	document.getElementById("cit").innerHTML = Math.round((cit/results.length)* 100) +"%";
	document.getElementById("wdd").innerHTML = Math.round((wdd/results.length)* 100) +"%";
	document.getElementById("ce").innerHTML = Math.round((ce/results.length)* 100) +"%";
	document.getElementById("other").innerHTML = Math.round((other/results.length)* 100) +"%";
	</script>

</body>
</html>