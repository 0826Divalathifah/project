function togglePassword(fieldId) {
    const passwordField = document.getElementById(fieldId);
    const toggleIcon = fieldId === 'password' ? document.getElementById('togglePasswordIcon') : document.getElementById('togglePasswordConfirmationIcon');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}
