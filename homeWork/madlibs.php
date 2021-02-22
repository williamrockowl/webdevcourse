<!DOCTYPE html>
<html>
    <head>
        <title>This is the PHP page</title>
        <link rel="stylesheet" href="madlibsCSS.CSS" type="text/css">
</head>
<body>

<h1>Welcome To MADLIBS</h1>

<form action="madlibs.php" method="post" />
    First Name: <input type="text" name="first" /> </br>
    Last Name: <input type="text" name="last" /> </br>
    Noun: <input type="text" name="noun" /> </br>
    Verb: <input type="text" name="verb" /> </br>
    Adjective: <input type="text" name="adjective" /> </br>
    Plural Noun: <input type="text" name="pluralNoun" /> </br>
    Town: <input type="text" name="town" /> </br>
    State: <input type="text" name="state" /> </br>
    Tech Device: <input type="text" name="tech" /> </br>
    Sport: <input type="text" name="sport" /> </br>
    <input type="submit" name="submit_btn" value="submit">
</form>

<br><br>

<?php
if (isset($_POST['submit_btn'])) {
    $first = ' ';
    $last = ' ';

    if(isset($_POST['first']) && $_POST['first'] != ''){
        $first = $_POST['first'];
    } else {
        echo "<h2>First Name needs to be filled!</h2>";
    }
    if(isset($_POST['last']) && $_POST['last'] != ''){
        $last = $_POST['last'];
    } else {
        echo "<h2>Last Name needs to be filled!</h2>";
    }
    if(isset($_POST['noun']) && $_POST['noun'] != ''){
        $noun = $_POST['noun'];
    } else {
        echo "<h2>Noun needs to be filled!</h2>";
    }
    if(isset($_POST['verb']) && $_POST['verb'] != ''){
        $verb = $_POST['verb'];
    } else {
        echo "<h2>Verb needs to be filled!</h2>";
    }
    if(isset($_POST['adjective']) && $_POST['adjective'] != ''){
        $adjective = $_POST['adjective'];
    } else {
        echo "<h2>Adjective needs to be filled!</h2>";
    }
    if(isset($_POST['pluralNoun']) && $_POST['pluralNoun'] != ''){
        $pluralNoun = $_POST['pluralNoun'];
    } else {
        echo "<h2>PluralNoun needs to be filled!</h2>";
    }
    if(isset($_POST['town']) && $_POST['town'] != ''){
        $town = $_POST['town'];
    } else {
        echo "<h2>Town needs to be filled!</h2>";
    }
    if(isset($_POST['state']) && $_POST['state'] != ''){
        $state = $_POST['state'];
    } else {
        echo "<h2>State needs to be filled!</h2>";
    }
    if(isset($_POST['tech']) && $_POST['tech'] != ''){
        $tech = $_POST['tech'];
    } else {
        echo "<h2>Tech Device needs to be filled!</h2>";
    }
    if(isset($_POST['sport']) && $_POST['sport'] != ''){
        $sport = $_POST['sport'];
    } else {
        echo "<h2>Sport needs to be filled!</h2>";
    }


    $noun = $_POST['noun'];
    $verb = $_POST['verb'];
    $adjective = $_POST['adjective'];
    $pluralNoun = $_POST['pluralNoun'];
    $town = $_POST['town'];
    $state = $_POST['state'];
    $tech = $_POST['tech'];
    $sport = $_POST['sport'];

    echo "Today $first $last went to $noun class. </br>";
    echo "I woke up late because last night I had a little $verb. </br>";
    echo "After class I saw a group of $pluralNoun. </br>";
    echo "After seeing them, I thought to myself </br>";
    echo "I love $town! It's so $adjective here. </br>";
    echo "I'm glad I came to $state. </br>";
    echo "All I did was go on my $tech and bought a flight. </br>";
    echo "I may as well go and buy a $sport ticket to the game. </br>";

}
    ?>

</body>

</html>


