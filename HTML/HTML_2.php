<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Szukanie Prime'ów</title>
</head>
<body>
<form action="HTML_2.php" method="post">
    <div>
        <label for="prime">Podaj liczbę:</label>
        <input type="text" name="prime" value=""/>
    </div>
    <div>
        <input type="submit" name="przeszukam" value="Przeszukam..." />
    </div>
    <?php
    function pierwSzosc($prime)
    {
        if($prime < 2 || is_float($prime))
        {
            echo "Nie możemy sprawdzić pierwszości takiej liczby.";
        }
        else
        {
            $n = 2;
            do
            {
                if ($prime % $n == 0)
                {
                    echo '<br />';
                    echo "Liczba iteracji: ".($n - 1);
                    echo '<br />';
                    return 0;
                }
                $n++;
            }while($n < sqrt($prime));

            echo '<br />';
            echo "Liczba iteracji: ".($n - 1);
            echo '<br />';
            return 1;
        }
    }
    if(isset($_POST['prime']))
    {
        if(is_numeric($_POST['prime']))
        {
            $wart = pierwSzosc($_POST['prime']);
            if($wart == 1)
            {
                echo "Liczba " . $_POST['prime'] . " jest liczbą pierwszą!";
            }
            else
            {
                echo "Liczba " . $_POST['prime'] . " nie jest liczbą pierwszą.";
            }
        }
        else
        {
            echo "Nie podano poprawnej liczby.";
        }
    }
    else
    {
        echo "Nie podano żadnych informacji.";
    }
    ?>
</form>
</body>
</html>
