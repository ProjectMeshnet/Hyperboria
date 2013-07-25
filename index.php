<?php
// locale
$locale = "en_US"; // default locale
$domain = "messages"; // name of file with translations
setlocale(LC_ALL, $locale);
putenv("LC_ALL=".$locale);
bindtextdomain($domain, "./locale");
bind_textdomain_codeset($domain,'UTF-8');
textdomain($domain);
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="github.com/dansup/hyperboria">
<title>Hyperboria</title>
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/prettify.css" rel="stylesheet">
<link href="assets/css/solarized-dark.css" rel="stylesheet">
<link rel="shortcut icon" href="/assets/img/favicon.png">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
<style>
.top-jumbo {
	margin-top: 40px;
	padding-top: 50px;
	height: 240px;
	background-color: #1B1B1B;
	color: #F4F4F4;
}
</style>
</head>
<body data-spy="scroll" data-target=".navbar">
<div id="wrap">
<div id="navbar-scroll" class="navbar navbar-fixed-top">
<div class="container">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="/">Hyperboria</a>
<div class="nav-collapse collapse">
<ul class="nav navbar-nav">
	<li><a href="#overview"><?=_("Overview")?></a></li>
	<li><a href="#join"><?=_("How to join")?></a></li>
	<li><a href="#services"><?=_("Services")?></a></li>
	<li><a href="#social"><?=_("Social")?></a></li>

</ul>
<!-- Future Dropdown nav for l10n
<ul class="nav navbar-nav pull-right">
	<li class="dropdown">
<a href="/?lang=en_US" class="dropdown-toggle" data-toggle="dropdown">lang: <b>en</b> <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="#">lang: <b>it</b></a></li>
<li><a href="/?lang=ru_RU">lang: <b>Русский</b></a></li>
<li><a href="#">lang: <b>fr</b></a></li>
</ul> -->
</li>

</ul>
</div> 
</div>
</div>
<div class="top-jumbo">
		<div class="col col-lg-3"></div>
		<div class="col col-lg-2">
			<img src="assets/img/top-jumbo.png" style="margin-top:28px;height:84px;width:129px;" alt="Hyperboria network infographic" />
		</div>
		<div class="col col-lg-4">
			<h2><?=_("a global meshnet")?></h2>
			<h3><?=_("powered by")?> <a href="https://github.com/cjdelisle/cjdns">cjdns</a> <?=_("nodes")?></h3>
	</div>
</div>
<div class="container" data-spy="scroll" data-target="#navbar-scroll" data-offset="0">
<div id="overview" class="row">
<br><br>
	<div class="page-header">
		<h1><?=_("Overview")?></h1>
		<blockquote>
		  <p><?=_("Encrypted networking for everyone.")?></p>
		  <small>Caleb James Delisle <cite title="Source Title">(cjdns <?=_("author")?>)</cite></small>
		</blockquote>
	</div>
	<div class="col col-lg-2"></div>
	<div class="col col-lg-2 text-center" style="background-image:url(assets/img/overview-open.png);width:215px;height:374px;padding-top:200px;">
		<h1>><?=_("Open")?></h1>
		<p><?=_("Anyone can join by peering with someone already connected.")?></p>
	</div>
	<div class="col col-lg-1"></div>
	<div class="col col-lg-2 text-center" style="background-image:url(assets/img/overview-p2p.png);width:215px;height:374px;padding-top:200px;">
		<h1><?=_("P2P")?></h1>
		<p><?=_("Inspired by Kademlia DHT, the network is censorship resistant.")?></p>
	</div>
	<div class="col col-lg-1"></div>
	<div class="col col-lg-2 text-center" style="background-image:url(assets/img/overview-secure.png);width:215px;height:374px;padding-top:200px;">
		<h1><?=_("Secure")?></h1>
		<p><?=_("Packets are encrypted end-to-end using your unique cjdns ipv6 address.")?></p>
	</div>
