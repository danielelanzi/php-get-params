<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php

$name=$_GET['name'];
$mail=$_GET['mail'];
$age=$_GET['age'];

if ((strlen($name>3)) || (strpos($mail, '@')!==false) && (strpos($mail, '.')!==false) || (!is_numeric($age))){
    $messaggio='<span class="green">Accesso autorizzato</span>';
} else {
    $messaggio='<span class="red">Accesso non autorizzato</span>';
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Snack 2</title>
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
<p><?php echo $messaggio?></p>
</body>
</html>
