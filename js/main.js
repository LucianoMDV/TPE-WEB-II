"use strict";

// let tabla = document.querySelectorAll('.tablaNombre');
// tabla.forEach( e => {
//     console.log(e.innerHTML);
// });

let arrmodificar = document.querySelectorAll('#modificar');
arrmodificar.forEach(unBoton => {
    unBoton.addEventListener('click', e => {
        e.preventDefault();

        let tabla = document.querySelectorAll('.tablaNombre');
        tabla.forEach( e => {
            console.log(e.innerHTML);
        });

        let nombre = document.querySelector("input[name='lista_tabla_nombre']");
        let precio = document.querySelector("input[name='lista_tabla_precio']");
        let descripcion = document.querySelector("input[name='lista_tabla_descripcion']");

        console.log(nombre);
        console.log(precio);
        console.log(descripcion);

        // nombre.value = ;
        // precio.value = ;
    }) 
});