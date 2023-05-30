<?php
$Error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {
        if (empty($_POST['voornaam'])) {
            $Error .= "U moet uw Voornaam nog invullen<br>";
        } else {
            $voorNaam = $_POST['voornaam'];
        }

        if (empty($_POST['voornaam'])) {
            $Error .= "U moet uw Achternaam nog invullen<br>";
        } else {
            $achterNaam = $_POST['achternaam'];
        }

        if (empty($_POST['voornaam'])) {
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
        } else if (!empty($_POST['bod'])) {
            $bod = $_POST['bod'];
        }

        if ($Error == "") {
            $villas = $_POST["villaname"];
            $insertsql = "INSERT INTO `bieden`
            (`villa`, 
            `vooraam`,
            `achternaam`, 
            `telefoonnummer`,
            `email`, 
            `bod`) 
            VALUES
            ('$villas',
            '$voorNaam',
            '$achterNaam',
            '$telefoonNummer',
            '$email',
            '$bod')";
            if ($db_connection->query($insertsql) == TRUE) {
            } else {
                echo "Error :" . $insertsql . "<br>" . $db_connection->error;
            }
        }
    }
}
