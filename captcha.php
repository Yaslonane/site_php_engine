<?php

session_start();
$rand = mt_rand(10000, 99999);
$_SESSION["rand"] = $rand;
$im = imageCreateTrueColor(120, 60);
$c = imageColorAllocate($im, 255, 255, 255);
imageTtfText($im, 20, -10, 10, 30, $c, "fonts/verdana.ttf", $rand);
header("Content-type: image/png");
imagePng($im);
imageDestroy($im);

?>