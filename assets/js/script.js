document.addEventListener("DOMContentLoaded", function () {

    // navbar active class js 
    const navLinksActive = document.querySelectorAll(".navbar .nav-link");
    navLinksActive.forEach(link => {
        link.addEventListener("click", function () {
            navLinksActive.forEach(l => l.classList.remove("active"));
            this.classList.add("active");
        });
    });


    // mobile toggle menu js
    const toggleMenu = document.querySelector(".toggle-menu");
    const navbar = document.querySelector(".navbar-wrapper");
    const navLinksToggle = document.querySelectorAll(".navbar-wrapper ul li a");
    toggleMenu.addEventListener("click", (e) => {
        e.stopPropagation();
        navbar.classList.toggle("active");
    });
    document.addEventListener("click", (e) => {
        if (!navbar.contains(e.target) && navbar.classList.contains("active")) {
            navbar.classList.remove("active");
        }
    });
    navLinksToggle.forEach(link => {
        link.addEventListener("click", () => {
            navbar.classList.remove("active");
        });
    });



    // window reload js 
    window.addEventListener("load", () => {
        const preloader = document.getElementById("preloader");
        setTimeout(() => {
            preloader.classList.add("hidden");
            document.querySelector(".content").style.display = "block";
        }, 2000);
    });


    // banner swiper js 
    var banner = new Swiper(".swiperbanner", {
        loop: true,
        slidesPerView: 1,
        speed: 2000,
        autoplay: {
            delay: 2000,
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


    // mouse cursor js 
    const cursor = document.querySelector('.cursor');
    document.addEventListener('mousemove', e => {
        cursor.style.top = e.clientY + "px";
        cursor.style.left = e.clientX + "px";
    });
    document.addEventListener('click', () => {
        cursor.classList.add("expand");
        setTimeout(() => {
            cursor.classList.remove("expand");
        }, 500); 
    });


    // scroll top btn js 
    const scrollToTop = document.getElementById('scroll-top');
    window.addEventListener('scroll', function () {
        if (window.scrollY > 200) {
            document.body.classList.add('scroll-visiable')
        } else {
            document.body.classList.remove('scroll-visiable')
        }
    });
    scrollToTop.addEventListener('click', function (e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });




});
