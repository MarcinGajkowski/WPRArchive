<?php
if(isset($_POST['tekst']))
{
    if(!$plik = fopen('PLIKI_tekst.txt', 'a'))
    {
        echo "Nie udało się otworzyć pliku PLIKI_tekst.txt.";
        echo '<br />';
        echo '<a href="PLIKI_zapis.php">Powrót</a>';
    }
    else
    {
        if(fwrite($plik, $_POST['tekst']) === false)
        {
            echo "Wystąpił błąd. Nie udało się dokonać zapisu.";
            echo '<br />';
            echo '<a href="PLIKI_zapis.php">Powrót</a>';
        }
        else
        {
            echo "Nadpisano PLIKI_tekst.txt.";
            echo '<br />';
            echo '<a href="PLIKI_zapis.php">Powrót</a>';
        }
        fclose($plik);
    }
}
