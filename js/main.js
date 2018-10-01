"use strict";

let inicio = document.querySelector(".inicio");
inicio.addEventListener("click", function(e) {
    // e.preventDefault();
    inicio.classList.toggle("active");
});