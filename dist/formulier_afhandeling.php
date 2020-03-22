<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jouw formulier</title>
</head>
<body>
<div>
    <h1>Bedankt voor je informatie</h1>

    <?php
    if (isset($_POST["voornaam"]) && $_POST["voornaam"] != "") {
        echo "<p> Hallo, " . $_POST["voornaam"] . " dit is je formulier: </p>\n";
    } else {
        echo "<p> Er is iets misgelopen, gelieve het forum opnieuw in te dienen </p>\n";
    }

    if (isset($_POST["voornaam"]) && $_POST["voornaam"] != "") {
        echo "<p> Naam: " . $_POST["voornaam"] . " " . $_POST["achternaam"] . "</p>\n";
    } else {
        echo "<p> Er is iets misgelopen, gelieve het forum opnieuw in te dienen </p>\n";
    }

    if (isset($_POST["email"]) && $_POST["email"] != "") {
        echo "<p> Email: " . $_POST["email"] . "</p>\n";
    } else {
        echo "<p> Er is iets misgelopen, gelieve het forum opnieuw in te dienen </p>\n";
    }

    if (isset($_POST["keuze"]) && $_POST["keuze"] != "") {
        echo "<p> Categorie: " . $_POST["keuze"] . "</p>\n";
    } else {
        echo "<p> Er is iets misgelopen, gelieve het forum opnieuw in te dienen </p>\n";
    }

    if (isset($_POST["vraag"]) && $_POST["vraag"] != "") {
        echo "<p> Dit is je bericht: " . $_POST["vraag"] . "</p>\n";
    } else {
        echo "<p> Er is iets misgelopen, gelieve het forum opnieuw in te dienen </p>\n";
    }

    ?>
</div>
</body>
</html>