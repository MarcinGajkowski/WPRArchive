<?php
$kraje = [
    'Wybierz...' => 0,
    'Polska - 10 zł' => 10,
    'Anglia - 15 zł' => 15,
    'Hiszpania - 25 zł' => 25,
    'Islandia - 21 zł' => 21
];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Biuro Podróży</title>
</head>
<body>
<form action="HTML_3.php" method="post">
    <fieldset name="data_pobytu">
    <div>
        <label for="data">Początek pobytu:</label>
        <input type="date" name="data1" value=""/>
    </div>
    <div>
        <label for="data">Koniec pobytu:</label>
        <input type="date" name="data2" value=""/>
    </div>
    </fieldset>
    <fieldset name="dane">
    <div>
        <label for="passengers">Liczba pasażerów:</label>
        <input type="text" name="pass" value=""/>
    </div>
    <div>
        <label for="kraj">Podaj kraj:</label>
        <select name="kraj">
            <?php
            foreach($kraje as $kraj => $kraj_cena)
            {
                echo '<option>'.$kraj.'</option>';
            }
            ?>
        </select>
    </div>
    </fieldset>
    <div>
        <input type="submit" name="wyślij" value="Wyślij" />
    </div>
    <?php
    if($_POST['data2'] > $_POST['data1'])
    {
        if(isset($_POST['pass']) && $kraje[$_POST['kraj']] != 0)
        {
            if(is_numeric($_POST['pass']))
            {
                $data1 = strtotime($_POST['data1']);
                $data2 = strtotime($_POST['data2']);

                $sekund = $data2 - $data1;
                $dni = $sekund / 86400;
                $cena = $kraje[$_POST['kraj']] * $_POST['pass'] * $dni;

                echo "Zaplanowana podróż będzie kosztować $cena złotych.";
            }
            else
            {
                echo "Nie podano konkretnej liczny pasażerów.";
            }
        }
        else
        {
            echo "Nie podano potrzebnych informacji.";
        }
    }
    else
    {
        echo "Niepoprawne ułożenie zakresu pobytu podróży.";
    }
    ?>
</form>
</body>
</html>
