

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


// November 11, 2025, 09:00:00
var targetDate = new Date(2025, 10, 11, 9, 0, 0).getTime();

function updateCountdown() {
    var now = new Date().getTime();
    var distance = targetDate - now;

    if (distance <= 0) {
        clearInterval(countdownInterval);
        document.getElementById("countdown").innerHTML = "Countdown Expired";
    } else {
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.querySelector("#days").innerHTML = days;
        document.querySelector("#hours").innerHTML = hours;
        document.querySelector("#minutes").innerHTML = minutes;
        document.querySelector("#seconds").innerHTML = seconds;
    }
}

updateCountdown();
var countdownInterval = setInterval(updateCountdown, 1000);


