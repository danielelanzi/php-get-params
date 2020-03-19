<?php
// echo $_GET['name'];
  $people = [
    'Daniele',
    'Valerio',
    'Diego',
    'Mauro',
    'Andrea',
    'Walter',
    'Roberto'
  ];
  if (empty($_GET['name'])) {
    echo "Non hai inserito un nome";
  } else {
      $name = ucfirst(strtolower($_GET['name']));
      echo "string";

    if (in_array($name, $people)) {
      echo "invitato";
    } else {
      echo "non invitato";
    }
  }

?>
