<?php

if(isset($_POST['first']) && isset($_POST['second']))
{
    if(is_numeric($_POST['first']) && is_numeric($_POST['second']))
    {
        if (($_POST['dzialanie']) > 0)
        {
            switch ($_POST['dzialanie'])
            {
                case 1:
                    echo $_POST['first'] + $_POST['second'];
                    break;
                case 2:
                    echo $_POST['first'] - $_POST['second'];
                    break;
                case 3:
                    echo $_POST['first'] * $_POST['second'];
                    break;
                case 4:
                    if ($_POST['second'] != 0)
                    {
                        echo $_POST['first'] / $_POST['second'];
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
elseif(isset($_POST['first']) ^ isset($_POST['second']))
{
    echo "Proszę wypełnić pozostałe pola";
    echo '<br />';
}
else
{
    echo "Proszę wypełnić dane";
}
