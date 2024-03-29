<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$Error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {
        if (empty($_POST['voornaam'])) {
            $Error .= "U moet uw Voornaam nog invullen<br>";
        } else {
            $voorNaam = $_POST['voornaam'];
        }

        if (empty($_POST['achternaam'])) {
            $Error .= "U moet uw Achternaam nog invullen<br>";
        } else {
            $achterNaam = $_POST['achternaam'];
        }

        if (empty($_POST['telefoonnummer'])) {
            $Error .= "U moet uw Achternaam nog invullen<br>";
        } else {
            $telefoonNummer = $_POST['telefoonnummer'];
        }

        if (empty($_POST['email'])) {
            $Error .= "U moet uw Email nog invullen<br>";
        } else {
            $email = $_POST['email'];
        }

        if (empty($_POST['bod'])) {
            $Error .= "U moet uw Bod nog invullen<br>";
        } else {
            $geplaatstBod = $_POST['bod'];
            if (!is_numeric($geplaatstBod)) {
                $Error .= "Bod moet een numerieke waarde zijn<br>";
            } else if ($geplaatstBod < 1000000) {
                $Error .= "Bod moet groter zijn dan 1000000<br>";
            }
        }

        if ($Error == "") {
            $villaname = $_POST["villaname"];
            $insertsql = "INSERT INTO `bieden`
                (`villa`, 
                `voornaam`,
                `achternaam`, 
                `telefoonnummer`,
                `email`, 
                `bod`) 
                VALUES
                ('$villaname',
                '$voorNaam',
                '$achterNaam',
                '$telefoonNummer',
                '$email',
                '$geplaatstBod')";
            if ($db_connection->query($insertsql) == TRUE) {
                header("Location: index.php");
            } else {
                echo "Error :" . $insertsql . "<br>" . $db_connection->error;
            }
        }
    }
}