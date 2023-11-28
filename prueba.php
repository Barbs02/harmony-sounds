<?php
/*
Template Name: Prueba
*/
?>

<?php get_header(); ?>

<script>
fetch("https://basubero.laboratoriodiseno2.cl/barb_playlist/wp-json	/wp/v2/posts")
.then(response => response.ok ? response.json() :Promise.reject(response))
.then(data => {
    console.log(data);
})

fetch("https://basubero.laboratoriodiseno2.cl/barb_playlist/wp-json")
.then(response => response.ok ? response.json() :Promise.reject(response))
.then(data => {
    cards(data);
    console.log(data);
})

let tarjetas = document.getElementById('card'); // Seleccionar el contenedor

function cards(data) {
    data.forEach(posts => {

        const tarjeta = document.createElement('div')
        tarjeta.classList.add('col-md-3', 'canciondatos');

        let imagenCarta = document.createElement('img');
        imagenCarta.classList.add('img-fluid','mb-5','w-100','mt-5')
        imagenCarta.src = posts.acf.imagen_tarjeta.url;

        const tituloCarta = document.createElement('h5');
        tituloCarta.classList.add('titulodelacarta','mb-5','text-white')
        tituloCarta.innerHTML = posts.acf.nombre_tarjeta;

        const artistaCarta = document.createElement('p');
        artistaCarta.classList.add('mb-5','text-white')
        artistaCarta.innerHTML = posts.acf.descripcion_tarjeta;

        const mp3 = document.createElement('audio');
        mp3.classList.add('col-md-8')
        mp3.controls = true;
        mp3.src = posts.acf.cancion.url;

        tarjeta.appendChild(imagenCarta);
        tarjeta.appendChild(tituloCarta);
        tarjeta.appendChild(artistaCarta);
        tarjeta.appendChild(mp3);

        tarjetas.appendChild(tarjeta); // Agregar la tarjeta al contenedor
    })
}


</script>

<?php get_footer(); ?>