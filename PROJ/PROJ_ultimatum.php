<?php  // buttons with JavaScript ???? + remove <form> in here
echo '<table>';
    $next = 1;
    echo '<tr>';
        echo '<td>' . "<a href='#' onclick=\"window.location.href='PROJ_questions.php?id=$next\">" . $quests[$imgId]->getAnswerA() . "</a></td>";
        echo '<td>' . "<a href='#' onclick=\"window.location.href='PROJ_questions.php?id=$next\">" . $quests[$imgId]->getAnswerB() . "</a></td>";
    echo '</tr>';
    echo '<tr>';
        echo '<td>' . "<a href='#' onclick=\"window.location.href='PROJ_questions.php?id=$next\">" . $quests[$imgId]->getAnswerC() . "</a></td>";
        echo '<td>' . "<a href='#' onclick=\"window.location.href='PROJ_questions.php?id=$next\">" . $quests[$imgId]->getAnswerD() . "</a></td>";
    echo '</tr>';
    if( $quests[$imgId]->getAnswerA() == $quests[$imgId]->getCorrect() ||
        $quests[$imgId]->getAnswerB() == $quests[$imgId]->getCorrect() ||
        $quests[$imgId]->getAnswerC() == $quests[$imgId]->getCorrect() ||
        $quests[$imgId]->getAnswerD() == $quests[$imgId]->getCorrect() ) // try out POST-less behavior, maybe do A=GOOD && B=BAD && C=BAD && D=BAD || ...
    {
        if($quests[$imgId]->getId() < $count)
        {
            $next = $quests[$imgId]->getId() + 1;
            echo "Congrats! You can move on!"; // not sure if necessary
            echo '<br />';
            echo "<a href='PROJ_questions.php?id=$next' title='Go to Question #$next'> Next Question </a>";
        }
        elseif($quests[$imgId]->getId() == $count)
        {
            header("location: PROJ_results.php");
            exit;
        }
    }

if( $quests[$imgId]->getAnswerA() == $quests[$imgId]->getCorrect() &&
    $quests[$imgId]->getAnswerB() !== $quests[$imgId]->getCorrect() &&
    $quests[$imgId]->getAnswerC() !== $quests[$imgId]->getCorrect() &&
    $quests[$imgId]->getAnswerD() !== $quests[$imgId]->getCorrect() ||

    $quests[$imgId]->getAnswerA() !== $quests[$imgId]->getCorrect() &&
    $quests[$imgId]->getAnswerB() == $quests[$imgId]->getCorrect() &&
    $quests[$imgId]->getAnswerC() !== $quests[$imgId]->getCorrect() &&
    $quests[$imgId]->getAnswerD() !== $quests[$imgId]->getCorrect() ||

    $quests[$imgId]->getAnswerA() !== $quests[$imgId]->getCorrect() &&
    $quests[$imgId]->getAnswerB() !== $quests[$imgId]->getCorrect() &&
    $quests[$imgId]->getAnswerC() == $quests[$imgId]->getCorrect() &&
    $quests[$imgId]->getAnswerD() !== $quests[$imgId]->getCorrect() ||

    $quests[$imgId]->getAnswerA() !== $quests[$imgId]->getCorrect() &&
    $quests[$imgId]->getAnswerB() !== $quests[$imgId]->getCorrect() &&
    $quests[$imgId]->getAnswerC() !== $quests[$imgId]->getCorrect() &&
    $quests[$imgId]->getAnswerD() == $quests[$imgId]->getCorrect() ) // not sure if this will help


echo '</table>';

$bcd = [$quests[$imgId]->getAnswerB(), $quests[$imgId]->getAnswerC(), $quests[$imgId]->getAnswerD()];
$acd = [$quests[$imgId]->getAnswerA(), $quests[$imgId]->getAnswerC(), $quests[$imgId]->getAnswerD()];
$abd = [$quests[$imgId]->getAnswerA(), $quests[$imgId]->getAnswerB(), $quests[$imgId]->getAnswerD()];
$abc = [$quests[$imgId]->getAnswerA(), $quests[$imgId]->getAnswerB(), $quests[$imgId]->getAnswerC()];

