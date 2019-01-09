<?php
include 'model/clients.php';
include 'controller/index.php';
?>
<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href='assets/bootstrap/css/bootstrap.css'>
        <link rel='stylesheet' href='assets/css/style.css'>
        <script src="assets/js/jquery-3.2.1.js"></script>
        <title>Exercice4</title>
    </head>
    <body>
        <div class="container exercice">
            <h1>PDO - Partie 1 : Lire des données</h1>
            <p>Exercice4</p>
            <p>N'afficher que les clients possédant une carte de fidélité.</p>
        </div>
        <div class="result">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                        <th>Carte de fidélité</th>
                        <th>Numéro de carte</th>
                    </tr>
                </thead>
                <tbody>
                   <!-- un tableau d objet-->
              <?php foreach ($getClientListWithCard as $client) { ?>
                        <tr>
                            <td><?= $client->id ?></td>
                            <td><?= $client->lastName ?></td>
                            <td><?= $client->firstName ?></td>
                            <td><?= $client->birthDate ?></td>
                            <td><?= $client->card ?></td>
                            <td><?= $client->cardNumber ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>  
        </div>
    </body>
</html>