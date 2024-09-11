document.addEventListener('DOMContentLoaded', function() {
    const searchForm = document.querySelector('.search-form');
    const searchInputs = searchForm.querySelectorAll('input');
    const searchButton = searchForm.querySelector('button');

    searchForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const jobTitle = searchInputs[0].value;
        const location = searchInputs[1].value;
        console.log(`Searching for ${jobTitle} jobs in ${location}`);
        // Here you would typically send this data to your backend or API
    });

    searchButton.addEventListener('mouseover', function() {
        this.style.backgroundColor = '#0056b3';  // Darker blue on hover
    });

    searchButton.addEventListener('mouseout', function() {
        this.style.backgroundColor = '#007bff';  // Return to original color
    });

    // You can add more interactivity here, such as handling the "Post a Job" and "Sign in" buttons
});