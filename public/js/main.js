(function () {
    "use strict";

    const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    const spinner = document.getElementById("spinner");
    const navbar = document.querySelector(".navbar.sticky-top");
    const backToTop = document.querySelector(".back-to-top");
    const navLinks = document.querySelectorAll(".navbar-nav a[href^='#']");
    const collapseEl = document.getElementById("navbarCollapse");
    const collapse = collapseEl && window.bootstrap ? new bootstrap.Collapse(collapseEl, { toggle: false }) : null;

    const scrollToTarget = (target) => {
        if (!target) return;
        target.scrollIntoView({
            behavior: prefersReducedMotion ? "auto" : "smooth",
            block: "start"
        });
    };

    const setActiveLink = (hash) => {
        navLinks.forEach((link) => {
            link.classList.toggle("active", link.getAttribute("href") === hash);
        });
    };

    const syncScrollUi = () => {
        const isScrolled = window.scrollY > 72;

        if (navbar) {
            navbar.classList.toggle("shadow-sm", isScrolled);
        }

        if (backToTop) {
            backToTop.classList.toggle("show", window.scrollY > 260);
        }

        if (window.scrollY < 120) {
            setActiveLink("#top");
        }
    };

    const hideSpinner = () => {
        if (spinner) {
            spinner.classList.remove("show");
        }
    };

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", hideSpinner, { once: true });
    } else {
        hideSpinner();
    }

    if (window.WOW) {
        new WOW({
            mobile: false,
            live: false
        }).init();
    }

    document.querySelectorAll("a[href^='#']").forEach((anchor) => {
        anchor.addEventListener("click", (event) => {
            const href = anchor.getAttribute("href");
            if (!href || href === "#") {
                event.preventDefault();
                return;
            }

            const target = href === "#top" ? document.documentElement : document.querySelector(href);

            if (!target) return;

            event.preventDefault();
            scrollToTarget(target);

            if (anchor.closest(".navbar-nav") && collapse) {
                collapse.hide();
            }
        });
    });

    if (backToTop) {
        backToTop.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: prefersReducedMotion ? "auto" : "smooth"
            });
        });
    }

    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    setActiveLink(`#${entry.target.id}`);
                }
            });
        }, {
            rootMargin: "-35% 0px -55% 0px",
            threshold: 0
        });

        navLinks.forEach((link) => {
            const id = link.getAttribute("href").slice(1);
            const section = id !== "top" ? document.getElementById(id) : null;

            if (section) {
                observer.observe(section);
            }
        });
    }

    let ticking = false;
    window.addEventListener("scroll", () => {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                syncScrollUi();
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });

    syncScrollUi();
})();

function sendEmail(event) {
    event.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const course = document.getElementById("course").value;
    const car = document.getElementById("car").value;
    const message = document.getElementById("message").value.trim();

    if (!name || !email || !course || !car || !message) {
        alert("Please fill out all fields before sending the email.");
        return;
    }

    const subject = encodeURIComponent("Driving Course Information Request");
    const body = encodeURIComponent(
        `Name: ${name}\nEmail: ${email}\nCourse Type: ${course}\nCar: ${car}\nMessage:\n${message}`
    );

    window.location.href = `mailto:admin@mobilan.com?subject=${subject}&body=${body}`;
}
