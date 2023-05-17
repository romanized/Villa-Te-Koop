<?php

$db_host = 'localhost:3306';
$db_user = 'Maddox';
$db_pass = '%87Y0bei1';
$db_data = 'Villas4Umn';

$db_connection = new mysqli($db_host, $db_user, $db_pass, $db_data);

if (!$db_connection->connect_error) {
    $SQL = "SELECT * FROM contact gegevens";
    // "SELECT all the records FROM the table called Table_Name"
    // "SELECT Onderwerp, Begindatum FROM Table Name";
    // "SELECT only Onderwerp and Begindatum FROM the table called Table_Name"
    $result = $db_connection->query($SQL);

    while ($row = $result->fetch_assoc()) {
        // Array_Name[Table_Coulmn_Name] = Value_From_Record
        $naam = $row['Naam'] . "<BR>";
        $adres = $row['Adres'] . "<BR>";
        $telefoonnummer = $row['Telefoonnummer'] . "<BR>";
        $email = $row['Email'] . "<BR>";
        $vraag = $row['Vraag'] . "<BR>";
    }
} else {
    echo "Database not found" . $db_connection->connect_error;
}

$db_connection->close();
