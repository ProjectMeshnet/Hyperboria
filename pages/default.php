<!-- Hero unit (primary focus) -->
<div class="row">
	<div class="span10">
		<div class="hero-unit hidden-phone">
			<h1><?=_("A revolutionary concept")?></h1>
			<p><?=_("<b>Hyperboria</b> is the first and only CJDNS powered decentralized network.")?></p>
			<p><a href="about" class="btn btn-primary btn-large"><?=_("Learn more")?> &raquo;</a></p>
		</div>
	</div>
</div>

<!-- Columns (secondary focus) -->
<div class="row centered">
	<div class="span4">
		<div class="col-wrap">
			<h2><?=_("A new kind of network.")?></h2>
			<!-- short description and link to about page -->
			<p>
				<?=_("You can also learn more about")?> <a href="https://wiki.projectmeshnet.org/Hyperboria">Hyperboria</a> <?=_("on MeshWiki.")?>
			</p><br><br><br><br> <!-- temp padding -->
		</div>
	</div>

	<div class="span4">
		<div class="col-wrap">
			<?php if($connected): ?>
				<h2><?=_("You are connected!")?></h2>
				<p><?=_("You might want to checkout")?>
				<a href="http://[fc5d:baa5:61fc:6ffd:9554:67f0:e290:7535]/">nodeinfo.hype</a></p>
				<br><br><br><br><!-- temp padding -->
			<?php else: ?>
				<h2><?=_("Trouble connecting?")?></h2><!-- or something else -->
				<?=_('Take a look at the <a href="https://wiki.projectmeshnet.org/CJDNS_Troubleshooting">troubleshooting guide</a>!')?><br>
				<?=_("Still can't figure it out? Come chat with us on")?> <a href="http://chat.efnet.org:9090/?channels=%23cjdns&Login=Login">IRC</a> <?=_("where we can help you.")?>
				<br><br><br><!-- temp padding -->
			<?php endif; ?>
		</div>
	</div>

	<div class="span4">
		<div class="col-wrap">
			<h2><?=_("Resources")?></h2>
			<ul>
				<li><a href="https://wiki.projectmeshnet.org/">MeshWiki</a></li>
				<li><a href="https://wiki.projectmeshnet.org/Known_Hyperboria_sites"><?=_("Known Hyperboria sites")?></a></li>
				<li><a href="https://github.com/cjdelisle/cjdns">CJDNS Github</a></li>
			</ul>
		</div>
	</div>

</div>
