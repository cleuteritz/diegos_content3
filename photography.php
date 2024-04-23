<?php // FILEPATH: /Applications/MAMP/htdocs/diegos_content3/photography.php 

$sql = "SELECT * 
	 		FROM picture;";
     $picture = $pdo->query($sql);->fetchAll();
?>


<!DOCTYPE>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Photography Page</title>
    <link href="CSS/portfolio.css" type="text/css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/photo_html.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/testimonialsCarousel.js"></script>
</head>
<body>
    <!-- ****** START HEADER ****** -->
    <div class="header">
        <h1><a href="index.html"><img id="logo" src="images/dg.JPG" alt="Diego Garcia Photography Logo" width="100"></a></h1>

        <div class="header-right">
            <a href="index.html">Home</a>
            <a href="about_me.php">About Me</a>
            <a class="active" href="photography.php">Photography</a>
            <a href="contact_me.php">Contact Me</a>
        </div>
    </div>
    <!-- ****** END HEADER ****** -->

    <div class="horoscopes-row">

<div class="horoscope">
    <!-- Create a hyperlink to horoscope.php page with sign as parameter -->
    <a href="picture.php?sign=<?= $picture[0]['id'] ?>">
        <!-- Display image of zodiac with its name as alt text -->
        <img src="<?= $picture[0]['imgSrc'] ?>" alt="<?= $picture[0]['name'] ?>">
    </a>
    <!-- Display name of zodiac sign -->
    <h3><?= $picture[0]['name'] ?></h3>
    <!-- Display birthday range of zodiac sign -->
    <p><?= $zodiacs[0]['location'] ?></p>
</div>

<div class="horoscope">
    <!-- Create a hyperlink to horoscope.php page with sign as parameter -->
    <a href="picture.php?sign=<?= $picture[1]['id'] ?>">
        <!-- Display image of zodiac with its name as alt text -->
        <img src="<?= $picture[1]['imgSrc'] ?>" alt="<?= $picture[1]['name'] ?>">
    </a>
    <!-- Display name of zodiac sign -->
    <h3><?= $picture[1]['name'] ?></h3>
    <!-- Display birthday range of zodiac sign -->
    <p><?= $zodiacs[1]['location'] ?></p>
</div>

<div class="horoscope">
    <!-- Create a hyperlink to horoscope.php page with sign as parameter -->
    <a href="picture.php?sign=<?= $picture[2]['id'] ?>">
        <!-- Display image of zodiac with its name as alt text -->
        <img src="<?= $picture[2]['imgSrc'] ?>" alt="<?= $picture[2]['name'] ?>">
    </a>
    <!-- Display name of zodiac sign -->
    <h3><?= $picture[2]['name'] ?></h3>
    <!-- Display birthday range of zodiac sign -->
    <p><?= $zodiacs[2]['location'] ?></p>
</div>

</div>

<div class="horoscopes-row">

<div class="horoscope">
    <!-- Create a hyperlink to horoscope.php page with sign as parameter -->
    <a href="picture.php?sign=<?= $picture[3]['id'] ?>">
        <!-- Display image of zodiac with its name as alt text -->
        <img src="<?= $picture[3]['imgSrc'] ?>" alt="<?= $picture[3]['name'] ?>">
    </a>
    <!-- Display name of zodiac sign -->
    <h3><?= $picture[3]['name'] ?></h3>
    <!-- Display birthday range of zodiac sign -->
    <p><?= $zodiacs[3]['location'] ?></p>
</div>

<div class="horoscope">
    <!-- Create a hyperlink to horoscope.php page with sign as parameter -->
    <a href="picture.php?sign=<?= $picture[4]['id'] ?>">
        <!-- Display image of zodiac with its name as alt text -->
        <img src="<?= $picture[4]['imgSrc'] ?>" alt="<?= $picture[4]['name'] ?>">
    </a>
    <!-- Display name of zodiac sign -->
    <h3><?= $picture[4]['name'] ?></h3>
    <!-- Display birthday range of zodiac sign -->
    <p><?= $zodiacs[4]['location'] ?></p>
</div>

<div class="horoscope">
    <!-- Create a hyperlink to horoscope.php page with sign as parameter -->
    <a href="picture.php?sign=<?= $picture[5]['id'] ?>">
        <!-- Display image of zodiac with its name as alt text -->
        <img src="<?= $picture[5]['imgSrc'] ?>" alt="<?= $picture[5]['name'] ?>">
    </a>
    <!-- Display name of zodiac sign -->
    <h3><?= $picture[5]['name'] ?></h3>
    <!-- Display birthday range of zodiac sign -->
    <p><?= $zodiacs[5]['location'] ?></p>
</div>
</div>


    <p>Website Author: Connor Leuteritz<br>
        Email: <a href="mailto:cleuteritz@uri.edu" target="_blank">cleuteritz@uri.edu</a><br>
        Last Updated: 02/16/2024
    </p>

    <script src="js/portfolio.js"></script>
</body>
</html>
