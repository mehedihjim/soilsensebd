// Navbar scroll effect
window.addEventListener("scroll", () => {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 50) {
        navbar.classList.add(
            "bg-green-900/60",
            "backdrop-blur-sm",
            "shadow-lg"
        );
        navbar.classList.remove("bg-transparent");
    } else {
        navbar.classList.remove(
            "bg-green-900",
            "bg-opacity-80",
            "backdrop-blur-sm",
            "shadow-lg"
        );
        navbar.classList.add("bg-transparent");
    }
});

// Mobile menu toggle
const hamburger = document.getElementById("hamburger");
const mobileMenu = document.getElementById("mobile-menu");

if (hamburger) {
    hamburger.addEventListener("click", (e) => {
        e.stopPropagation();
        mobileMenu.classList.toggle("hidden");
        mobileMenu.classList.toggle("animate-slideDown");
    });
}

// Close mobile menu when clicking on a link
const mobileLinks = document.querySelectorAll("#mobile-menu a");
mobileLinks.forEach((link) => {
    link.addEventListener("click", () => {
        mobileMenu.classList.add("hidden");
        mobileMenu.classList.remove("animate-slideDown");
    });
});

// Close mobile menu when clicking outside
document.addEventListener("click", (e) => {
    if (
        !hamburger.contains(e.target) &&
        !mobileMenu.contains(e.target) &&
        !mobileMenu.classList.contains("hidden")
    ) {
        mobileMenu.classList.add("hidden");
        mobileMenu.classList.remove("animate-slideDown");
    }
});

// Close mobile menu on escape key
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !mobileMenu.classList.contains("hidden")) {
        mobileMenu.classList.add("hidden");
        mobileMenu.classList.remove("animate-slideDown");
    }
});
