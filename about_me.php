<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>About Me</title>
    <link href="CSS/about_me.css" type="text/css" rel="stylesheet">
    <!-- Include jQuery library before your custom JavaScript files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Link to your external JavaScript files -->
    <script src="about_me.js"></script>
    <script src="weather_api.js"></script> <!-- Include the weather API file -->
</head>
<body>
 <!-- ****** START HEADER ****** -->
 <div class="header">
    <h1><a href="index.html"><img id="logo" src="images/dg.JPG" alt="Diego Garcia Photography Logo" width="100"></a></h1>
    <div class="header-right">
        <a href="index.html">Home</a>
        <a class="active" href="about_me.php">About Me</a>
        <a href="photography.php">Photography</a>
        <a href="contact_me.html">Contact Me</a>
    </div>
 </div>
 <!-- ****** END HEADER ****** -->
 <div class="column">
    <img src="images/bg_image.jpeg" alt="Diego Garcia Smoldering into the Camera" width="100%">
 </div>

 <?php
include 'about_me_info.php';
?>

 <!-- Weather information placeholder -->
 <div id="weatherContainer"></div>

 <p>Website Author: Connor Leuteritz<br>
    Email:<a href="mailto:cleuteritz@uri.edu" target="_blank">cleuteritz@uri.edu</a><br>
    Last Updated: 02/16/2024
 </p>
</body>
</html>
