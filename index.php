<?php
$channel = $_GET['c'];
$data = file_get_contents('https://freewebtools.com/compteur-youtube/?channelId=UC-lHJZR3Gqxm24_Vd_AJ5Yw');
$obj = json_decode($data);


echo $obj->timestamp;
?>
