// Expand.js av Samuel Gjekic

// Hitta alla kort
const cards = document.querySelectorAll('.card');

// Lyssna efter hover
cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        expandCard(card);
    });

    card.addEventListener('mouseleave', () => {
        collapseCard(card);
    });
});

// Function to expand card
function expandCard(card) {
    card.style.transform = 'scale(1.1)'; // Öka storleken på kortet 
    card.style.transition = 'transform 0.3s ease'; // Lägg till en smoothness effekt
}

// Function to collapse card
function collapseCard(card) {
    card.style.transform = 'scale(1)'; // Återställ kortets storlek
}
