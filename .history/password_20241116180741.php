<form action="process_password.php" method="POST" id="passwordForm">
    <div class="password-dots-container">
        <div class="password-dots" id="passwordDots">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <button type="button" class="delete-btn" onclick="deleteDigit()">✕</button>
    </div>

    <!-- Champ caché pour envoyer le mot de passe -->
    <input type="hidden" name="password" id="hiddenPassword">

    <div class="numpad">
        <!-- Boutons numériques -->
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
