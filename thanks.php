<?php

$name = $_POST['name'];
$courriel = $_POST['courriel'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

echo "
    Merci $name de nous avoir contacté à propos de \"$subject\"<br><br>
    Un de nos conseillers vous contactera soit à l’adresse $courriel ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande :<br><br>
    $message
";