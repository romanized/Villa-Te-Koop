<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_data = 'villas4u';

$db_connection = new mysqli($db_host, $db_user, $db_pass, $db_data);

if ($db_connection->connect_errno) {
    die('Failed to connect to MySQL: ' . $db_connection->connect_error);
}
