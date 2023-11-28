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


</script>

<?php get_footer(); ?>