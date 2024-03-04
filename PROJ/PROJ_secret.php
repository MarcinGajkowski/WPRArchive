<?php
session_start();
function showSecret() // !!!
{
    $img = imagecreatefrompng("littleBUG whitebg.png");
    $topText = "You're the";
    $bottomText = "Champ!";

    $fontColor = imagecolorallocate($img, 107, 142, 35);

    $iWidth = imagesx($img);
    $iHeight = imagesy($img);

    $centerX = max( CEIL(($iWidth) / 2) - 75, 0);
    $posY = 1;

    imagestring($img, 12, $centerX, $posY, $topText, $fontColor);

    $centerX = max( CEIL(($iWidth) / 2) - 25, 0);
    $posY = max( CEIL($iHeight * 7/8), 0);

    imagestring($img, 12, $centerX, $posY, $bottomText, $fontColor);

    header("Content-type: image/png");
    imagepng($img);
}

showSecret();