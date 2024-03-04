<?php

require 'PLIKI_add.php';
require 'PLIKI_sub.php';
require 'PLIKI_mul.php';
require 'PLIKI_div.php';

$a = 45;
$b = 55;
$task = 1;

switch($task)
{
    case 1:
        echo add($a, $b);
        break;
    case 2:
        echo sub($a, $b);
        break;
    case 3:
        echo mul($a, $b);
        break;
    case 4:
        echo div($a, $b);
        break;
    default:
        echo "???";
        break;
}
?>
