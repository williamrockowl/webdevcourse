<!DOCTYPE html>
<html>
    <head>
        <title>This is the PHP page</title>
<body>
<form action="site.php" method="get">
    Noun: <input type="text" name="noun"> <br>
    Verb: <input type="text" name="verb"> <br>
    Adjective: <input type="text" name="adjective"> <br>
    Plural Noun: <input type="text" name="pluralNoun"> <br>
<input type="submit">
</form>

<br><br>

<?php
    $noun = $_GET["noun"];
    $verb = $_GET["verb"];
    $adjective = $_GET["adjective"];
    $pluralNoun = $_GET["pluralNoun"];

    echo "Today I went to $noun class. <br>";
    echo "I woke up late because I had a little $verb. <br>";
    echo "After class I saw a group of $adjective $pluralNoun. <br>";
    ?>

</body>
</html>


