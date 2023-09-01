<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {    
        $naam = $_POST['first_name'];
        $adres = $_POST['Adres'];
        $telefoonNummer = $_POST['telefoonnummer'];
        $email = $_POST['email'];
        $vraag = $_POST['comments'];
            $insertsql = "INSERT INTO `contact_gegevens`
                (`Naam`,
                `Adres`, 
                `Telefoonnummer`,
                `Email`, 
                `Vraag`) 
                VALUES
                ('$naam',
                '$adres',
                '$telefoonNummer',
                '$email',
                '$vraag')";
            if ($db_connection->query($insertsql) == TRUE) {
                header("Location: index.php");
            } else {
                echo "Error :" . $insertsql . "<br>" . $db_connection->error;
            }
        }
    }

