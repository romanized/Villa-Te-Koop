<?php
require('./require.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

    <h1>Contact gegevens</h1>
    <?php
    echo "<table>"; // Start the table
    ?>
    <thead>
        <tr>
            <th>Naam</th>
            <th>Adres</th>
            <th>Telefoonnummer</th>
            <th>Email</th>
            <th>Vraag</th>
        </tr>
    </thead>
    <?php
    if (!$db_connection->connect_error) {
        $SQL = "SELECT * FROM contact_gegevens";

        $result = $db_connection->query($SQL);

        while ($row = $result->fetch_assoc()) {
            $naam = $row['Naam'];
            $adres = $row['Adres'];
            $telefoonnummer = $row['Telefoonnummer'];
            $email = $row['Email'];
            $vraag = $row['Vraag'];

            echo "<tr>"; // Start a new table row
            echo "<td>$naam</td>";
            echo "<td>$adres</td>";
            echo "<td>$telefoonnummer</td>";
            echo "<td>$email</td>";
            echo "<td>$vraag</td>";
            echo "</tr>"; // End the table row
        }
    } else {
        echo "Database not found" . $db_connection->connect_error;
    }

    echo "</table>"; // End the table
    
    $db_connection->close();
    ?>

</body>

</html>