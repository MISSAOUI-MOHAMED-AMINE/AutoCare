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

details {
    margin: 20px;
}

details > summary {
    padding: 10px;
    width: 200px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    transition: background-color 0.3s ease;
}

details > summary:hover {
    background-color: #2980b9;
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
            
            <a href="logout.php">Log Out</a>
        </nav>
    </header>
<details>
        <summary>Infos</summary>
    <section id="info" class="hidden">
        <?php
        include("info.php");
        ?>
    </section>
    </details>

<details><summary>General Informations Charts</summary>
    <section id="general">
        <?php
    include("dash.php");
    ?>
</section>
</details>
    
    <details><summary>Trends</summary>
<section id="trends">
        <?php
    include("serchdash.php");
?>
</section>
</details>


    <footer>
        <p>&copy; 2023 Le Monde Des Voitures. Tous droits réservés.</p>
    </footer>

</body>

</html>
