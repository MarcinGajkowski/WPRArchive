<?php
include 'Question.php';
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <title>Time for some Questions!</title>
    <link rel="shortcut icon" href="LetterUforYou.gif" type="image/x-icon"/>
    <style type="text/css">

        body {
            text-align: center;
            font-family: "Berlin Sans FB", serif;
        }

        img {
            width: 50%;
        }

        table, tr, td {
            width: 50%;
            border: 4px groove darkblue;
            border-collapse: collapse;
            margin-left: auto;
            margin-right: auto;
        }

        tr, td {
            background-color: beige;
            text-align: center;
        }

        h4 {
            color: #FFFFFF;
            font-size: 65%;
            float: right;
        }

        h4:hover {
            color: cornflowerblue;
            font-size: 65%;
            float: right;
        }

        a:link, a:visited {
            background-color: #6495ED;
            color: Chartreuse;
            padding: 15px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover, a:active {
            background-color: #FF8C00;
            color: CadetBlue;
            padding: 30px 50px;
            text-align: center;
            text-decoration: underline;
            display: inline-block;
        }

    </style>
</head>
<body>
<?php
$queDir = "./Bugs galore";

if(isset($_GET['id']))
{
    $imgId = intval($_GET['id']);
}
else
{
    $imgId = 0;
}

$dir = scandir($queDir);
array_shift($dir);

$count = count($dir);

if($imgId < 0 || $imgId >= $count || !is_numeric($imgId))
{
    $imgId = 0;
}

$imgName = $dir[$imgId];
?>
<div>
    <div id="quest" style="text-align: center">
    <?php
    if(isset($_SESSION['names']) && isset($_SESSION['nick']) && isset($_SESSION['lucky']))
    {
        if (($queries = fopen("./PROJ_Q_and_A.csv", "r")) !== FALSE)
        {
            for ($i = -($imgId - $count); $i < $count; $i++)
            {
                $data[$imgId] = fgetcsv($queries, 1000);
                $quests[$imgId] = new Question($data[$imgId][0], $data[$imgId][1], $data[$imgId][2], $data[$imgId][3], $data[$imgId][4], $data[$imgId][5], $data[$imgId][6], $data[$imgId][7], $data[$imgId][8], $data[$imgId][9], $data[$imgId][10]);
            }
        }

        echo "<img src=\"$queDir/$imgName\" alt=\"$imgName\" style='width: 600px;height: 400px;text-align:center'/>" . '</p>';
        echo "<p style=\"text-align: center\">" . $quests[$imgId]->getId() . ".  " . $quests[$imgId]->getMainDeal() . '</p>';

        $next = $quests[$imgId]->getId();
        $wrong = [$quests[$imgId]->getIncorrect1(), $quests[$imgId]->getIncorrect2(), $quests[$imgId]->getIncorrect3()];
        if($quests[$imgId]->getId() == 1)
        {
            if(!isset($_SESSION['tries']))
            {
                $_SESSION['tries'] = 1;
            }
            else
            {
                $_SESSION['tries']++;
            }
        }
        if($quests[$imgId]->getId() < $count)
        {
            $next = $quests[$imgId]->getId() + 1;
            echo '<table>';
            if($next < $count)
            {
                if ($quests[$imgId]->getAnswerA() == $quests[$imgId]->getCorrect())
                {
                    echo '<tr>';
                    echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=$next')\">" . $quests[$imgId]->getCorrect() . "</a></td>";
                    echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=1')\">" . $quests[$imgId]->getIncorrect1() . "</a></td>";
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=1')\">" . $quests[$imgId]->getIncorrect2() . "</a></td>";
                    echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=1')\">" . $quests[$imgId]->getIncorrect3() . "</a></td>";
                    echo '</tr>';
                }
                elseif ($quests[$imgId]->getAnswerB() == $quests[$imgId]->getCorrect())
                {
                    echo '<tr>';
                    echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=1')\">" . $quests[$imgId]->getIncorrect1() . "</a></td>";
                    echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=$next')\">" . $quests[$imgId]->getCorrect() . "</a></td>";
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=1')\">" . $quests[$imgId]->getIncorrect2() . "</a></td>";
                    echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=1')\">" . $quests[$imgId]->getIncorrect3() . "</a></td>";
                    echo '</tr>';
                }
                elseif ($quests[$imgId]->getAnswerC() == $quests[$imgId]->getCorrect())
                {
                    echo '<tr>';
                    echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=1')\">" . $quests[$imgId]->getIncorrect1() . "</a></td>";
                    echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=1')\">" . $quests[$imgId]->getIncorrect2() . "</a></td>";
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=$next')\">" . $quests[$imgId]->getCorrect() . "</a></td>";
                    echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=1')\">" . $quests[$imgId]->getIncorrect3() . "</a></td>";
                    echo '</tr>';
                }
                elseif ($quests[$imgId]->getAnswerD() == $quests[$imgId]->getCorrect())
                {
                    echo '<tr>';
                    echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=1')\">" . $quests[$imgId]->getIncorrect1() . "</a></td>";
                    echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=1')\">" . $quests[$imgId]->getIncorrect2() . "</a></td>";
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=1')\">" . $quests[$imgId]->getIncorrect3() . "</a></td>";
                    echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=$next')\">" . $quests[$imgId]->getCorrect() . "</a></td>";
                    echo '</tr>';
                }
            }
            elseif($next == $count)
            {
                echo '<tr>';
                echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_results.php')\">" . $quests[$imgId]->getCorrect() . "</a></td>";
                echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=1')\">" . $quests[$imgId]->getIncorrect1() . "</a></td>";
                echo '</tr>';
                echo '<tr>';
                echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=1')\">" . $quests[$imgId]->getIncorrect2() . "</a></td>";
                echo '<td>' . "<a href='#' onclick=\"window.location.replace('PROJ_questions.php?id=1')\">" . $quests[$imgId]->getIncorrect3() . "</a></td>";
                echo '</tr>';
            }
            echo '</table>';
        }
        echo '<h4>';
            echo "All these facts are courtesy of the Department of Systematic Biology, Entomology Section," . '<br />';
            echo "National Museum of Natural History of the Smithsonian Institution, in cooperation with Public Inquiry Services," . '<br />';
            echo "Information Sheet Number 177, 1996";
        echo '</h4>';
    }
    else
    {
        echo "You can't access this quiz's questions unless you filled out the form on the title page.";
        echo '<br />';
        echo '<a href="PROJ_welcome.php">Go there right now!</a>';
    }
    ?>
    </div>
</div>
</body>
</html>