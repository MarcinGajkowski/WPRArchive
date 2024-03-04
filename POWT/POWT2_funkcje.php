<?php
session_start();

$data = fopen("./POWT_Produkty.txt", "r");
$produkty = fgetcsv($data, 1000, ",");

function dodaj($produkty)
{
    if(isset($_POST['koszyk']))
    {
        $_SESSION['koszyk'] = $_POST['koszyk'];
        echo "Produkt '$produkty[0]' dodano do koszyka";
        echo '<a href="POWT_koszyk.php">Powrót</a>';
    }
}

function usun($produkty)
{
    if(isset($_POST['unkoszyk']))
    {
        if(isset($_POST['koszyk']))
        {
            unset($_SESSION['koszyk']);
            echo "Produkt '$produkty[0]' usunięto z koszyka";
            echo '<a href="POWT_koszyk.php">Powrót</a>';
        }
        else
        {
            echo "Nic jeszcze nie włożono do koszyka";
            echo '<a href="POWT_koszyk.php">Powrót</a>';
        }
    }
}

function wyczysc()
{
    if(isset($_POST['Usuń wszystko']))
    {
        unset($_SESSION['koszyk']);
        session_destroy();
        header("location: POWT_koszyk.php");
        echo "Wyczyszczono koszyk";
    }
}