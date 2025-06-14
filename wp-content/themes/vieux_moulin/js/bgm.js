/*
const footer = document.querySelector('footer');

function checkVisibility() {
    if (!footer) return;
    const rect = footer.getBoundingClientRect();
    const windowBottom = window.innerHeight;

    if (rect.top < windowBottom - 100) {
        footer.classList.add('visible');
        window.removeEventListener('scroll', checkVisibility);
    }
}

window.addEventListener('scroll', checkVisibility);
checkVisibility();*/

const burgerBtn = document.querySelector('.nav_bgm');
const menu = document.querySelector('.navigation_header');

burgerBtn.addEventListener('click', () => {
    menu.classList.toggle('active');

    // Gérer l'attribut aria-expanded pour l'accessibilité
    const expanded = burgerBtn.getAttribute('aria-expanded') === 'true' || false;
    burgerBtn.setAttribute('aria-expanded', !expanded);
});
