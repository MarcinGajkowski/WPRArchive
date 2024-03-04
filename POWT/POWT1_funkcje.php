<?php
function oblicz($rodzaj, $ilosc, $dodatek)
{
    include('POWT1_dane.php');

    if($rodzaje[$rodzaj] != 0 && isset($ilosc))
    {
        if (is_numeric($ilosc))
        {
            $wynik = $dodatki[$dodatek] + $rodzaje[$rodzaj] * $ilosc;
            echo "Zaplanowana podróż będzie kosztować $wynik złotych.";
            return $wynik;
        }
        else
        {
            echo "Nie podano konkretnej liczby w zamówieniu.";
        }
    }
    else
    {
        echo "Nie podano potrzebnych informacji.";
    }
}
