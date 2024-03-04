<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

        body {
            height: 3000px;
            background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
        }

        .badass {
            background-color: #FFE4E1;
            border: 6px solid Olive;
            width: 75%;

        }

        @media screen and (max-width: 800px) {
            .badass {
                border: 8px solid OliveDrab;
                width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
            }
        }

        h1 {
            color: red;
            font-size: 125%;

        }

        h2 {
            font-family: Verdana, serif;
            font-size: 85%;
            padding: 20px;
            margin: 25px;

        }

        h3 {
            background-color: Aquamarine;
            font-size: 95%;

        }

        table, th, td {
            border: 2px solid purple;
            border-collapse: collapse;

        }

        th, td {
            background-color: GainsBoro;
            border-radius: 25px;
            border: 3px groove purple;
            text-align: center;

        }

        tr:nth-child(even) {
            background-color: rgba(150, 212, 212, 0.4);

        }

        th:nth-child(odd),td:nth-child(odd) {
            background-color: rgba(150, 212, 212, 0.4);

        }

        tr {
            border-bottom: 2px solid #ddd;

        }

        td:hover {
            background-color: #FF00FF;

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
            padding: 25px 15px;
            text-align: left;
            text-decoration: underline;
            display: inline-block;
        }

        ul {
            width: 85%;
            list-style-type: square;
            margin: 5px;
            padding: 10px;
            overflow: hidden;
            background-color: #4B0082;
        }

        ol {
            width: 55%;
            list-style-type: disc;
            margin: 0;
            padding: 10px;
            overflow: hidden;
            background-color: LightSalmon;
        }

        #Ch5 {
            display: block;
            color: HotPink;
            text-align: center;
            padding: 12px;
            text-decoration: none;
        }

        li:hover {
            background-color: #ADFF2F;

        }

        dl {
            width: 25%;
            background-color: #D534E2;
            color: Maroon;
            text-align: right;

        }

        dt:hover, dd:hover {
            background-color: #0000CD;

        }

        input:hover {
            background-color: indigo;
        }

    </style>

    <title>Cool HTML Practice Session</title>
    <link rel="shortcut icon" href="LetterBforBug.gif" type="image/x-icon"/>

</head>

<body>

<h1 style="background-color:DodgerBlue;" id="Ch1">
    <abbr title="Marvel vs. Capcom 2: New Age of Heroes">MvC2: NAoH</abbr>
    <!-- Friendly Reminder :^) -->
</h1>

<div class="badass">

    <h2 style="border:5px solid BlanchedAlmond; color:BurlyWood" id="Ch2">

        <a href="https://www.w3schools.com/html/html_links.asp" title="Go to W3Schools HTML Links section"><p><em><small>This text is <q>bold</q></small></em></p></a>

        <strong><ins>This</ins> text is <mark>italic</mark></strong>
        <bdo dir="rtl">This is <span style="color:Magenta;font-weight:bold"><sub><del>subscript</del></sub> and <sup>superscript</sup></span></bdo>
    </h2>

    <h3 style="color:BlueViolet;" id="Ch3">
        <a href="https://de.wikipedia.org/wiki/Yo_Mama" title="Proof that Yo Mama Records is real">Composed by Yo Mama Records</a><br>
        Visit us at:<br>
        <a href="https://www.discogs.com/label/Yo+Mama%27s+Recording">yomama.com</a><br>
    </h3>

</div>

<h4 style="position:fixed;">Scroll to see the effect.</h4>

<br />
<div class="badass">

    <table id="Ch4" style="width:75%">

        <caption>The Yo Mama Family of Products</caption>
        <colgroup>
            <col span="3" style="background-color:GoldenRod; text-align:left">
        </colgroup>
        <tr>
            <th colspan="2">Name</th> <th>Fame</th> <th>Same</th> <th>Shame</th><th>Flame</th> <th>Dame</th>
        </tr>

        <tr style="height:75px">
            <td>Yope</td> <td>Cope</td> <td>Soap</td> <td>Roap</td> <td>Hoap</td><td>Noap</td> <td>Loap</td>
        </tr>

        <tr style="height:95px">
            <td>Dope</td> <td>Pope</td> <td>Hope</td> <td>Rope</td> <td>Foam</td> <td>Roam</td> <td>Shop</td>
        </tr>

        <tr style="height:95px">
            <td>Pope</td> <td>Dope</td> <td>Hope</td> <td>Seam</td> <td>Glean</td> <td>Clean</td> <td>FOMO</td>
        </tr>

    </table>

    <br />
    <ul id="Ch5" style="list-style-type: square">
        <li>Goku
            <ul style="list-style-type: disc">
                <li>Goku Black</li>
                <li>Goku Smack</li>
                <li>Goku Knack</li>
            </ul>
        </li>
        <li>Vegeta</li>
        <li>GOATku</li>
    </ul>

    <ol id="Ch6" type="1">
        <li>Derivatives</li>
        <li>Integrals
            <ol type="a" start="6">
                <li>Closed</li>
                <li>Open-ended</li>
            </ol>
        </li>
        <li>Limits</li>
    </ol>

    <dl>
        <dt>This Thing</dt>
        <dd>kinda good</dd>
        <dt>That Thing</dt>
        <dd>kinda STUPID</dd>
    </dl>

</div>

<br />

<div id="Ch7" class="badass">

    <form action="">

        <label for="browsers">List of browsers:</label>
        <input list="browsers" name="browser">
        <datalist id="browsers">
            <option value="Internet Explorer">
            <option value="Firefox">
            <option value="Chrome">
            <option value="Opera">
            <option value="Safari">
            <option value="Microsoft Edge">
        </datalist>
        <input type="submit">

        <br />
        <br />

        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd" name="pwd"><br><br>
        <input type="submit" value="Submit"><br>

        <label for="cars">Choose a car:</label>
        <select id="cars" name="cars" size="3" multiple>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="fiat">Fiat</option>
            <option value="audi">Audi</option>
            <option value="gaudi">Gaudi</option>
            <option value="priat">Priat</option>
        </select>

        <br />
        <br />

        <input type="button" onclick="alert('Yo Mama!')" value="Click Me!">

        <br />

        <label for="favcolor">Select your favorite color:</label>
        <input type="color" id="favcolor" name="favcolor" value="#ff0000">
        <input type="submit" value="Submit">

        <br />
        <br />

        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday">

        <br />
        <br />

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="0" max="105" step="7" value="30">
    </form>

</div>
<br>
<a href=#Ch1>Chapter 1</a>
<a href=#Ch2>Chapter 2</a>
<a href=#Ch3>Chapter 3</a>
<br>
<a href=#Ch4>Chapter 4</a>
<a href=#Ch5>Chapter 5</a>
<a href=#Ch6>Chapter 6</a>
<a href=#Ch7>Chapter 7</a>

</body>
</html>


