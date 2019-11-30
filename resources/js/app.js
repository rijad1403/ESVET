// require('./bootstrap');

import "lightbox2";
import "bootstrap";

document.querySelector("#year").textContent = new Date().getFullYear();

document.querySelectorAll(".nav-link").forEach(navlink => {
    if (navlink.pathname == document.location.pathname) {
        navlink.classList.add("active-link");
    }
});

document.querySelectorAll(".overlay-content a").forEach(navlink => {
    if (navlink.pathname == document.location.pathname) {
        navlink.classList.add("active-full-menu-link");
    }
});

document.querySelector(".heroButton").addEventListener("click", () => {
    if (location.pathname == "/kontakt") {
        document.querySelector(".container").scrollIntoView();
        setTimeout(() => {
            document.querySelector('.form-control').focus();
        }, 500);

    } else {
        location.pathname = "/kontakt";
    }
});

document
    .querySelector(".menuButton")
    .addEventListener(
        "click",
        () => (document.getElementById("myNav").style.width = "100%")
    );

document
    .querySelector(".closebtn")
    .addEventListener(
        "click",
        () => (document.getElementById("myNav").style.width = "0%")
    );

document.querySelector(".sendEmail").addEventListener("click", () => {
    document.querySelectorAll(".form-control").forEach(input => {
        if (input.validity.valueMissing) {
            input.setCustomValidity("Polje ne smije biti prazno.");
        }
        else if (input.type == "email" && (input.validity.typeMismatch || input.validity.patternMismatch)) {
            input.setCustomValidity("Unešeni mail nije validan.");
        } else {
            input.setCustomValidity("");
        }
    });
});

document.querySelectorAll('.form-control').forEach(input => {
    input.addEventListener('keyup', () => {
        if (input.validity.valueMissing) {
            input.setCustomValidity("Polje ne smije biti prazno.");
            console.dir(input);
        }
        else if (input.type == "email" && (input.validity.typeMismatch || input.validity.patternMismatch)) {
            input.setCustomValidity("Unešeni mail nije validan.");
        } else {
            input.setCustomValidity("");
        }
        console.log(input.value);
    });
});
