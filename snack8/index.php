<!-- Partendo da questo array: https://www.codepile.net/pile/Po60bjgQ

Ad ogni refresh della pagina visualizzare una pubblicità a schermo,
tenendo conto che possono essere sorteggiate solo quelle is_active
true. -->

<?php
  include __DIR__ . "/server.php";
  $advActive = [];
  foreach ($ads as $key => $ad) {
    if ($ad['is_active'] == true) {
      $advActive[] = $ad;
    }
  }
  $num = rand(0,count($advActive) -1);
  $link = $advActive[$num]['link'];
  $img = $advActive[$num]['image_path'];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>Sanck8</title>
</head>
<body>

  <div class="adv">
    <a href="<?php
      echo $link
     ?>"><img src="<?php
      echo $img
     ?>" alt=""></a>
  </div>
  <script src="script.js" charset="utf-8"></script>
</body>
</html>
