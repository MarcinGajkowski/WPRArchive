<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Moja pierwsza stronka :)</title>
</head>
<body>
    <?php
    $strony[0] = [
        'nazwa' => 'Strona glowna',
        'link' => 'glowna',
        'tresc' => 'Witamy na naszej stronie!'
    ];
    $strony[1] = [
        'nazwa' => 'O nas',
        'link' => 'onas',
        'tresc' => 'To dzięki tym osobom tu jesteś: '
    ];
    $strony[2] = [
        'nazwa' => 'FAQ',
        'link' => 'pytania',
        'tresc' => 'Często zadawane pytania: '
    ];
    ?>
    <a href="HTML_GET2.php?link=glowna">Strona główna</a>
    <a href="HTML_GET2.php?link=onas">O nas</a>
    <a href="HTML_GET2.php?link=pytania">FAQ</a><br />
    <?php
    if($_GET['link'] == 'glowna')
    {
        echo $strony[0]['nazwa'];
        echo '<br />';
        echo '<br />';
        echo $strony[0]['tresc'];
    }
    elseif($_GET['link'] == 'onas')
    {
        echo $strony[1]['nazwa'];
        echo '<br />';
        echo '<br />';
        echo $strony[1]['tresc'];
    }
    elseif($_GET['link'] == 'pytania')
    {
        echo $strony[2]['nazwa'];
        echo '<br />';
        echo '<br />';
        echo $strony[2]['tresc'];
    }
    else
    {
        echo $strony[0]['nazwa'];
        echo '<br />';
        echo '<br />';
        echo $strony[0]['tresc'];
    }
    ?>
</body>
</html>
