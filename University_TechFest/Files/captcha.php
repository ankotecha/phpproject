<?php
session_start();
header("Content-type: image/png");
$text = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
//$text = rand(10000,99999); 
$_SESSION["vercode"] = $text; 
$font  = 12;
$width  = imagefontwidth($font) * strlen($text);
$height = imagefontheight($font);

$image = imagecreatetruecolor($width,$height);
$white = imagecolorallocate($image,255,255,255);
$black = imagecolorallocate($image,0,0,0);
imagefill($image,0,0,$white);

imagestring ($image,$font,0,0,$text,$black);

imagepng ($image);

?>

