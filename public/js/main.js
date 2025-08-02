new Typewriter("#typewriter", {
    strings: ["Unlock Success in the Print Industry"],
    autoStart: true,
    loop: true,
    delay: 75,
});

/*   var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  });
 */

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        "@0.75": {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        "@1.00": {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        "@1.50": {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
});

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
        if (document.getElementById("countdown")) {
            document.getElementById("countdown").innerHTML = "Countdown Expired";
        }
        return;
    }

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    var daysElement = document.querySelector("#days");
    var hoursElement = document.querySelector("#hours");
    var minutesElement = document.querySelector("#minutes");
    var secondsElement = document.querySelector("#seconds");

    if (daysElement) {
        daysElement.innerHTML = days;
        daysElement.className = " font-bold text-2xl md:text-8xl text-white";
    }
    if (hoursElement) {
        hoursElement.innerHTML = hours;
        hoursElement.className = " font-bold text-2xl md:text-8xl text-white";
    }
    if (minutesElement) {
        minutesElement.innerHTML = minutes;
        minutesElement.className = " font-bold text-2xl md:text-8xl text-white";
    }
    if (secondsElement) {
        secondsElement.innerHTML = seconds;
        secondsElement.className = "  font-boldtext-2xl md:text-8xl text-white";
    }
}

// Wait for DOM to be ready
document.addEventListener('DOMContentLoaded', function() {
    // Check if we're on a page with countdown elements
    if (document.querySelector("#days") && document.querySelector("#hours") && document.querySelector("#minutes") && document.querySelector("#seconds")) {
        updateCountdown();
        setInterval(updateCountdown, 1000);
    }
});





