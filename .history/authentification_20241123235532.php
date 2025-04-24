<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page temporaire</title>
    <style>
        body {
            background-image: url(juju.png);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-family: Arial, sans-serif;
            font-size: 24px;
            text-shadow: 1px 1px 2px black;
        }
    </style>
    <script>
        // Fonction pour rediriger après 20 secondes
        setTimeout(() => {
            window.location.href = "autrepage.html"; // Remplace "autrepage.html" par le lien de la nouvelle page
        }, 20000); // 20000 ms = 20 secondes
    </script>
</head>
<body>
    <div>
        Bienvenue ! Cette page sera redirigée automatiquement dans 20 secondes.
    </div>
</body>
</html>
