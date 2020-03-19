<!-- //Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<!-- https://pastebin.com/CkX3680A. -->


<?php
  $db = [
    'teachers' => [
      [
        'name' => 'Michele',
        'lastname' => 'Papagni'
      ],
      [
        'name' => 'Fabio',
        'lastname' => 'Forghieri'
      ]
    ],
    'pm' => [
      [
        'name' => 'Roberto',
        'lastname' => 'Marazzini'
      ],
      [
        'name' => 'Federico',
        'lastname' => 'Pellegrini'
      ]
    ]
  ];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Snack 4</title>
    <style>
        .green{
            background: green;
            padding: 10px;
        }
        .grey{
            background: grey;
            padding: 10px;
        }
    </style>
</head>
<body>
  <div class="green">
    <ul>
      <?php
        $pms= $db['pm'];
        for ($i=0; $i < count($pms) ; $i++) {
        // code...
        echo '<li>'. $pms[$i]['name'] . ' ' . $pms[$i]['lastname']. '</li>';
      } ?>
    </ul>
  </div>
  <div class="grey">
    <ul>
      <?php
        $teachers= $db['teachers'];
        for ($i=0; $i < count($teachers) ; $i++) {
        // code...
        echo '<li>'. $teachers[$i]['name'] . ' ' . $teachers[$i]['lastname']. '</li>';
      } ?>
    </ul>
  </div>
</body>
</html>
