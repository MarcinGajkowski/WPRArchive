<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kalkulator GET</title>
</head>
<body>
    <form action="HTML_GET1.php">
        <div>
            <input type="text" name="a" value=""/>
        </div>
        <div>
            <input type="text" name="b" value=""/>
        </div>
        <div>
            <select name="dzialanie">
                <option value="0">Wybierz...</option>
                <option value="1">Dodawanie</option>
                <option value="2">Odejmowanie</option>
                <option value="3">Mnożenie</option>
                <option value="4">Dzielenie</option>
            </select>
        </div>
        <?php

        if(isset($_GET['a']) && isset($_GET['b']))
        {
            if(is_numeric($_GET['a']) && is_numeric($_GET['b']))
            {
                if (($_GET['dzialanie']) > 0)
                {
                    switch ($_GET['dzialanie'])
                    {
                        case 1:
                            echo $_GET['a'] + $_GET['b'];
                            break;
                        case 2:
                            echo $_GET['a'] - $_GET['b'];
                            break;
                        case 3:
                            echo $_GET['a'] * $_GET['b'];
                            break;
                        case 4:
                            if ($_GET['b'] != 0)
                            {
                                echo $_GET['a'] / $_GET['b'];
                            }
                            else
                            {
                                echo "Wynik nieoznaczony.";
                            }
                            break;
                        default:
                            echo "???";
                            break;
                    }
                }
                else
                {
                    echo "Wybierz działanie dla dwóch podanych liczb.";
                }
            }
            else
            {
                echo "Nie podano poprawnych liczb.";
            }
        }
        elseif(isset($_GET['a']) ^ isset($_GET['b']))
        {
            echo "Proszę wypełnić pozostałe pola";
            echo '<br />';
        }
        else
        {
            echo "Proszę wypełnić dane";
        }
        ?>
    </form>
</body>
</html>
