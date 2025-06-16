const footer = document.querySelector('footer');

function checkVisibility() {
    if (!footer) return; /*Arrête la fonction qi aucun footer n'est trouvé*/
    const rect = footer.getBoundingClientRect(); /* pour donner les bonne données au footer*/
    const windowBottom = window.innerHeight; /*Si la fenetre du footer est à tel endroit on ajoute la classe visible*/

    if (rect.top < windowBottom - 100) {
        footer.classList.add('visible');
        window.removeEventListener('scroll', checkVisibility);
    }
}

window.addEventListener('scroll', checkVisibility);
checkVisibility();

const burgerBtn = document.querySelector('.nav_bgm');
const menu = document.querySelector('.navigation_header');

burgerBtn.addEventListener('click', () => {
    menu.classList.toggle('active');

    // Gérer l'attribut aria-expanded pour l'accessibilité en ajoutant en true ou un false pour ouvrir
    const expanded = burgerBtn.getAttribute('aria-expanded') === 'true' || false;
    burgerBtn.setAttribute('aria-expanded', !expanded); //inverse la valeur de expanded le const
    /*Pour ouvrir le burger menu*/
});
