// Validation du formulaire d'inscription
document.getElementById('registerForm').addEventListener('submit', function (event) {
    const password = document.getElementById('register-password').value;
    const confirmPassword = document.getElementById('register-confirm-password').value;

    if (password !== confirmPassword) {
        event.preventDefault(); // Empêche la soumission
        alert('Les mots de passe ne correspondent pas.');
    }
});

// Validation simple du formulaire de connexion
document.getElementById('loginForm').addEventListener('submit', function (event) {
    const username = document.getElementById('login-username').value;
    const password = document.getElementById('login-password').value;

    if (username.trim() === '' || password.trim() === '') {
        event.preventDefault(); // Empêche la soumission
        alert('Veuillez remplir tous les champs.');
    }
});
