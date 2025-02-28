document.addEventListener("DOMContentLoaded", function () {
    // Quita el preloader cuando la página cargue
    document.getElementById('preloader').classList.add('fade-out');
    // Swiper
    var swiper = new Swiper(".swiper-container", {
        loop: true,
        autoplay: {
            delay: 8000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    // time suave Swiper
    setTimeout(() => {
        const section = document.getElementById("home");
        section.classList.remove("opacity-0", "translate-y-10");
    }, 200);
});
