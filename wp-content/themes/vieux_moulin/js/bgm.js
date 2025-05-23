document.addEventListener("DOMContentLoaded", function () {
    const openBtn = document.getElementById("openBtn");
    const closeBtn = document.getElementById("closeBtn");
    const sidenav = document.getElementById("mySidenav");

    openBtn.addEventListener("click", function (e) {
        e.preventDefault();
        sidenav.classList.add("active");
    });

    closeBtn.addEventListener("click", function (e) {
        e.preventDefault();
        sidenav.classList.remove("active");
    });

    // Optionnel : fermer le menu si on clique en dehors
    document.addEventListener("click", function (e) {
        if (
            sidenav.classList.contains("active") &&
            !sidenav.contains(e.target) &&
            !openBtn.contains(e.target)
        ) {
            sidenav.classList.remove("active");
        }
    });
});
