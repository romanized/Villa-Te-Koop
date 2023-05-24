<?php
require("../PHP/require.php");

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$id = substr($url, strrpos($url, '?') + 1);

$SQL = "SELECT * FROM villas_indexpage WHERE ID = $id";

$result = $db_connection->query($SQL);

while ($details = $result->fetch_assoc()) {
    $name = $details['Name'];
    $Image_1 = $details['SLIDEIMG1'];
    $Image_2 = $details['SLIDEIMG2'];
    $Image_3 = $details['SLIDEIMG3'];
    $Indeling = $details['Indeling'];
    $Locatie = $details['Locatie'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Villa View</title>
    <link rel="shortcut icon" href="../MEDIA/logo.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="../CSS/headerfooter.css">
    <link rel="stylesheet" href="../CSS/colors.css" />
    <link rel="stylesheet" href="../CSS/view.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="nav-logo">
                <img src="../MEDIA/logo.jpg" alt="Logo" class="logo">
                <span>Villas4U</span>
            </div>
            <div class="nav-links">
                <a href="./index.php">Home</a>
                <a href="./contact.php">Contact</a>
                <!-- <a href="#">Admin</a> -->
            </div>
        </nav>
    </header>
    <main>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="<?= $Image_1 ?>" />
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="<?= $Image_2 ?>" />
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="<?= $Image_3 ?>" />
            </div>
        </div>
        <br />
        <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <div class="Title">
            <span><?= $name ?></span>
        </div>
        <section class="main-content">
            <div class="content-left">
                <div class="indeling">
                    <span>Indeling</span>
                    <p class="para-indeling"><?= $Indeling ?></p>
                </div>
                <div class="locatie">
                    <h1>Locatie</h1>
                    <iframe width="800" height="450" style="border:0" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="<?= $Locatie ?>">
                    </iframe>
                </div>
            </div>
            <div class="content-right">
                <div class="hoogste-bieding">
                    <span>Hoogste-Bieding</span>
                    <table class="table-bieden">
                        <thead>
                            <th>Naam</th>
                            <th>Bod</th>
                            <th>Datum</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>(Naam)</td>
                                <td>(Bod)</td>
                                <td>(Datum)</td>
                            </tr>
                            <tr>
                                <td>(Naam)</td>
                                <td>(Bod)</td>
                                <td>(Datum)</td>
                            </tr>
                            <tr>
                                <td>(Naam)</td>
                                <td>(Bod)</td>
                                <td>(Datum)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bieden">
                    <span>Doe een bod</span>
                    <div class="form-container">
                        <form method="post" action="../PHP/bieden.php">
                            <div class="form-group">
                                <label class="form-label" for="voornaam">Voornaam:</label>
                                <input class="form-input" type="text" id="voornaam" name="voornaam" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="achternaam">Achternaam:</label>
                                <input class="form-input" type="text" id="achternaam" name="achternaam" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="telefoonnummer">Telefoonnummer:</label>
                                <input class="form-input" type="tel" id="telefoonnummer" name="telefoonnummer" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">E-mail:</label>
                                <input class="form-input" type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="bod">Bod:</label>
                                <input class="form-input" type="text" id="bod" name="bod" required>
                            </div>
                            <input class="form-button" type="submit" value="Plaats Bod">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="grid">
            <div>
                <h4>Locaties:</h4>
                <ul>
                    <li>

                    </li>
                    <li>


                    </li>
                    <li>


                    </li>
                    <li>

                    </li>
                </ul>
            </div>
            <div>
                <h4>Openingstijden:</h4>
                <table table-fixed">
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div>
                <h4>Contact:</h4>
                <h5></h5>
                <h5></h5>
                <h5><a href="telto:06 57785977">06 57785977</a>
                </h5>
                <h5><a href="mailto:maddox.sem.de.rooij@gmail.com">maddox.sem.de.rooij@gmail.com</a></h5>
                <h5></h5>
                <h5></h5>
            </div>
            <div class="text-white">
                <h4 class="opacity-75">© 2023 Villas4U. All Rights Reserved.</h4>
                <h4>Site built by Maddox, Nebi, Rayaan</h4>
            </div>
        </div>

    </footer>
</body>
<script src="../JS/SlideShow.js"></script>

</html>