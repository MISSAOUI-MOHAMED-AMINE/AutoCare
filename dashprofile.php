<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/pro.js"></script>
    <title>Accueil</title>
    <style>

body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
}

    </style>
</head>


<body>
    <header>
            <a href="homepage.html">
                <img src="photo/logo.png" alt="ValuRide Logo" class="logo">
            </a>    
        <nav>
            <a href="homepage.html">Home</a>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Log Out</a>
        </nav>
    </header>
       <h1>Trends Dashboard</h1>

<section id="trends">
        <?php
    include("serchdash.php");
?>
</section>


    

</body>

</html>
