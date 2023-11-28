<?php
/*
Template Name: Prueba
*/
?>

<?php get_header(); ?>

<script>
fetch("https://basubero.laboratoriodiseno2.cl/barb_playlist/wp-json")
.then(response => response.json():Promise.reject(response))
.then(data => {
    console.log(data);
})


</script>

<?php get_footer(); ?>