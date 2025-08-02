

$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        // Adjust the scroll value as needed
        $(".navbar").addClass("scrolled");
        $(".social-bottom").addClass("scrolled");
    } else {
        $(".navbar").removeClass("scrolled");
        $(".social-bottom").removeClass("scrolled");
    }
});

const navbarToggle = document.getElementById("navbarToggle");
const navMenu = document.getElementById("navMenu");
const toggleIcon = document.getElementById("toggleIcon");
const toggleIconall = document.querySelectorAll(".toggleIconall");

toggleIconall.forEach((element) => {
    element.addEventListener("click", () => {
        console.log("worked");
        navMenu.classList.remove("active");
        toggleIcon.classList.add("fa-bars");
        toggleIcon.classList.remove("fa-times");
    });
});

navbarToggle.addEventListener("click", () => {
    if (navMenu.classList.contains("active")) {
        console.log("working");
        navMenu.classList.remove("active");
        toggleIcon.classList.add("fa-bars");
        toggleIcon.classList.remove("fa-times");
    } else {
        console.log("working");
        navMenu.classList.add("active");
        toggleIcon.classList.remove("fa-bars");
        toggleIcon.classList.add("fa-times");
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".about");

    for (const link of links) {
        link.addEventListener("click", clickHandler);
    }

    function clickHandler(e) {
        e.preventDefault();
        const href = this.getAttribute("href");
        const offsetTop = document.querySelector(href).offsetTop;

        scroll({
            top: offsetTop,
            behavior: "smooth",
        });
    }
});



