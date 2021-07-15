<?php 

$string = file_get_contents("./.well-known/assetlinks.json");
$json_a = json_decode($string, true);

echo $json_a;

?>