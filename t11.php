<?php
require 'response.php';//include response.php into your code

$r = new response();
$r->addPlayText("PSG Software Technologies"); // Play any text to play
$r->addHangup();
$r->send();

?>

