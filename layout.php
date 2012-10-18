<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Hyperboria.net<?php if(isset($pages[$page]['title'])) echo ' - ' . $pages[$page]['title']; ?></title>
		<meta name="description" content="Hyperboria is the decentralized network of cjdns nodes.">
		<meta name="author" content="dansup/xgalvin">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<link href="/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
		<link href="/css/main.css" type="text/css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic' rel='stylesheet' type='text/css'>
		<script src="/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
	</head>
		<body>
		<!--[if lt IE 7]>
			<p class=chromeframe>Your browser is insecure, ugly, downright mean to developers and most of all <em>ancient!</em> 
			<a href="http://browsehappy.com/">Upgrade to a different browser</a> or 
			<a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a>
			to experience this site the way modern people do.</p>
		<![endif]-->
		<div class="navbar  navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="/">Hyperboria</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li><a href="/">Home</a></li>
							<li><a href="about">About</a></li>
						</ul>
						<ul class="nav pull-right">
							<li><a href="http://projectmeshnet.org/">ProjectMeshnet.org</a></li>
						</ul>
					</div><!-- /.nav-collapse -->
				</div>
			</div>
		</div>
		
		<div class="container">
			
			<div class="content" id="page-<?php echo $page; ?>">
				<?php include('pages/' . $page . '.php'); ?>
			</div>
			
			<!-- Page footer -->
			<footer>
				<p>
					This <span xmlns:dct="http://purl.org/dc/terms/" 
					href="http://purl.org/dc/dcmitype/InteractiveResource" rel="dct:type">work</span> 
					is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/">
					Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported License</a>.
				</p>
			</footer>
			
		</div> <!-- /container -->
		
		<!-- Scripts -->
		<!-- jQuery with failover (not sure if it's needed). -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
		<!-- BootStrap plugins. More info here: http://twitter.github.com/bootstrap/javascript.html -->
		<script src="/js/libs/bootstrap/transition.js"></script>
		<script src="/js/libs/bootstrap/collapse.js"></script> <!-- required by "bootstrap-responsive.css" -->
		<script src="/js/libs/bootstrap/alert.js"></script>
		<!-- Custom scripts -->
		<script src="/js/script.js"></script>
	</body>
	
</html>
