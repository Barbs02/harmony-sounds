<?php
$post = $wp_query->post;
if ( in_category('artista') ) {
include(TEMPLATEPATH . '/single-artista.php'); } 
elseif ( in_category('genero') ) {
include(TEMPLATEPATH . '/single-genero.php'); }
else {
include(TEMPLATEPATH . '/single_default.php');
}
?>