// Cambiar entre candidato y empleador
const candidateBtn = document.getElementById('candidate-btn');
const employerBtn = document.getElementById('employer-btn');

candidateBtn.addEventListener('click', () => {
    candidateBtn.classList.add('active');
    employerBtn.classList.remove('active');
    document.getElementById('register-form').setAttribute('data-role', 'candidate');
});

employerBtn.addEventListener('click', () => {
    employerBtn.classList.add('active');
    candidateBtn.classList.remove('active');
    document.getElementById('register-form').setAttribute('data-role', 'employer');
});

// Validación básica para asegurar que las contraseñas coincidan
const form = document.getElementById('register-form');
form.addEventListener('submit', (e) => {
    const password = document.getElementById('password').value;
    const repeatPassword = document.getElementById('repeat-password').value;

    if (password !== repeatPassword) {
        e.preventDefault();
        alert('Passwords do not match');
    }
});
