<?php

$img = imagecreatetruecolor(801,401);

$bialy = imagecolorallocate($img,255,255,255);
$PLczerwony = imagecolorallocate($img,220,20,60);

$FRniebieski = imagecolorallocate($img,0,38,84);
$FRczerwony = imagecolorallocate($img,237,41,57);

$SWniebieski = imagecolorallocate($img,0,82,147);
$yellow = imagecolorallocate($img,254,203,0);

$NORniebieski = imagecolorallocate($img,0,32,91);
$NORczerwony = imagecolorallocate($img,186,12,47);

$black = imagecolorallocate($img,0,0,0);

imagefill($img, 0,0, $bialy);

imagefilledrectangle($img,0,0,400,100, $bialy);
imagefilledrectangle($img,0,101,400,200, $PLczerwony);

imagefilledrectangle($img,401,0,533,200, $FRniebieski);
imagefilledrectangle($img,534,0,667,200, $bialy);
imagefilledrectangle($img,668,0,800,200, $FRczerwony);

imagefilledrectangle($img,0,201,400,400, $SWniebieski);
imagefilledrectangle($img,125,201,175,400, $yellow);
imagefilledrectangle($img,0,280,400,320, $yellow);


imagefilledrectangle($img,401,201,800,400, $NORczerwony);
imagefilledrectangle($img,510,201,583,400, $bialy);
imagefilledrectangle($img,401,275,800,325, $bialy);
imagefilledrectangle($img,528,201,564,400, $NORniebieski);
imagefilledrectangle($img,401,287,800,312, $NORniebieski);
imagerectangle($img, 401, 201,800,400, $black);


imagejpeg($img, "flagi.jpeg");
imagedestroy($img);

