<?php
$channel = $_GET['c'];
$data = file_get_contents("https://freewebtools.com/compteur-youtube/?channelId=$channel");
echo $channel;
?>
