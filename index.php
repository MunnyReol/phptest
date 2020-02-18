<?php
$channel = $_GET['c'];
$data = file_get_contents('https://freewebtools.com/compteur-youtube/?channelId=UC-lHJZR3Gqxm24_Vd_AJ5Yw');
$obj = json_decode($data);
$pubDate = $obj->publishedAt;
$countAPI = $obj->subscriberCount;
$timestamp = $obj->timestamp;
$actualTimestamp = time() / 1000;
echo $actualTimestamp;
?>
