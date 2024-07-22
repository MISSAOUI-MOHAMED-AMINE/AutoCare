<?php
// Replace these values with your actual database credentials
$conn = new mysqli('localhost', 'root', '', 'plat');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the "car" table
$sql = "SELECT prenom, nom, email, country, dateN, sexe FROM car";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Infos</title>
</head>
<body>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            align-self: center;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
    <h2>Users Infos Table</h2>

    <?php
    if ($result->num_rows > 0) {
        echo '<table border="1">';
        echo '<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Country</th><th>Date of Birth</th><th>Sex</th></tr>';

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["prenom"] . '</td>';
            echo '<td>' . $row["nom"] . '</td>';
            echo '<td>' . $row["email"] . '</td>';
            echo '<td>' . $row["country"] . '</td>';
            echo '<td>' . $row["dateN"] . '</td>';
            echo '<td>' . $row["sexe"] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
    ?>

</body>
</html>
