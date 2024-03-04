<?php
include 'Question.php';
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <title>Congratulations!</title>
    <link rel="shortcut icon" href="LetterGforGrats.gif" type="image/x-icon"/>
    <style type="text/css">

        body {
            font-family: "Berlin Sans FB", serif;
            text-align: center;
        }

        h1 {
            font-size: 150%;
        }

        span {
            color: olivedrab;
            font-size: 150%;
        }

        h2 {
            font-size: 110%;
        }

        a:link, a:visited {
            background-color: burlywood;
            color: olivedrab;
            padding: 15px 25px;
            text-align: center;
            text-decoration: underline;
            display: inline-block;
        }

        a:hover, a:active {
            background-color: olivedrab;
            color: darkturquoise;
            font-size: 150%;
            padding: 30px 50px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

    </style>
</head>

<body>
    <h1>YOU'VE DONE IT &#10071 &#10071</h1>
    <h2>
        You've cleared the Im-<span>BUG</span>-ssible Quiz!<br />
        (I'd assume) you were able to learn many interesting facts about insects all around the world.<br />
        Given your struggles throughout this quiz, I hope that they will (somehow)<br />
        prove themselves useful in the future. Although I highly doubt it.
        <br />
        <br />
        <?php
        if($_SESSION['tries'] == 1)
        {
            echo "You've managed to clear the quiz in " . $_SESSION['tries'] . ' try!<br />';
        }
        else
        {
            echo "You've managed to clear the quiz in " . $_SESSION['tries'] . ' tries!<br />';
        }

        if($_SESSION['tries'] == 1)
        {
            echo "Did you make this quiz or somethin'?";
            echo "<br />";
        }
        elseif($_SESSION['tries'] > 0 && $_SESSION['tries'] < 9)
        {
            echo "Incredible work!";
            echo "<br />";
        }
        elseif($_SESSION['tries'] >= 9 && $_SESSION['tries'] < 19)
        {
            echo "Great job!";
            echo "<br />";
        }
        elseif($_SESSION['tries'] >= 19 && $_SESSION['tries'] < 29)
        {
            echo "Pretty good, if I do say so myself.";
            echo "<br />";
        }
        elseif($_SESSION['tries'] >= 29)
        {
            echo "Could've been better, but I can't blame ya!";
            echo "<br />";
        }

        if($_SESSION['lucky'] > $_SESSION['tries'])
        {
            echo "Your Lucky Number was greater than your reset count!";
            echo "<br />";
            echo "Neat!";
            echo "<br />";
        }
        elseif($_SESSION['lucky'] < $_SESSION['tries'])
        {
            echo "Your Lucky Number was smaller than your reset count!";
            echo "<br />";
            echo "Neat!";
            echo "<br />";
        }
        elseif($_SESSION['lucky'] == $_SESSION['tries'])
        {
            echo "Your Lucky Number was the same as your reset count!";
            echo "<br />";
            echo "Here's a present, since you're so dang lucky!";
            echo "<br />";
            echo '<a href="PROJ_secret.php">Secret!</a>';
            echo '<br />';
            echo '<br />';
        }
        ?>
        <a href="PROJ_logout.php">Back to Title</a>
    </h2>
</body>
</html>