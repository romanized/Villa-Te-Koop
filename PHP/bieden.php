<?php
require("./require.php");
$voorNaamError = "";
$achterNaamError = "";
$telefoonNummerError = "";
$emailError = "";
$bodError = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {
        if (empty($_POST['voornaam'])) {
            $voorNaamErrorror = "U moet uw Voornaam nog invullen";
        } else {
            $voorNaam = $_POST['voornaam'];
        }

        if (empty($_POST['voornaam'])) {
            $achterNaamError = "U moet uw Achternaam nog invullen";
        } else {
            $achterNaam = $_POST['achternaam'];
        }

        if (empty($_POST['voornaam'])) {
            $telefoonNummerError = "U moet uw Achternaam nog invullen";
        } else {
            $telefonNummer = $_POST['telefoonnummer'];
        }

        if (empty($_POST['email'])) {
            $emailError = "U moet uw Email nog invullen";
        } else {
            $email = $_POST['email'];
        }

        if (empty($_POST['bod'])) {
            $bodError = "U moet uw Bod nog invullen";
        } else if (!empty($_POST['bod'])) {
            $bod = $_POST['bod'];
        } 
        
        if ($achterNaamError == "") {
            if ($bodError == "") {
                if ($emailError == "") {
                    if ($telefoonNummerError == "") {
                        if ($voorNaamError == "") {
                            if ($bod <! 1000000) {
                                include_once("../Frontend/view.php");
                                "INSERT INTO bieden 
                                (voornaam, 
                                achternaam, 
                                telefoonnummer, 
                                email,
                                bod) 
                                VALUES 
                                ($voorNaam, 
                                $achterNaam, 
                                $telefonNummer, 
                                $email, 
                                $bod)";
                            }
                        } else {
                            include_once("../Frontend/view.php");
                        }
                    }
                }
            } 
        }
    } else {
        header(header: '../Frontend/view.php');
    }
}