<?php
require("../PHP/require.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Homepagina</title>
  <link rel="shortcut icon" href="../MEDIA/logo.jpg" type="image/x-icon" />
  <link rel="stylesheet" href="../CSS/style.css" />
  <link rel="stylesheet" href="../CSS/colors.css" />
  <link rel="stylesheet" href="../CSS/headerfooter.css">
</head>

<body>
  <header>
    <nav class="navbar">
      <div class="nav-logo">
        <img src="../MEDIA/logo.jpg" alt="Logo" class="logo">
        Villas4U
      </div>
      <div class="nav-links">
        <a href="./index.php">Home</a>
        <a href="./contact.php">Contact</a>
      </div>
    </nav>
  </header>
  <main>
    <section class="main-cards">
      <?php
      if (!$db_connection->connect_error) {
        $SQL = "SELECT * FROM villas_indexpage";

        $result = $db_connection->query($SQL);

        while ($detailsvilla = $result->fetch_assoc()) {
          $ID = $detailsvilla['ID'];
          $Title = $detailsvilla['Name'];
          $Image = $detailsvilla['IMG'];
          $Bid = $detailsvilla['BID'];

          echo "<a href='./view.php?$ID'><div class='card'>
          <div class='image'><img width='317px' height='255px' src=$Image></img></div>
          <span class='title'>$Title</span>
          <span class='price'>$$Bid k.k.</span>
        </div></a>";
        }
      } else {
        echo "Database not found" . $db_connection->connect_error;
      }

      $db_connection->close();
      ?>
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
        <h4 class="opacity-75">© 2023 Villas4U</h4>
        <h4>Site built by Maddox, Nebi, Rayane</h4>
      </div>
    </div>

  </footer>
</body>

</html>