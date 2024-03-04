<?php
include 'Samochod.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="x-iso-8859-11">
    <title>Samochody</title>
</head>
<body>
<?php
$imgDir = "./Galeria aut";

if(isset($_GET['id']))
{
    $imgId = intval($_GET['id']);
}
else
{
    $imgId = 0;
}

$dir = scandir($imgDir);
array_shift($dir);
array_shift($dir);

$count = count($dir);

if($imgId < 0 || $imgId >= $count || !is_numeric($imgId))
{
    $imgId = 0;
}

$imgName = $dir[$imgId];
?>
<div>
    <div id="obraz" style="text-align: center">
        <?php
        echo "<img src=\"$imgDir/$imgName\" alt=\"$imgName\" />";
        ?>
    </div>
    <div id="opis" style="text-align: center">
    <?php
        if (($nazwy = fopen("./OBJsamochody.csv", "r")) !== FALSE)
        {
            for ($i = 0; $i < $count; $i++)
            {
                $data[$imgId] = fgetcsv($nazwy, 1000);
                $cars[$imgId] = new Samochod($data[$imgId][0], $data[$imgId][1], $data[$imgId][2], $data[$imgId][3], $data[$imgId][4], $data[$imgId][5], $data[$imgId][6]);
            }
            echo " " . $cars[$imgId]->getMarka() . " " . $cars[$imgId]->getModel() . " z roku " . $cars[$imgId]->getRok() . ", miejsce dla " . $cars[$imgId]->getPojemnosc() . " osób.";
            echo '<br />';
            echo "Cena: " . $cars[$imgId]->getCena() . " zł";
        }
    ?>
    </div>
    <div id="nawigacja" style="text-align: center">
        <?php
        echo '<a href="OBJ_index.php">Powrót do galerii</a>';
        ?>
    </div>
</div>
</body>
</html>
