<?php
$post = $wp_query->post;
if ( in_category('productos') ) {
include(TEMPLATEPATH . '/single-productos.php'); } 
elseif ( in_category('recomendaciones') ) {
include(TEMPLATEPATH . '/single-recomendaciones.php'); }
else {
include(TEMPLATEPATH . '/single_default.php');
}
?>