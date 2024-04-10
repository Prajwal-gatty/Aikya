document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('.search-input');
    const poojaCards = document.querySelectorAll('.pooja-card');

    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.trim().toLowerCase();

        poojaCards.forEach(card => {
            const poojaName = card.querySelector('.para1').textContent.trim().toLowerCase();
            if (poojaName.includes(searchTerm)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});