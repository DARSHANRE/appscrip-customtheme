document.addEventListener("DOMContentLoaded", function () {

    const btn = document.querySelector(".menu-toggle");
    const nav = document.querySelector(".nav-menu");

    if (btn && nav) {
        btn.addEventListener("click", function () {
            nav.classList.toggle("active");
        });
    }

    // Close menu after clicking a link (mobile)
    document.querySelectorAll(".nav-menu a").forEach(link => {
        link.addEventListener("click", function () {
            nav.classList.remove("active");
        });
    });

});
