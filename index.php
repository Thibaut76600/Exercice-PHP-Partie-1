<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ExercicesPartie1PHP</title>
</head>
<body>
    <?php
    $name = 'Lavisse';
    $firstName = 'Thibaut';
    echo $name . ' ' . $firstName;
    ?>
    <p><?= $firstName ?></p>

    <hr>

<?php
$object = 'Je sais pas';
$message = 'Je ne savais pas quoi mettre';
echo $object . ' ' . $message;
?>

<hr>

<?php
$lastName = 'Lavisse';
$firstName = 'Thibaut';
$age = 24;
echo $lastName . ' ' . $firstName . ' ' . $age;
?>

<hr>

<?php
$km = 1;
echo $km . ' ';
$km = 3;
echo $km . ' ';
$km = 125;
echo $km . ' ';
?>

<hr>  

<?php
$name = 'Thibaut'
?>
<p>Bonjour <?= $name ?> comment vas-tu ?</p>

<hr>

<?php
$answer = 'yes';
if ($answer =='yes') {
    echo "Vous avez répondu oui.";
}
else {
    echo "Vous avez répondu non.";
}
?>

<hr>

<?php
$number = 140; 
?>
<p><?= ($number + 30) / 2 ?> </p>

</body>
</html>