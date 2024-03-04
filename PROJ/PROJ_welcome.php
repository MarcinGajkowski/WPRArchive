<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>The Im-BUG-ssible Quiz!</title>
    <link rel="shortcut icon" href="LetterBforBug.gif" type="image/x-icon"/>

    <style>
        body {
            font-family: "Berlin Sans FB", serif;
            text-align: center;
        }

        span {
            color: olivedrab;
            font-size: 150%;
        }

        input {
            width: 20%;
        }

        #begin input {
            background-color: beige;
            color: navy;
            width: border-box;
        }

        #begin input:hover {
            background-color: indianred;
            color: mediumblue;
        }

    </style>
</head>
<body>
<form action="PROJ_save.php" method="post">
    <h1>Welcome to the Im-<span>BUG</span>-ssible Quiz!</h1>
    <h2>
        This quiz will test your knowledge on miscellaneous facts about various insects.<br />
        And it won't be any basic factoids either.<br />
        You'll go through 10 painstakingly-chosen questions, each one being tougher than the last.<br />
        If you get all 10 of them right, you win!<br />
        However, get one wrong and you'll be sent back to Question 1!<br />
        Ready? Then fill out all the textboxes and BEGIN! the quiz.
    </h2>
    <div>
        <label for="names">Names/Surnames (Up to 4 total)</label>
        <input type="text" name="names" value="" placeholder="Type in your names and surnames here"/>
    </div>
    <div>
        <label for="nick">Nickname (5-25 characters)</label>
        <input type="text" name="nick" value="" placeholder="Type in your nickname here"/>
    </div>
    <div>
        <label for="lucky">Lucky number (1-100)</label>
        <input type="text" name="lucky" value="" placeholder="What's your lucky number?"/>
    </div>
    <div>
        <br />
        <input type="submit" id="begin" name="BEGIN!" value="BEGIN!">
    </div>
</form>
</body>
</html>

