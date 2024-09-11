// Chart for Profile Visits
const ctx1 = document.getElementById('profileVisitsChart').getContext('2d');
const profileVisitsChart = new Chart(ctx1, {
    type: 'line',
    data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'Profile Visits',
            data: [50, 60, 70, 40, 80, 90, 100],
            borderColor: '#074A7E',
            backgroundColor: '#E5F0F9',
            fill: true,
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false // Importante para que el gráfico respete las proporciones
    }
});

// Chart for Applications
const ctx2 = document.getElementById('applicationsChart').getContext('2d');
const applicationsChart = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'Applications',
            data: [30, 40, 60, 45, 70, 75, 80],
            borderColor: '#FFAB2C',
            backgroundColor: 'rgba(249, 115, 22, 0.2)',
            fill: true,
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false // Importante para que el gráfico respete las proporciones
    }
});

// Obtener todos los elementos del menú
const menuItems = document.querySelectorAll('.menu-item');

// Añadir evento click a cada elemento del menú
menuItems.forEach(item => {
    item.addEventListener('click', function() {
        // Remover clase 'active' de todos los enlaces
        menuItems.forEach(i => i.classList.remove('active'));
        // Agregar clase 'active' al enlace seleccionado
        this.classList.add('active');
    });
});