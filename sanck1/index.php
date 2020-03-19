<!-- Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa. -->

<?php

$password=$_GET['password'];

if ($password == 'Boolean'){
    $class= 'green';
    $messaggio= 'Accesso autorizzato';
} else {
    $class= 'red';
    $messaggio= 'Accesso non autorizzato';
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack 1</title>
      <style>
          .green{
              color: green;
          }
          .red{
              color: red;
          }
      </style>
  </head>
  <body>
    <p class="<?php echo $class; ?>"><?php echo $messaggio?></p>
  </body>
</html>
