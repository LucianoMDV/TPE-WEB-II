"use strict";
const cambiante = document.querySelector(".cambiante");

let categoria = document.querySelector(".categoria");
categoria.addEventListener("click", function(e) {
    e.preventDefault();
    const url = this.getAttribute("href");
    fetch(url)
    .then(response => response.text())
    .then(html => {
        cambiante.innerHTML = html;
        // alert("HOLA");
    });
    categoria.classList.add("active");
});