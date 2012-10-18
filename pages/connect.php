
<ul class="breadcrumb">
  <li>
    <a href="/">Home</a> <span class="divider">/</span>
  </li>
   <li class="active">Connect</li>
</ul>

<div class="row">
	<div class="span8">
		<h1>Connect to Hyperboria</h1>
		<p><i>
			If you're not familiar with the core concepts you should really learn more
			<a href="/about">about</a> the network first.
		</i></p>
		<p>
			To join the Hyperboria network, you need to create a CJDNS node and connect to some peers. Currently, Linux is
			the only supported operating system. If you're not very fimilair with Linux (vi and nano mean nothing to you)
			or CJDNS you should read this <a href="https://wiki.projectmeshnet.org/Getting_started">getting started</a> 
			guide on MeshWiki.
		</p>
		<p>
			Hint: if you use Windows or Mac OS, you could try running Linux in a 
			<a href="http://en.wikipedia.org/wiki/Virtual_machine">virtual machine</a>.
		</p>
		<p>
			<span class="label label-important">Be aware:</span> 
			<b>CJDNS is still in alpha testing. If you find bugs, please <a href="#">report</a> them.</b>
		</p>
	</div>
	<div class="span4">
		<div class="well">
			<h3>On this page:</h3>
			<ul>
				<li><a href="#debian">Connect with Debian/Ubuntu</a></li>
			</ul>
		</div>
	</div>
</div>

<article id="debian">
	
	<h2>Setting up CJDNS on Debian</h2>
	<p>
		This guide was primairly written for Debian based Linux distro's. However CJDNS runs fine on other 
		operating systems, like Ubuntu, as well.
	</p>
	
	<h3>Prerequisites</h3>
	<p>Update your system.</p>
	<pre>apt-get update &amp;&amp; apt-get upgrade</pre>
	<p>Install Git to download CJDNS from GitHub</p>
	<pre>apt-get install build-essential cmake git</pre>
	
	<h3>Download CJDNS</h3>
	<p>Pull from GitHub and create required the directories.</p>
	<pre>cd /opt<br>git clone https://github.com/cjdelisle/cjdns.git cjdns<br>mkdir /opt/cjdns/build &amp;&amp; mkdir /var/log/cjdns &amp;&amp; cd /opt/cjdns/build</pre>
	
	<h3>Installation</h3>
	<p>Build and test it, but enable debugging first (remember what I said about this being alpha software?).</p>
	<pre>export Log_LEVEL=DEBUG<br>cmake .. &amp;&amp; make<br>make test</pre>
	
	<h3>Configure CJDNS</h3>
	<p>Create the configuration file.</p>
	<pre>./cjdroute --genconf &gt; /etc/cjdroute.conf</pre>
	<p>Now create a user 'cjdns' and give him a tunnel.</p>
	<pre>/sbin/ip tuntap add mode tun user cjdns</pre>
	<p>It this new tunnel is not 'tun0' find  <code>"tunDevice": "tun0"</code> in your configuration file ("/etc/cjdroute.conf") and modify it accordingly.</p>
	
	<h3>Add Peers</h3>
	<p>
		You should now have a CJDNS router! All you need to do now is to find nodes to connect with and run cjdroute. 
		There is a list of <a href="https://wiki.projectmeshnet.org/Public_peers">public peers</a> on MeshWiki or you can ask 
		your peers on <a href="irc://irc.efnet.org/#cjdns">IRC</a>. Add the info in the connectTo section cjdroute.conf.
	</p>
	
	<p>This is a list of people who are on IRC often and are willing to peer with practicly anyone.</p>
	<ul>
		<li>Waaghals (<a href="http://nl-hx.waaghals.me">NL-HX</a>) <i>the, Netherlands</i></li>
		<!-- Please add yourself :) -->
	</ul>
	
	<h3>So you have CJDNS installed, at least one peer and you are feeling brave?</h3>
	<p>Run that puppy!</p>
	<pre>sudo su -c "./cjdroute &lt; /etc/cjdroute.conf &gt;&gt; /var/log/cjdns/cjdroute.log &amp; ./cjdroute --getcmds &lt; /etc/cjdroute.conf | bash"</pre>
	<p><i>CJDNS only requires root for setting up the tunnel. It will drop permissions as soon as it is running.</i></p>
	
	<br>
	<h3>Try visiting this website via Hyperboria at <a href="#ipv6_address">[IPv6:IPv6:IPv6:IPv6]</a>.</h3>
	<p><i>
		The <a href="/resources#troubleshoot">troubleshooting resources</a> may be useful if it does not work.
	</i></p>
	
</article>
