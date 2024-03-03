<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="x-iso-8859-11">
    <title>Galeria obrazów</title>
</head>
<body>
<?php
    $imgDir = "../obrazy narodu";
    $thumbDir = "../Miniatury narodu";
    $thOnPage = 4;

    if(isset($_GET['iId']) && isset($_GET['pId']))
    {
        $iId = intval($_GET['iId']);
        $pId = intval($_GET['pId']);
    }
    else
    {
        $iId = 0;
        $pId = 0;
    }

    $dir = scandir($thumbDir);
    array_shift($dir);
    array_shift($dir);

    $count = count($dir);
    $strony = ceil($count/$thOnPage);

    if($iId < 0 || $iId >= $count || $pId < 0 || $pId >= $count)
    {
        $iId = 0;
        $pId = 0;
    }
?>
<div id="miniatury" style="text-align:center">
<?php
    for($i = 0; $i < $thOnPage; $i++)
    {
        $imgNmb = $pId * $thOnPage + $i;
        if($imgNmb >= $count) break;
        $imgName = $dir[$imgNmb];
        $imgTag = "<img src=\"$thumbDir/$imgName\" alt=\"$imgName\" style='height: 150px; width: 200px'/>";
        $aHead = "<a href='GRAF_zdjęcie.php?imgId=$imgNmb'>";
        $aFoot = "</a>";
        echo "$aHead $imgTag $aFoot";
    }
?>
</div>
<div id="nawigacja" style="text-align:center">
<?php
    for($p = 0; $p < $strony; $p++)
    {
        echo "<a href=\"./GRAF_index.php?pId=$p&amp;iId=$iId\">$p</a>&nbsp;";
    }
    echo '<br>'
?>
    <div id="poprzednie" style="text-align:center">
<?php
    $first = 0;
    $last = $strony - 1;

    if($pId < $strony - 1)
    {
        $next = $pId + 1;
    }
    else
    {
        $next = $strony - 1;
    }

    if($pId > 0)
    {
        $prev = $pId - 1;
    }
    else
    {
        $prev = 0;
    }

    if($pId > $first)
    {
        echo "<a href=\"./GRAF_index.php?pId=$first&amp;iId=$iId\">Pierwsza strona</a>&nbsp;";
    }
    if($prev >= $first)
    {
        echo "<a href=\"./GRAF_index.php?pId=$prev&amp;iId=$iId\">Poprzednia strona</a>&nbsp;";
    }
    if($next <= $last)
    {
        echo "<a href=\"./GRAF_index.php?pId=$next&amp;iId=$iId\">Następna strona</a>&nbsp;";
    }
    if($pId <= $last)
    {
        echo "<a href=\"./GRAF_index.php?pId=$last&amp;iId=$iId\">Ostatnia strona</a>&nbsp;";
    }
?>
    </div>
</div>
<div id="obraz" style="text-align:center">
<?php
    $imgName = $dir[$iId];
    echo "<a href=\"$imgDir/$imgName\" alt=\"$imgName\" />"
?>
</div>
</body>
</html>
