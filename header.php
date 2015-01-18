<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
		      	<a class="navbar-brand"><img class="img-rounded" src="/m-logo.svg"></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav">
		        	<li <?php if ($uri == "/") {?> class="active" <?php } ?> ><a href="/">Home <span class="sr-only">(current)</span></a></li>
		        	<li <?php if ($uri == "/coming-soon/") {?> class="active" <?php } ?> ><a href="/assignments">Assignments <span class="sr-only">(current)</span></a></li>
		    	</ul>
		    </div>
		</div>
	</nav>