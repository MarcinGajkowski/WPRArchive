<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zamów jedzenie na wynos</title>
</head>
<body>
<form action="POWT_index.php" method="post">
    <fieldset name="dane">
    <div>
        <label for="rodzaj">Wybierz z menu:</label>
        <select name="rodzaj">
            <?php
            include('POWT1_dane.php');

            foreach($rodzaje as $rodzaj => $rodzaj_cena)
            {
                echo '<option>'.$rodzaj.'</option>';
            }
            ?>
        </select>
    </div>
    <div>
        <label for="ilosc">Ilość:</label>
        <input type="text" name="ilosc" value=""/>
    </div>
        <?php
        foreach($dodatki as $dodatek => $cena)
        {
            echo '<div>';
            echo '<label for="dodatek">'.$dodatek.'</label>';
            echo "<input type='checkbox' name='dodatek' value='$cena'>";
            echo '</div>';
        }
        ?>
    </fieldset>
    <div>
        <input type="submit" name="Oblicz" value="Oblicz" />
    </div>
    <div>
    <?php
    if(isset($_POST['rodzaj']) && isset($_POST['ilosc']))
    {
        echo oblicz($_POST['rodzaj'], $_POST['ilosc'], $_POST['$dodatek']);
    }
    else
    {
        echo "Proszę ustawić własne dane zamówienia i kliknąć 'Oblicz'.";
    }
    ?>
    </div>
</form>
</body>
</html>