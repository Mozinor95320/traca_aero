document.addEventListener('DOMContentLoaded', function () {
    // Validation du formulaire de création de compte
    const registerForm = document.getElementById('registerForm');
    const password = document.getElementById('register-password');
    const confirmPassword = document.getElementById('register-confirm-password');

    registerForm.addEventListener('submit', function (event) {
        // Réinitialiser les messages d'erreur
        password.classList.remove('is-invalid');
        confirmPassword.classList.remove('is-invalid');

        // Vérification si les mots de passe correspondent
        if (password.value !== confirmPassword.value) {
            event.preventDefault(); // Empêcher l'envoi du formulaire
            password.classList.add('is-invalid');
            confirmPassword.classList.add('is-invalid');
            alert('Les mots de passe ne correspondent pas.');
        }
    });

    // Validation du formulaire de connexion
    const loginForm = document.getElementById('loginForm');
    const loginUsername = document.getElementById('login-username');
    const loginPassword = document.getElementById('login-password');

    loginForm.addEventListener('submit', function (event) {
        // Réinitialiser les messages d'erreur
        loginUsername.classList.remove('is-invalid');
        loginPassword.classList.remove('is-invalid');

        // Vérification de champs vides
        if (loginUsername.value.trim() === '' || loginPassword.value.trim() === '') {
            event.preventDefault(); // Empêcher l'envoi du formulaire
            if (loginUsername.value.trim() === '') {
                loginUsername.classList.add('is-invalid');
            }
            if (loginPassword.value.trim() === '') {
                loginPassword.classList.add('is-invalid');
            }
            alert('Veuillez remplir tous les champs.');
        }
    });
});
