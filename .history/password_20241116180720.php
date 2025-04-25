// Gestion des cercles du mot de passe
const passwordDots = document.querySelectorAll("#passwordDots div");
const hiddenPasswordInput = document.getElementById("hiddenPassword");
let password = "";

// Ajouter un chiffre au mot de passe
function addDigit(digit) {
    if (password.length < 8) {
        password += digit; // Ajouter le chiffre au mot de passe
        passwordDots[password.length - 1].style.backgroundColor = "#000"; // Remplir le cercle
        hiddenPasswordInput.value = password; // Mettre à jour le champ caché
    }
}

// Supprimer le dernier chiffre du mot de passe
function deleteDigit() {
    if (password.length > 0) {
        passwordDots[password.length - 1].style.background = "#d1d1d1"; // Vider le cercle
        password = password.slice(0, -1); // Supprimer le dernier chiffre
        hiddenPasswordInput.value = password; // Mettre à jour le champ caché
    }
}

// Gérer la soumission du formulaire
document.getElementById("passwordForm").addEventListener("submit", function (e) {
    if (password.length !== 8) {
        e.preventDefault(); // Empêcher la soumission si le mot de passe n'est pas complet
        alert("Veuillez entrer un mot de passe à 8 chiffres.");
    }
});
