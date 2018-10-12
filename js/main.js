"use strict";
const cambiante = document.querySelector(".cambiante");

let inicio = document.querySelector(".inicio");
let categoria = document.querySelector(".categoria");
let producto = document.querySelector(".producto");
let logearse = document.querySelector(".logearse");

partialRender(inicio, "inicio");
partialRender(categoria, "categoria");
partialRender(producto, "producto");
partialRender(logearse, "logearse");

function partialRender(btn, seleccion) {
    btn.addEventListener("click", function(e) {
        e.preventDefault();
        const url = this.getAttribute("href");
        fetch(url+"?partial=true")
        .then(response => response.text())
        .then(html => {
            cambiante.innerHTML = html;
        });
        history.pushState({},"Detalle", url); //con esta linea se mantiene la URL como corresponden y no se cuelgan con inicio siempre
        switch (seleccion) {
            case "categoria":
                inicio.classList.remove("active");
                categoria.classList.add("active");
                producto.classList.remove("active");       
                logearse.classList.remove("active");       
                break;
            case "producto":
                inicio.classList.remove("active");
                categoria.classList.remove("active");
                producto.classList.add("active");
                logearse.classList.remove("active");
                break;
            case "inicio":
                inicio.classList.add("active");
                categoria.classList.remove("active");
                producto.classList.remove("active");
                logearse.classList.remove("active");
            break;
            case "logearse":
                inicio.classList.remove("active");
                categoria.classList.remove("active");
                producto.classList.remove("active");
                logearse.classList.add("active");
            break;
        }
    });
}