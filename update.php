<?php

$atom = file_get_contents('http://code.google.com/feeds/p/selenium/downloads/basic');

$startPos = strpos($atom, 'http://selenium.googlecode.com/files/selenium-server-standalone');
$atom = substr($atom, $startPos);
$endPos = strpos($atom, '.jar');
$atom = substr($atom, 0, $endPos + 4);

$out = "<?php header('Location: $atom', true, 302); ?>";
file_put_contents(__DIR__ . '/web/index.php', $out);
