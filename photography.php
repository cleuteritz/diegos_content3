<?php 

    // Include the database connection script
    require 'database-connection.php';


    /*
       TO-DO: Retrieve the value of the 'picture___sheet1__1_' parameter from the URL query string
              (i.e., ../horoscope.php?picture___sheet1__1_=Pisces). Make sure to call this variable $picture___sheet1__1_!

              Write SQL query to retrieve ALL info on the zodiac sign based on picture___sheet1__1_ parameter from the URL query string
              Execute the SQL query using the pdo function and fetch the result
     */

    $picture___sheet1__1_ = $_GET['picture___sheet1__1_'];

    $sql = "SELECT * 
            FROM picture___sheet1__1_
            WHERE name = :picture___sheet1__1_";
    
    $picture = pdo($pdo, $sql, ['picture___sheet1__1_' => $picture___sheet1__1_])->fetch();
    
    // Check if the cookie 'details_' . $picture___sheet1__1_ is not set
    if (!isset($_COOKIE['details_' . $picture___sheet1__1_])) {

        // SQL query to select a random horoscope
        $sql2 = "SELECT * 
            FROM picture___sheet1__1_
            ORDER BY RAND() LIMIT 1";

        // Execute the query and fetch the result
        $details = pdo($pdo, $sql2)->fetch();
        
        // Serialize the details and set it as a cookie
        $serializedDetails = serialize($details);
        setcookie('details_' . $picture___sheet1__1_, $serializedDetails, time() + 60 * 60 * 24);
    }

    else 
    {
        // If the cookie 'details_' . $picture___sheet1__1_ is set, unserialize it to retrieve the details
        $details = unserialize($_COOKIE['details_' . $picture___sheet1__1_]);
    }

?>

<!DOCTYPE html>
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

    <div id="content" class="animate-bottom">
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="<?= $picture['imgSrc'] ?>" alt="<?= $picture['name'] ?>">
                    <div class="container">
                        <h2><?= $picture['name'] ?></h2>
                        <p class="location"><?= $picture['location'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p>Website Author: Connor Leuteritz<br>
        Email: <a href="mailto:cleuteritz@uri.edu" target="_blank">cleuteritz@uri.edu</a><br>
        Last Updated: 02/16/2024
    </p>

    <script src="js/portfolio.js"></script>
</body>
</html>
