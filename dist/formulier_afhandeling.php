<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jouw formulier</title>
    <!-- CSS: Bootstrap, FA5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">

    <!--  Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <!--  titel    -->
    <link href="https://fonts.googleapis.com/css?family=David+Libre:400,700&display=swap" rel="stylesheet">
    <!--  teksten  -->
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,700,900&display=swap" rel="stylesheet">

    <!--  eigen stylesheet  -->
    <link rel="stylesheet" href="css/webBureau.css">

    <!--  Favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#000000">
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">


</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-custom">
    <a href="index.html" class="navbar-brand"><img src="img/logo_project.svg" alt="Logo Cyber-dev" width="60"
                                                   height="60"></a>
    <button class="navbar-toggler rounded-pill" data-toggle="collapse" data-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="index.html#about" class="nav-link js-scroll-trigger">Wie zijn wij</a>
            </li>
            <li class="nav-item">
                <a href="index.html#projecten" class="nav-link js-scroll-trigger">Onze projecten</a>
            </li>
            <li class="nav-item">
                <a href="index.html#contact" class="nav-link js-scroll-trigger">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<div id="container_php">
    <h1>Bedankt voor je informatie</h1>

    <?php
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $email = $_POST["email"];
    $keuze = $_POST["keuze"];
    $vraag = $_POST["vraag"];

    if (isset($voornaam) != "") {
        echo "<h3 id='voornaam'> Bedankt ", "<span class='text-capitalize'>", $voornaam, ",", "</span>", " dit is je formulier: </h3>";
    } else {
        echo "<p id='error'> Er is iets misgelopen, gelieve het forum opnieuw in te dienen </p>";
    }

    if (isset($voornaam) != "" && isset($achternaam) != "") {
        echo "<p id='naam' class='text-justify'> <span class='font-weight-bold'> Naam:", "</span> ", "<span class='text-capitalize'>", $achternaam, "</span>", " ", "<span class='text-capitalize'>", $voornaam, "</span>", "</p>";
    } else {
        echo "<p id='error'> Er is iets misgelopen, gelieve het forum opnieuw in te dienen </p>";
    }

    if (isset($email) != "") {
        echo "<p id='email' class='text-justify'> <span class='font-weight-bold'> Email: ", "</span> ", $email, "</p>";
    } else {
        echo "<p id='error'> Er is iets misgelopen, gelieve het forum opnieuw in te dienen </p>";
    }

    if (isset($keuze) != "") {
        echo "<p id='keuze' class='text-justify'> <span class='font-weight-bold'> Keuze:", "</span> ", "<span class='text-capitalize'>", $keuze, "</span>", "</p>";
    } else {
        echo "<p id='error'> Er is iets misgelopen, gelieve het forum opnieuw in te dienen </p>";
    }

    if (isset($vraag) != "") {
        echo "<p id='vraag' class='text-center'> <span class='font-weight-bold'> Vraag:", "</span>", "</p>";
        echo "<p class='text-justify'>", "<span class='text-capitalize'>", $vraag, "</span>", "</p>";
    } else {
        echo "<p id='error'> Er is iets misgelopen, gelieve het forum opnieuw in te dienen </p>";
    }

    ?>
</div>
<footer class="footer text-center">
    <div class="container">
        <ul class="list-inline mb-5">
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3"
                   href="https://www.facebook.com/ToegepasteInformatica.ThomasMoreBE/">
                    <i class="icon-social-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3"
                   href="https://twitter.com/CyberDev6?ref_src=twsrc%5Etfw%7Ctwcamp%5Eembeddedtimeline%7Ctwterm%5Eprofile%3ACyberDev6&ref_url=https%3A%2F%2Feduweb.thomasmore.be%2FMINA02%2Fwebbureau%2Findex.html">
                    <i class="icon-social-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white"
                   href="https://github.com/itfactory-tm/2020-uitd1-JJ-207">
                    <i class="icon-social-github"></i>
                </a>
            </li>
        </ul>
        <p class="text-muted small mb-0"><a href="https://www.thomasmore.be/">Thomas More</a> &copy; Cyber-Dev 2020</p>
    </div>
</footer>

<!-- JS: jQuery, Bootstrap, stylish portfolio -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="js/stylish-portfolio.min.js"></script>

<script src="https://code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

</body>

</html>