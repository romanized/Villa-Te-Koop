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
    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Adres</th>
                <th>Telefoonnummer</th>
                <th>Email</th>
                <th>Vraag</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $naam ?></td>
                <td><?= $adres ?></td>
                <td><?= $telefoonnummer ?></td>
                <td><?= $email ?></td>
                <td><?= $vraag ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>