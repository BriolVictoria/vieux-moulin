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
checkVisibility();