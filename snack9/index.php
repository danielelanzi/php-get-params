<!-- Partiamo da questo array di hotel.
https://www.codepile.net/pile/OEWY7Q1G

Stampare tutti i nostri hotel con tutti i dati disponibili.

Avremo un file PHP con il nostro “database” e un file con tutta la logica. -->

<?php
  include __DIR__ . "/server.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>Sanck9</title>
</head>
<body>
  <?php foreach ($hotels as $hotel): ?>
    <div class="info_hotel">
      <h1 alt="name"><?php echo $hotel['name'] ?></h1>
      <h3 alt="description"><?php echo $hotel['description'] ?> : Vi offre un soggiorno lussuoso e rilassante, in un parco con piscina, ampio soggiorno con camino invernale, a pochi minuti a piedi dal centro.</h3>
      <h3 alt="vote">Punteggio: <?php echo $hotel['vote'] ?></h3>
      <h3 alt="distance_to_center">Distanza dal centro: <?php echo $hotel['distance_to_center'] ?> km</h3>
      <h3 alt="parking">Parcheggio: <?php if (($hotel['parking']) == true) {
        echo "Si";
      } else {
        echo "No";
      } ?></h3>
    </div>
  <?php endforeach; ?>
  <script src="script.js" charset="utf-8"></script>
</body>
</html>
