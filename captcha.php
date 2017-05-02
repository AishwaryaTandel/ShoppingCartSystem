<?php
session_start();
$possible = '23456789bcdfghjkmnpqrstvwxyz';
$text = '';
$i = 0;
while ($i < 5) { 
	$text .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
	$i++;
}

$_SESSION["vercode"] = $text;
$height = 40;
$width = 120;
  
$image_p = imagecreate($width, $height);

$white = imagecolorallocate($image_p, 0, 0, 0);
$white = imagecolorallocate($image_p, 255, 255, 255);
$font_size = 25;
  
imagestring($image_p, 14, 0, 0, $text, $white); // 
imagejpeg($image_p, null, 80);
?>