echo '<tr>';
echo '<td>' . "<a href=\"PROJ_questions.php?id=$next\">" . $quests[$imgId]->getCorrect() . "</a></td>";
echo '<td>' . "<a href=\"PROJ_questions.php?id=1\">" . $quests[$imgId]->getIncorrect1() . "</a></td>";
echo '</tr>';
echo '<tr>';
echo '<td>' . "<a href=\"PROJ_questions.php?id=1\">" . $quests[$imgId]->getIncorrect2() . "</a></td>";
echo '<td>' . "<a href=\"PROJ_questions.php?id=1\">" . $quests[$imgId]->getIncorrect3() . "</a></td>";
echo '</tr>';

echo '<tr>';
echo '<td>' . "<a href=\"PROJ_questions.php?id=1\">" . $quests[$imgId]->getIncorrect1() . "</a></td>";
echo '<td>' . "<a href=\"PROJ_questions.php?id=$next\">" . $quests[$imgId]->getCorrect() . "</a></td>";
echo '</tr>';
echo '<tr>';
echo '<td>' . "<a href=\"PROJ_questions.php?id=1\">" . $quests[$imgId]->getIncorrect2() . "</a></td>";
echo '<td>' . "<a href=\"PROJ_questions.php?id=1\">" . $quests[$imgId]->getIncorrect3() . "</a></td>";
echo '</tr>';

echo '<tr>';
echo '<td>' . "<a href=\"PROJ_questions.php?id=1\">" . $quests[$imgId]->getIncorrect1() . "</a></td>";
echo '<td>' . "<a href=\"PROJ_questions.php?id=1\">" . $quests[$imgId]->getIncorrect2() . "</a></td>";
echo '</tr>';
echo '<tr>';
echo '<td>' . "<a href=\"PROJ_questions.php?id=$next\">" . $quests[$imgId]->getCorrect() . "</a></td>";
echo '<td>' . "<a href=\"PROJ_questions.php?id=1\">" . $quests[$imgId]->getIncorrect3() . "</a></td>";
echo '</tr>';

echo '<tr>';
echo '<td>' . "<a href=\"PROJ_questions.php?id=1\">" . $quests[$imgId]->getIncorrect1() . "</a></td>";
echo '<td>' . "<a href=\"PROJ_questions.php?id=1\">" . $quests[$imgId]->getIncorrect2() . "</a></td>";
echo '</tr>';
echo '<tr>';
echo '<td>' . "<a href=\"PROJ_questions.php?id=1\">" . $quests[$imgId]->getIncorrect3() . "</a></td>";
echo '<td>' . "<a href=\"PROJ_questions.php?id=$next\">" . $quests[$imgId]->getCorrect() . "</a></td>";
echo '</tr>';



    /////////////////////////////// put <form> in here !!
echo '<form action="PROJ_goBack.php" method="post">';

echo '<table>';
    echo '<tr>';
        echo '<td>' . "<input type=\"submit\" name=\"answerA\" value=\"" . $quests[$imgId]->getAnswerA() . "\" />" . '</td>';
        echo '<td>' . "<input type=\"submit\" name=\"answerA\" value=\"" . $quests[$imgId]->getAnswerB() . "\" />" . '</td>';
    echo '</tr>';
    echo '<tr>';
        echo '<td>' . "<input type=\"submit\" name=\"answerA\" value=\"" . $quests[$imgId]->getAnswerC() . "\" />" . '</td>';
        echo '<td>' . "<input type=\"submit\" name=\"answerA\" value=\"" . $quests[$imgId]->getAnswerD() . "\" />" . '</td>';
    echo '</tr>';
    if( $_POST["answerA"] == $quests[$imgId]->getCorrect() ||
        $_POST["answerB"] == $quests[$imgId]->getCorrect() ||
        $_POST["answerC"] == $quests[$imgId]->getCorrect() ||
        $_POST["answerD"] == $quests[$imgId]->getCorrect() )
    {
        if($quests[$imgId]->getId() < $count)
        {
            $next = $quests[$imgId]->getId() + 1;
            echo "Congrats! You can move on!";
            echo '<br />';
            echo "<a href='PROJ_questions.php?id=$next' title='Go to Question #$next'> Next Question </a>";
        }
        elseif($quests[$imgId]->getId() == $count)
        {
            header("location: PROJ_results.php");
            exit;
        }
    }
echo '</table>';
echo '</form>';