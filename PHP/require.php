<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_data = 'villas4u';

$db_connection = new mysqli($db_host, $db_user, $db_pass, $db_data);

if (!$db_connection->connect_error) {
    $SQL = "SELECT * FROM villas_indexpage";

    $result = $db_connection->query($SQL);

    while ($detailsvilla = $result->fetch_assoc()) {
        $ID = $detailsvilla['ID'];
    }
} else {
    echo "Database not found" . $db_connection->connect_error;
}

$db_connection->close();
