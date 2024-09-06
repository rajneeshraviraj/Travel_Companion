document.addEventListener('DOMContentLoaded', () => {
    const filterButton = document.getElementById('filter-button');
    const budgetSelect = document.getElementById('budget');
    const destinations = document.querySelectorAll('.destination');

    filterButton.addEventListener('click', () => {
        const selectedBudget = budgetSelect.value;

        destinations.forEach(destination => {
            const destinationPrice = parseInt(destination.getAttribute('data-price'), 10);
            let showDestination = false;

            switch (selectedBudget) {
                case 'low':
                    if (destinationPrice <= 49000) showDestination = true;
                    break;
                case 'medium':
                    if (destinationPrice > 49000 && destinationPrice <= 75000) showDestination = true;
                    break;
                case 'high':
                    if (destinationPrice > 75000) showDestination = true;
                    break;
                default:
                    showDestination = true;
            }

            destination.style.display = showDestination ? 'block' : 'none';
        });
    });
});
