<?php
$post = $wp_query->post;
if ( in_category('artista') ) {
include(TEMPLATEPATH . '/single-productos.php'); } 
elseif ( in_category('genero') ) {
include(TEMPLATEPATH . '/single-recomendaciones.php'); }
else {
include(TEMPLATEPATH . '/single_default.php');
}
?>