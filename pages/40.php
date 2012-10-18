<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Hyperboria.net - the decentralized network powered by CJDNS</title>
		<meta name="description" content="Hyperboria is the decentralized network of cjdns nodes.">
		<meta name="author" content="dansup/xgalvin">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<link href="/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
		<link href="/css/main.css" type="text/css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic' rel='stylesheet' type='text/css'>
		<script src="/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
<script type="text/javascript">
function hyperboriaYes()
 {document.getElementById("hyperboria-status").innerHTML = "You are visiting via Hyperboria!";}
function hyperboriaNo()
 {document.getElementById("hyperboria-status").innerHTML = "You are visiting this site via regular old internet. You should
	<a href="https://wiki.projectmeshnet.org/Getting_Started">join the network</a>.";}
function hypednsYes()
 {document.getElementById("hypedns-status").innerHTML = "You've also got HypeDNS set up! Congrats!";}
function hypednsNo()
 {document.getElementById("hypedns-status").innerHTML = "...and no HypeDNS :(";}

function init()
 {
 var cjdns = new Image()
 cjdns.onload = hyperboriaYes;
 cjdns.onerror = hyperboriaNo;
 cjdns.src = "http://[fc72:6c3b:8c74:68a7:d8c3:b4e0:6cbd:9588]/favicon.ico?nocache=" + Math.random();

 var dns = new Image();
 dns.onload = hypednsYes;
 dns.onerror = hypednsNo;
 dns.src = "http://thefinn93.hype/favicon.ico?nocache=" + Math.random();
 }
</script>
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
																															<li class="active">
										<a href="/">Home</a>
									</li>
																																<li class="">
										<a href="/about">About</a>
									</li>
																																				</ul>
						<ul class="nav pull-right">
							<li><a href="http://projectmeshnet.org/">ProjectMeshnet.org</a></li>
						</ul>
					</div><!-- /.nav-collapse -->
				</div>
			</div>
		</div>
		
		<div class="container">
			
			<div class="content" id="page-default">
				<div class="well" id="hyperboria-status"></div><div class="well" id="hypedns-status"></div>

<!-- Hero unit (primary focus) -->
<div class="row">
	<div class="span10">
		<div class="hero-unit hidden-phone">
			<h1>A revolutionary concept</h1>
			<p><b>Hyperboria</b> is the first and only CJDNS powered decentralized network.</p>
			<p><a href="/about" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
		</div>
	</div>
</div>

<!-- Columns (secondary focus) -->
<div class="row centered">
	
	<div class="span4">
		<div class="col-wrap">
			<h2>A new kind of network.</h2>
			<!-- short description and link to about page -->
			<p>
				You can also learn more about 
				<a href="https://wiki.projectmeshnet.org/Hyperboria">Hyperboria</a>
				on MeshWiki.
			</p><br><br><br><br> <!-- temp padding -->
		</div>
	</div>
	
	<div class="span4">
		<div class="col-wrap">
							<h2>Trouble connecting?</h2><!-- or something else -->
				Take a look at the <a href="https://wiki.projectmeshnet.org/CJDNS_Troubleshooting">troubleshooting guide</a>!<br>
				Still can't figure it out? Come meet us on <a href="http://mibbit.com/?channel=%23CJDNS&server=irc.EFNet.org">IRC</a> where we can help you.
				<br><br><br><!-- temp padding -->
					</div>
	</div>
	
	<div class="span4">
		<div class="col-wrap">
			<h2>Resources</h2>
			<ul>
				<li><a href="https://wiki.projectmeshnet.org/">MeshWiki</a></li>
				<li><a href="https://wiki.projectmeshnet.org/Known_Hyperboria_sites">Known Hyperboria sites</a></li>
				<li><a href="http://reddit.com/r/darknetplan">Reddit</a></li>
			</ul>
			<p><a href="/resources" class="btn primary large">More useful stuff &raquo;</a></p>
		</div>
	</div>
	
</div>
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
		<!-- Piwik Analytics, an open-source insight tool. More info can be found on the privacy policy -->
		<script type="text/javascript">
		var pkBaseURL = (("https:" == document.location.protocol) ? "https://projectmeshnet.org/ai/" : "http://projectmeshnet.org/ai/");
		document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
		</script><script type="text/javascript">
		try {
		var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 3);
		piwikTracker.trackPageView();
		piwikTracker.enableLinkTracking();
		} catch( err ) {}
        </script><noscript><p><img src="http://projectmeshnet.org/ai/piwik.php?idsite=3" style="border:0" alt="" /></p></noscript>
	</body>
	
</html>
