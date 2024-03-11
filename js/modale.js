console.log("Le script est lancé");

document.addEventListener('DOMContentLoaded', function() {
    const boutonContact = document.getElementById('menu-item-8');
    const modaleOverlay = document.querySelector('.popup-overlay');

    function openModal() {
        modaleOverlay.style.display = 'flex';
    }

    function closeModal() {
        modaleOverlay.style.display = 'none';
    }

    if (boutonContact) {
        boutonContact.addEventListener('click', function(event) {
            event.preventDefault();
            openModal();
        });
    }

    window.addEventListener('click', function(event) {
        if (event.target === modaleOverlay) {
            closeModal();
        }
    });
});