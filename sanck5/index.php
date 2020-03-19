<!-- Snack php
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->


<?php
  $games = [
    [
      'teamhome' => 'Roma',
      'teamguest' => 'Lazio',
      'pointshome' => 5,
      'pointsguest' => 0,
    ],
    [
      'teamhome' => 'Juventus',
      'teamguest' => 'Atalanta',
      'pointshome' => 2,
      'pointsguest' => 3,
    ],
    [
      'teamhome' => 'Torino',
      'teamguest' => 'Lecce',
      'pointshome' => 3,
      'pointsguest' => 1,
    ]
  ];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Snack 5</title>
    <style>
        
    </style>
</head>
<body>
  <ul>
    <?php foreach ($games as $game) { ?>
    <li>
      <?php echo $game['teamhome']; ?> - <?php echo $game['teamguest']; ?> | <?php echo $game['pointshome']; ?> - <?php echo $game['pointsguest']; ?>
    </li>
    <?php } ?>
  </ul>
</body>
</html>
