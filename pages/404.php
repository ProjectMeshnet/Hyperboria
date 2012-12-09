<?php
$locale = "ru_RU.UTF-8";
$domain = "messages";
if (isSet($_GET["lang"])) $locale = $_GET["lang"];
putenv("LANG=".$locale);
setlocale(LC_MESSAGES, $locale);
bindtextdomain($domain, "/home/perd/src/Hyperboria/locale");
bind_textdomain_codeset($domain, 'UTF-8');
textdomain($domain);
?>
<h1><?php echo _("Page not found."); ?></h1>
<p><i><?php echo _("Thats a 404 error, sorry."); ?></i></p>

<!-- What should the user do? Suggested pages could go here. -->
