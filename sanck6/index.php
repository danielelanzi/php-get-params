<!-- Snack6
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.
Qui l’array di esempio:
https://www.codepile.net/pile/R2K5d68z -->


<?php
$posts = [

  '10/01/2019' => [
      [
          'title' => 'Post 1',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 1'
      ],
      [
          'title' => 'Post 2',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 2'
      ],
  ],
  '10/02/2019' => [
      [
          'title' => 'Post 3',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 3'
      ]
  ],
  '15/05/2019' => [
      [
          'title' => 'Post 4',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 4'
      ],
      [
          'title' => 'Post 5',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 5'
      ],
      [
          'title' => 'Post 6',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 6'
      ]
  ],
];
var_dump($posts);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Snack 6</title>
    <style>
       .red {
         color: red;
       }
       .green {
         color: green;
       }
       .grey {
         color: grey;
       }
    </style>
</head>
<body>
  <ul>
    <?php foreach ($posts as $date => $value) {?>
      <li><?php echo $date;?></li>
      <ul>
        <?php foreach ($value as $post): ?>
          <li><span class="grey"><?php echo $post['title']; ?></span> - <span class="green"><?php echo $post['author']; ?></span> : <span class="red"><?php echo $post['text']; ?></span></li>
        <?php endforeach; ?>
      </ul>
    <?php } ?>
  </ul>
</body>
</html>
