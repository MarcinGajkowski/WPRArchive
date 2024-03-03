<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="x-iso-8859-11">
    <title>Galeria obrazów</title>
</head>
<body>
<?php
    $imgDir = "../obrazy narodu";

$imgId = $_GET['imgId'] ?? 0;

    $dir = scandir($imgDir);
    array_shift($dir);
    array_shift($dir);

    $count = count($dir);

    if($imgId < 0 || $imgId >= $count || !is_numeric($imgId))
    {
        $imgId = 0;
    }

    $imgName = $dir[$imgId];

    $first = 0;
    $last = $count - 1;

    if($imgId < $count - 1)
    {
        $next = $imgId + 1;
    }
    else
    {
        $next = $count - 1;
    }

    if($imgId > 0)
    {
        $prev = $imgId - 1;
    }
    else
    {
        $prev = 0;
    }
?>
<div>
    <div id="obraz" style="text-align: center">
    <?php
        echo "<img src=\"$imgDir/$imgName\" alt=\"$imgName\" />";
    ?>
    </div>
    <div id="opis" style="text-align: center">
    <?php
        echo "Obraz $imgName (".($imgId + 1)." z $count)";
        $imgId++;
    ?>
    </div>
    <div id="nawigacja" style="text-align: center">
    <?php
        if($imgId > $first)
        {
            echo "<a href=\"GRAF_zdjęcie.php?imgId=$first\">Pierwszy</a> ";
        }
        if($prev >= $first)
        {
            echo "<a href=\"GRAF_zdjęcie.php?imgId=$prev\">Poprzedni</a> ";
        }
        if($next <= $last)
        {
            echo "<a href=\"GRAF_zdjęcie.php?imgId=$next\">Następny</a> ";
        }
        if($imgId <= $last)
        {
            echo "<a href=\"GRAF_zdjęcie.php?imgId=$last\">Ostatni</a> ";
        }
        echo '<br />';
        echo '<br />';
        echo '<a href="GRAF_index.php">Powrót do galerii</a>';
    ?>
    </div>
</div>
</body>
</html>
