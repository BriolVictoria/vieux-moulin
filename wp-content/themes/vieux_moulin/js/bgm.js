document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.nav_bgm');
    const menu = document.querySelector('.navigation_header');

    burger.addEventListener('click', () => {
        const isActive = burger.classList.toggle('active');
        menu.classList.toggle('active');

        burger.setAttribute('aria-expanded', isActive);
    });
});
