/* =========================================
   ✅ Lucide Icons Init
   ========================================= */
document.addEventListener("DOMContentLoaded", () => {
    if (typeof lucide !== "undefined") {
        lucide.createIcons();
    }
});

/* =========================================
   ✅ Number Counter Animation
   ========================================= */
function formatNumber(num) {
    if (num >= 1e9) return (num / 1e9).toFixed(1).replace(/\.0$/, "") + "B";
    if (num >= 1e6) return (num / 1e6).toFixed(1).replace(/\.0$/, "") + "M";
    if (num >= 1e3) return (num / 1e3).toFixed(1).replace(/\.0$/, "") + "k";
    return num;
}

document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");
    let triggered = false;

    function animateCounters() {
        counters.forEach(counter => {
            const value = +counter.getAttribute("data-target");
            const prefix = counter.getAttribute("data-prefix") || "";
            const suffix = counter.getAttribute("data-suffix") || "";
            let current = 0;
            const increment = Math.ceil(value / 120);

            const update = () => {
                current += increment;
                if (current < value) {
                    counter.innerText = prefix + formatNumber(current) + suffix;
                    requestAnimationFrame(update);
                } else {
                    counter.innerText = prefix + formatNumber(value) + suffix;
                }
            };
            update();
        });
    }

    const statsSection = document.querySelector("#stats");
    if (statsSection) {
        const observer = new IntersectionObserver(entries => {
            if (entries[0].isIntersecting && !triggered) {
                animateCounters();
                triggered = true;
            }
        }, { threshold: 0.5 });

        observer.observe(statsSection);
    }
});

/* =========================================
   ✅ Swiper.js for Testimonials Slider
   ========================================= */
document.addEventListener("DOMContentLoaded", () => {
    const swiperEl = document.querySelector('.swiper');
    if (swiperEl) {
        const swiper = new Swiper('.swiper', {
            loop: true,
            spaceBetween: 30,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
            }
        });
    }
});

/* =========================================
   ✅ AOS (Animate On Scroll) Init
   ========================================= */
document.addEventListener("DOMContentLoaded", () => {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
        });
    }
});