</div>
<div class="row"><div class="col col-lg-12" style="height:100px;"><div class="col col-lg-4"></div><div class="col col-lg-4" style="padding-top:50px;"><hr></div></div></div>
<div id="join" class="row">
<br><br>
<div class="page-header">
		<h1><?=_("How do I join?")?></h1>
		<p class="lead"><?=_('Install the cjdns software on a supported device/platform and locate a peer via <a href="https://chat.projectmeshnet.org/#projectmeshnet" rel="nofollow">IRC</a> or <a href="http://atlas.projectmeshnet.org">the global map</a>.')?></p>
	</div>	
	<div class="col col-lg-1">
	</div>
	<div class="col col-lg-2">
		<ul id="install" class="nav nav-tabs nav-stacked">
		<li class="active"><a href="#debian" class="lead" data-toggle="tab">Debian</a></li>
		<li><a href="#ubuntu" class="lead" data-toggle="tab">Ubuntu</a></li>
		<li><a href="#archlinux" class="lead" data-toggle="tab">Archlinux</a></li>
		<li><a href="#fedora" class="lead" data-toggle="tab">Fedora</a></li>
		<li><a href="#gentoo" class="lead" data-toggle="tab">Gentoo</a></li>
		<li><a href="#openwrt" class="lead" data-toggle="tab">OpenWRT</a></li>


		</ul>
	</div>
	<div class="col col-lg-8">
		<div id="installContent" class="tab-content">

		<div class="tab-pane fade in active" id="debian">
		<pre class="prettyprint">
#Building cjdns from source on Debian
#created by @cjd

sudo apt-get install cmake git build-essential
git clone https://github.com/cjdelisle/cjdns.git
cd cjdns
./do
./cjdroute
#and follow the instructions cjdroute prints.

#To make cjdns autostart on boot:
sed -ir "s|^#CJDPATH=.*$|CJDPATH=$(dirname $(pwd))|" scripts/cjdns
sudo cp -i scripts/cjdns /etc/default/cjdns
sudo ln -is "$(pwd)/"scripts/cjdns.sh /etc/init.d/cjdns

#Be sure to update cjdns at least weekly:
sudo /etc/init.d/cjdns update
		</pre>
		</div>
		<div class="tab-pane fade in" id="ubuntu">
		<pre class="prettyprint">
#Installing cjdns from PPA on Ubuntu
#maintained by https://launchpad.net/~shnatsel

#See Debian instructions are the official method,
#but in that case cjdns won't autostart on boot
#and you'll have to keep the installation up to date manually.

#Enter the following commands in Terminal:
sudo add-apt-repository -y ppa:shnatsel/cjdns
sudo apt-get update
sudo apt-get install -y cjdns

#cjdns is a friend-to-friend network, so you need to ask somebody 
#See https://github.com/cjdelisle/cjdns#2-find-a-friend for more info
#Run the following to open the config file:
sudo gnome-text-editor /etc/cjdroute.conf
#Enter your friend's info and save the file.

sudo restart cjdns
#That's it!
		</pre>
		</div>
		<div class="tab-pane fade in" id="archlinux">
		<pre class="prettyprint">
#Building cjdns from source on ArchLinux
#created by @prurigro

sudo yaourt -S cjdns-git
sudo cjdroute --genconf > /etc/cjdroute.conf
sudo systemctl start cjdns
		</pre>
		</div>
		<div class="tab-pane fade in" id="fedora">
		<pre class="prettyprint">
#Building cjdns from source on Fedora
#created by @reptoidz

yum install @development-tools
yum install cmake
git clone https://github.com/cjdelisle/cjdns.git
./do
./cjdroute
		</pre>
		</div>
                <div class="tab-pane fade in" id="gentoo">
                <pre class="prettyprint">
#Building cjdns with Gentoo Portage
# created by @emery

# Prepare layman and fetch overlay
USE="git" emerge -u layman
echo "source /var/lib/layman/make.conf" >> /etc/portage/make.conf
layman -a emery

# emerge cjdns
emerge -avu cjdns

# Start OpenRC service
/etc/init.d/cjdns start

# Start SystemD unit
systemctl start cjdns
                </pre>
                </div>
		<div class="tab-pane fade in" id="openwrt">
		<pre class="prettyprint">
#Building cjdns from source on OpenWRT
#created by @cjd

cd ~
svn co svn://svn.openwrt.org/openwrt/trunk/ openwrt
cd openwrt
cp ./feeds.conf.default ./feeds.conf
echo 'src-git cjdns git://github.com/cjdelisle/cjdns-openwrt.git' >> ./feeds.conf
./scripts/feeds update -a
./scripts/feeds install cjdns
		</pre>
		</div>
                  
		</div>

