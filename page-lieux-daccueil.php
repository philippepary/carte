<?php
require('vendor/autoload.php');
$faker = Faker\Factory::create()
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
   integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
   crossorigin=""/>
    <link rel="stylesheet" href="style.css">
    <title>Nos antennes</title>
</head>
<body>
    <h1>Nos antennes</h1>

    <div class="container">
        <div class="list">
            <?php for ($i=0; $i < 30; $i++): ?>
                <div class="item js-marker" data-lat="<?= $faker->latitude(43.57639, 43.60639)?>" data-lng="<?= $faker->longitude(3.96306, 3.98306)?>" data-name="Antenne de <?= $faker->words(2) ?>">
                    <img src="http://placehold.it/350x150" alt="l'image est ici">
                    <h4>Contactez-nous!</h4>
                    <p>
                        Le lorem c'est cool Lorem ipsum dolor sit amet consectetur.
                    </p>
                </div>
            <?php endfor; ?>
        </div>

        <div class="map" id="map">
            Lorem ipsum dolor sit amet consectetur.
        </div>
    
    </div>

    <script src="vendor.js"></script>
    <script src="App.js"></script>
</body>
</html>