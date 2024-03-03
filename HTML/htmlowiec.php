<?php
$kraje = [
    'Polska' => 10,
    'Anglia' => 15,
    'Hiszpania' => 25,
    'Islandia' => 20
];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>EPICKI Tytuł</title>
</head>
<body>
    <form action="wynik.php" method="post">
        <fieldset name="główne">
        <div>
            <label for="imie">Podaj imię:</label>
            <input type="text" name="imie" value=""/>
        </div>
        <div>
            <label for="plec">Podaj płeć:</label><br />
            <input type="radio" name="plec" value="M" /> M<br />
            <input type="radio" name="plec" value="YOM" /> YOM<br />
        </div>
        </fieldset>
        <fieldset name="inne">
        <div>
            <label for="interest">Podaj zainteresowania:</label><br />
            <input type="checkbox" name="twoja stara" value="1" /> twoja stara<br />
            <input type="checkbox" name="Yo Mama" value="2" /> Yo Mama<br />
        </div>
        <div>
            <label for="semestr">Podaj semestr:</label>
            <select name="semestr">
                <option value="1">Pierwszy</option>
                <option value="2">Drugi</option>
                <option value="3">Trzeci</option>
            </select>
        </div>
            <div>
                <label for="semestr">Podaj kraj:</label>
                <select name="kraj">
                    <?php
                    foreach($kraje as $kraj)
                    {
                        echo '<option>'.$kraj.'</option>';
                    }
                    ?>
                </select>
            </div>
        </fieldset>
        <div>
            <input type="submit" name="wyślij" value="wyślij" />
        </div>
    </form>
</body>
</html>