</div>
</div>
<div class="row"><div class="col col-lg-12" style="height:100px;"><div class="col col-lg-4"></div><div class="col col-lg-4" style="padding-top:50px;"><hr></div></div></div>
<div id="services" class="row">
<br><br>
	<div class="page-header">
		<h1><?=_("Services")?></h1><p class="lead"><?=_("A few popular websites and services available on the network.")?></p>
	</div>
	<div class="col col-lg-1"></div>
	<div class="col col-lg-10">
		<div class="accordion" id="services">
		<div class="accordion-group">
		<div class="accordion-heading" style="background-color:#996699;">
        <a class="accordion-toggle" style="color:#E4E4E4;font-size:30px;" data-toggle="collapse" data-parent="#services" href="#services-web">
		<?=_("Websites")?>
		</a>
		</div>
		<div id="services-web" class="accordion-body collapse in">
		<div class="accordion-inner well" style="margin:40px;padding:40px;">
			<table class="table table-bordered">
			<thead>
			<tr>
			<th><?=_("Website")?></th>
			<th><?=_("Description")?></th>
			<th><?=_("Maintainer")?></th>
			</tr>
			</thead>
			<tbody>
			<tr>
			<td><h5><a href="http://uppit.us" rel="nofollow">http://uppit.us</h5></td>
			<td><?=_("Uppit - a reddit powered community")?></td>
			<td><a href="http://socialno.de/dan" rel="nofollow">@dan</a> and <a href="http://socialno.de/thefinn93" rel="nofollow">@thefinn93</a></td>
			</tr>
			<tr>
			<td><h5><a href="http://cjdns.ezcrypt.it" rel="nofollow">http://<b>cjdns</b>.ezcrypt.it</h5></td>
			<td><?=_("EZcrypt - encrypted pastebin")?></td>
			<td>novaking</td>
			</tr>
			<tr>
			<td><h5><a href="http://socialno.de" rel="nofollow">http://socialno.de</h5></td>
			<td><?=_("socialnode - a micro blogging service exclusive to Hyperboria")?></td>
			<td><a href="http://socialno.de/derp" rel="nofollow">@derp</a></td>
			</tr>
			<tr>
			<td><h5><a href="http://[fc38:4c2c:1a8f:3981:f2e7:c2b9:6870:6e84]/cjdns.html" rel="nofollow">http://[fc38:4c2c:1a8f:3981:f2e7:c2b9:6870:6e84]/cjdns.html</a></h5></td>
			<td><?=_("iRcann - the info.cern.ch of Hyperboria")?></td>
			<td><a href="http://socialno.de/ircerr">@ircerr</a></td>
			</tr>
			<tr>
			<td><h5><a href="http://[fc5d:baa5:61fc:6ffd:9554:67f0:e290:7535]" rel="nofollow">http://[fc5d:baa5:61fc:6ffd:9554:67f0:e290:7535]</a></h5></td>
			<td><?=_("NodeInfo - your flashlight in the darknet")?></td>
			<td><a href="http://socialno.de/mikey" rel="nofollow">@mikey</a></td>
			</tr>
			<tr>
			<td colspan="3">
			<a href="https://wiki.projectmeshnet.org/Known_Hyperboria_sites#Websites"><?=_("view more websites")?></a>
			</td>
			</tr>
			</tbody>
			</table>
		</div>
		</div>
		</div>
		<div class="accordion-group">
		<div class="accordion-heading" style="background-color:#996699;">
        <a class="accordion-toggle" style="color:#E4E4E4;font-size:30px;" data-toggle="collapse" data-parent="#services" href="#services-srv">
		Services
		</a>
		</div>
		<div id="services-srv" class="accordion-body collapse">
		<div class="accordion-inner well" style="margin:40px;padding:20px;">
		<table class="table table-bordered">
			<thead>
			<tr>
			<th><?=_("Service")?></th>
			<th><?=_("Description")?></th>
			<th><?=_("Maintainer")?></th>
			</tr>
			</thead>
			<tbody>
			<tr>
			<td><h5><a href="hpk://hyperboria.thefinn93.com:11371" rel="nofollow">hpk://hyperboria.thefinn93.com:11371</h5></td>
			<td><?=_("OpenPGP Keyserver")?></td>
			<td><a href="http://socialno.de/thefinn93" rel="nofollow">@thefinn93</a></td>
			</tr>
			<tr>
			<td><h5><a href="http://hyperboria.name" rel="nofollow">http://hyperboria.name</h5></td>
			<td><?=_("Hyperboria.name - free mail and subdomain service")?></td>
			<td><a href="http://socialno.de/grundy" rel="nofollow">@grundy</a></td>
			</tr>
			<tr>
			<td><h5><a href="http://hypebox.net" rel="nofollow">http://hypebox.net</h5></td>
			<td><?=_("HypeBox.net - a blogging platform exclusive to Hyperboria")?></td>
			<td><a href="http://socialno.de/jph" rel="nofollow">@jph</a></td>
			</tr>
			<tr>
			<td><h5><a href="http://hypeirc.net" rel="nofollow">http://hypeirc.net</a></h5></td>
			<td><?=_("HypeIRC - the IRC network of Hyperboria")?></td>
			<td><a href="http://socialno.de/derp">@derp</a>, <a href="http://socialno.de/prurigro">@prurigro</a>, <a href="http://socialno.de/jercos">@jercos</a>, and <a href="http://socialno.de/cjd">@cjd</a></td>
			</tr>
			<tr>
			<td><h5><a href="http://[fc5d:baa5:61fc:6ffd:9554:67f0:e290:7535]/hypedns" rel="nofollow">http://[fc5d:baa5:61fc:6ffd:9554:67f0:e290:7535]/HypeDNS</a></h5></td>
			<td><?=_("HypeDNS - dns for Hyperboria")?></td>
			<td><a href="http://socialno.de/mikey" rel="nofollow">@mikey</a></td>
			</tr>
			<tr>
			<td colspan="3">
			<a href="https://wiki.projectmeshnet.org/Known_Hyperboria_sites#Services">view more services</a>
			</td>
			</tr>
			</tbody>
			</table>

		</div>
		</div>
		</div>
		</div>
	</div>
