<?php
//var_dump ($_GET);
//echo "<hr>";
//echo $_GET['bib'];

// FETCH IMAGE & WRITE TEXT
$img = imagecreatefromjpeg('image/msuvirtualrun-bib.jpg');
$black = imagecolorallocate($img, 0, 0, 0);
$white  = imagecolorallocate($img, 255, 255, 255);
$txt = $_POST['bib'];
$text = $_POST['name'];
$text1 = $_POST['kmm'];
$text2 = "K";
$font = "font/calibrib.ttf";
$font1 = "font/calibri.ttf"; 

//THE IMAGE SIZE
$width = imagesx($img);
$height = imagesy($img);

// THE TEXT SIZE EBIB
$text_size = imagettfbbox(150, 0, $font, $txt);
$text_width = max([$text_size[2], $text_size[4]]) - min([$text_size[0], $text_size[6]]);
$text_height = max([$text_size[5], $text_size[7]]) - min([$text_size[1], $text_size[3]]);
// CENTERING THE TEXT BLOCK
$centerX = CEIL(($width - $text_width) / 2);
$centerX = $centerX<0 ? 0 : $centerX;
$centerX = CEIL(($height - $text_height) / 2);
$centerY = $centerX<0 ? 0 : $centerX;
imagettftext($img, 230, 0, 340, 440, $black, $font, $txt);

//name
$text_size = imagettfbbox(30, 0, $font1, $text);

$text_width = $text_size[0] + (1300 / 2) - ($text_size[4] / 2) ;
$text_height = $text_size[1] + (1300 / 2) - ($text_size[5] / 2) ;
imagettftext($img, 30, 0, $text_width,550, $black, $font1, $text);

//12km1
$text_size = imagettfbbox(20, 0, $font, $text1);
imagettftext($img, 85, 0,60,310,  $white, $font, $text1);

//k
$text_size = imagettfbbox(20, 0, $font, $text2);
imagettftext($img, 85,0,180,310,  $white, $font, $text2);

// OUTPUT IMAGE
header('Content-type: image/jpeg');
imagejpeg($img);
imagedestroy($jpg_image);
?>