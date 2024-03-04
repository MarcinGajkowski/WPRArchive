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
    $thumbDir = "./Galeria miniaut";

    if(isset($_GET['iId']))
    {
        $iId = intval($_GET['iId']);
    }
    else
    {
        $iId = 0;
    }

    $dir = scandir($thumbDir);
    array_shift($dir);
    array_shift($dir);

    $count = count($dir);

    if($iId < 0 || $iId >= $count)
    {
        $iId = 0;
    }
?>
<div id="miniatury" style="text-align:center">
<?php
    if (($nazwy = fopen("./OBJsamochody.csv", "r")) !== FALSE)
    {
        for($i = 0; $i < $count; $i++)
        {
            $data[$i] = fgetcsv($nazwy, 1000);
            $cars[$i] = new Samochod($data[$i][0], $data[$i][1], $data[$i][2], $data[$i][3], $data[$i][4], $data[$i][5], $data[$i][6]);
        }
    }

    for($i = 0; $i < $count; $i++)
    {
        $imgNmb = $cars[$i]->getID();
        $imgName = $dir[$imgNmb - 1];
        $imgTag = "<img src=\"$thumbDir/$imgName\" alt=\"$imgName\" style='height: 450px; width: 600px'/>";
        $aHead = "<a href=" . $cars[$i]->getLink() . ">";
        $aFoot = '</a>';
        echo "".$cars[$i]->getMarka()." ".$cars[$i]->getModel()."$aHead $imgTag $aFoot"."<br />";
    }
?>
</div>

<div id="obraz" style="text-align:center">
<?php
    $imgName = $dir[$iId];
    echo "<a href=\"$imgDir/$imgName\" alt=\"$imgName\" />"
?>
</div>
</body>
</html>