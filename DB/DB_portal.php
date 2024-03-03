<?php
$dbuser = 's24540';
$dbpass = 'trolololo';
$dsn = "mysql:host=localhost;dbname=mort"; //szuflandia.pjwstk.edu.pl btw!!
$db = new PDO($dsn, $dbuser, $dbpass);

$q = $db->prepare("SELECT * FROM samochody");
$que = $db->prepare("SELECT * FROM samochody WHERE id = " . $_GET['id']);

$query = $db->query($q);
$query2 = $db->query($que);

$result = $query->fetchAll(PDO::FETCH_ASSOC); //usunąć po sprawdzeniu działania

var_dump($result); // też usunąć
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="x-iso-8859-11">
    <title>Samochody</title>
</head>
<body>
<?php

$thOnPage = 5;
if(isset($_GET['page']))
{
    $page = intval($_GET['page']);
}
else
{
    $page = 0;
}

$count = count($result['id']); //???
$strony = ceil($count/$thOnPage);

if($page < 0 || $page >= $count)
{
    $page = 0;
}

?>
<div>
<div id="wstep" style="text-align:center">
<?php
for($i = 0; $i < $thOnPage; $i++)
{
    $carNmb = $page * $thOnPage + $i;
    if($carNmb >= $count) break;
    $quest = $db->prepare("SELECT id, marka, model FROM samochody WHERE id = " . $i);
    $queryCar = $db->query($quest);
    $result = $queryCar->fetch(PDO::FETCH_OBJ);
    $carLink = "<a href='DB_samochód.php?id=$carNmb'>Czytaj więcej</a>";

    while($row = $result)
    {
        print_r($row);
    }
    echo $result; // ??? nie wiem które
    echo $carLink;
    echo '<br />';
}
?>
</div>
<div id="poprzednie" style="text-align:center">
<?php
$first = 0;
$last = $strony - 1;

if($page < $strony - 1)
{
    $next = $page + 1;
}
else
{
    $next = $strony - 1;
}

if($page > 0)
{
    $prev = $page - 1;
}
else
{
    $prev = 0;
}

if($prev >= $first)
{
    echo "<a href=\"./DB_portal.php?page=$prev\">Poprzednia strona</a>&nbsp;";
}
if($next <= $last)
{
    echo "<a href=\"./GRAF_index.php?page=$next\">Następna strona</a>&nbsp;";
}
?>
</div>
</div>
</body>
</html>
