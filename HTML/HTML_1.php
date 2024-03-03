<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
</head>
<body>
    <form action="kalkulator.php" method="post">
    <div>
        <label for="first">Podaj pierwszą liczbę:</label>
        <input type="text" name="first" value=""/>
    </div>
    <div>
        <label for="second">Podaj drugą liczbę:</label>
        <input type="text" name="second" value=""/>
    </div>
    <div>
        <label for="dzialanie">Podaj działanie na tych dwóch liczbach:</label>
        <select name="dzialanie">
            <option value="0">Wybierz...</option>
            <option value="1">Dodawanie</option>
            <option value="2">Odejmowanie</option>
            <option value="3">Mnożenie</option>
            <option value="4">Dzielenie</option>
        </select>
    </div>
    <div>
        <input type="submit" name="Wylicz" value="wylicz" />
    </div>
</form>
</body>
</html>
