<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Moja pierwsza stronka :)</title>
</head>
<body>

<a href="PLIKI_csv.php?link=glowna">Strona główna</a>
<a href="PLIKI_csv.php?link=onas">O nas</a>
<a href="PLIKI_csv.php?link=pytania">FAQ</a><br />
<?php
$row = 1;
if (($nazwy = fopen("./PLIKI_stronka.txt", "r")) !== FALSE)
{
    while (($data = fgetcsv($nazwy, 1000, ",")) !== FALSE)
    {
        if ($_GET['link'] == 'glowna')
        {
            echo $data[0];
            echo '<br />';
            echo '<br />';
            echo $data[2];
        }
        elseif ($_GET['link'] == 'onas')
        {
            echo $data[0];
            echo '<br />';
            echo '<br />';
            echo $data[2];
        }
        elseif ($_GET['link'] == 'pytania')
        {
            echo $data[0];
            echo '<br />';
            echo '<br />';
            echo $data[2];
        }
        else
        {
            echo $data[0];
            echo '<br />';
            echo '<br />';
            echo $data[2];
        }
        echo '<br />';
        var_dump($data);
        echo '<br />';
    }
    fclose($nazwy);
}
?>
</body>
</html>

