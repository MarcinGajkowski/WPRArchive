<?php
include "Pokemon.php";
include "PokemonBattle.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="x-iso-8859-11">
    <title>TCG Battle!</title>
</head>
<body>
<?php
$imgDir = "./Miniatury TCG";

$dir = scandir($imgDir);
array_shift($dir);
array_shift($dir);

$count = count($dir);

$poke[0] = new FireType("Charmander",50);
$poke[1] = new WaterType("Squirtle", 50);
$poke[2] = new LightningType("Pikachu", 50);
$poke[3] = new GrassType("Tangela",80);
$poke[4] = new FightingType("Makuhita",80);
$poke[5] = new PsychicType("Baltoy",70);
$poke[6] = new DarkType("Sneasel",60);
$poke[7] = new ColorlessType("Munchlax",80);

?>
<div id="obraz" style="text-align:center">
    <?php
    $imgName = $dir[1];
    echo "<a href=\"$imgDir/$imgName\" alt=\"$imgName\" />"
    ?>
</div>
</body>
</html>
