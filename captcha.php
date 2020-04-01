<?php
session_start();

$captcha = rand(1000, 9999);
$_SESSION['captcha'] = $captcha;

$font_size = 16;
$img_width = 70;
$img_height = 40;

header("Content-type: image/jpeg");

$image = imagecreate($img_width, $img_height);
imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 255, 0, 0);
imagettftext($image, $font_size,0, 5, 30, $text_color, 'arial.ttf', $captcha);
imagejpeg($image);
?>