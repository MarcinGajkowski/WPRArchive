<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Do koszyka</title>
</head>
<body>
<form action="POWT2_funkcje.php" method="post">
    <?php
    session_start();
    if(($data = fopen("./POWT_Produkty.txt", "r")) !== FALSE)
    {
        while(($produkty = fgetcsv($data, 1000, ",")) !== FALSE)
        {
            echo '<div>';
            echo '<label for="produkt">' . "$produkty[0] -- sztuk: $produkty[1], cena: $produkty[2] zł   " . '</label>';
            echo '<input type="submit" name="Do koszyka" value="koszyk">';
            echo '   ';
            echo '<input type="submit" name="Usuń z koszyka" value="unkoszyk">';
            echo '<br />';
            echo '</div>';

            if($_POST['Do koszyka'] == "koszyk")
            {
                dodaj($produkty);
            }

            if($_POST['Usuń z koszyka'] == "unkoszyk")
            {
                usun($produkty);
            }
        }

        echo '<input type="submit" name="Usuń wszystko" value="Usuń wszystko">';

        if($_POST['Usuń wszystko'] == "Usuń wszystko")
        {
            wyczysc();
        }

        fclose($data);
    }
    ?>
</form>
</body>
</html>