</div><!-- row collapse -->
<div class="row"><div class="col col-lg-12" style="height:100px;"><div class="col col-lg-4"></div><div class="col col-lg-4" style="padding-top:50px;"><hr></div></div></div>
<div id="social" class="row">
<br><br>
	<div class="page-header">
		<h1>Social</h1><p class="lead"><?=_("Insight into #hyperboria, help spread the word!")?></p>
	</div>
	<div class="col col-lg-2"></div>
	<div class="col col-lg-4">
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
		<g:community href="https://plus.google.com/communities/101984975922141471371"></g:community>
		<br><br>
		<div class="g-page" data-width="300" data-href="//plus.google.com/114581766290654528027" data-layout="landscape" data-rel="publisher"></div>

		<script type="text/javascript">
		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/plusone.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
	</div>
	<div class="col col-lg-1"></div>
	<div class="col col-lg-4">
	<a class="twitter-timeline" href="https://twitter.com/search?q=%23hyperboria" data-widget-id="357324512297107456">Tweets about "#hyperboria"</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
</div>
<div class="row"><div class="col col-lg-12" style="height:100px;"><div class="col col-lg-4"></div><div class="col col-lg-4" style="padding-top:50px;"></div></div></div>
</div>
</div>
<div id="footer" style="background-color:#fff">
<div class="container">
<p class="credit text-right">
	<!-- Use ProjectMeshnet Social Accounts until further notice -->
  <a href="https://facebook.com/projectmeshnet"><i class="icon-facebook icon-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="https://github.com/dansup/hyperboria"><i class="icon-github icon-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="https://plus.google.com/114581766290654528027"><i class="icon-google-plus icon-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="https://twitter.com/projectmeshnet"><i class="icon-twitter icon-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	designed by <a href="https://github.com/dansup">dansup</a>
 </p>
</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/prettify.js"></script>
<script type="text/javascript">
	(function(jQuery){
	  jQuery( document ).ready( function() {
	    prettyPrint();
	  } );
	}(jQuery))
</script>

</body>
</html>
