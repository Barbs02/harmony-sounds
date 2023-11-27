<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>

<!-- HEADER -->
<header>
    <?php if (have_posts()) : ?>
        <?php query_posts("category_name=inicio"); ?>
    <?php while (have_posts()) : the_post(); ?> 
    <!-- Swiper -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
            <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <?php 
                    $image = get_field('slide_img_1');
                    if( !empty( $image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="swiper-slide">
                    <?php 
                    $image = get_field('slide_img_2');
                    if( !empty( $image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="swiper-slide">
                    <?php 
                    $image = get_field('slide_img_3');
                    if( !empty( $image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</header>
<!-- SECCION DE PRODUCTOS -->
<section class="s-productos">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto my-5">
            <h2 class="text-uppercase text-center mb-4">Conoce nuestros productos</h2>
            <div class="row">
            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=productos-inicio&showposts=3"); ?>
            <?php while (have_posts()) : the_post(); ?> 

                    <div class="col-md-4 position-relative zoom-effect">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                        <div class="titulo position-absolute text-center">
                            <h2><?php the_title(); ?></h2>
                            <a href="http://localhost/arivaci-y-cia/productos/">Ver más</a>
                        </div>
                    </div>
            <?php endwhile; ?>	
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- SECCION DE INVITACION A RECOMENDACIONES  -->
<section class="s-recomendaciones">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11 mx-auto my-5">
                <div class="row">
                    <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=recomendaciones-inicio-2"); ?>
                    <?php while (have_posts()) : the_post(); ?> 
                        <div class="col-md-6 d-flex align-items-center flex-wrap" data-aos="fade-up" data-aos-duration="3000">
                            <h3 class="align-self-end mb-4"><?php the_title(); ?></h3>
                            <p class="align-self-start"><?php the_field('recomendaciones_parrafo_');?></p>
                            <a href="recomendaciones" class="btn btn-primary align-self-start ">Ver más </a>
                        </div>
                        <div class="col-md-6" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                        </div>
                    <?php endwhile; ?>	
                    <?php else : ?>  
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECCION DE INVITACION A COTIZAR -->
<section class="s-cotizar my-5">
    <div class="container">
        <div class="row">
            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=invitacion-cotizar"); ?>
            <?php while (have_posts()) : the_post(); ?> 
            <?php the_post_thumbnail('full', array('class' => 'img-fluid position-relative img-foto')); ?>
            <div class="col-md-10  mx-auto bg-dark opacity-75 py-5 position-absolute bg-position"  data-aos="fade-up" data-aos-duration="3000">
                <div class="row">
                    <div class="col-md-6">
                        <h4><?php the_title(); ?></h4>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <a href="contacto" class="btn btn-outline-primary ">Cotizar</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>	
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>


<!-- SCRIPTS -->
    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <!-- SCRIPT JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- SCRIPT SWIPER -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- SCRIPT AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Aparecer primera alerta----------------------------------------------------------

function alerta(){
    let alert = document.getElementById('alerta');
    alert.style.display= 'block';
} 

//Script de swiper----------------------------------------------------------------
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
    delay: 2500,
    disableOnInteraction: false,
    },
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
    },
    navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    },
});

// Script de AOS

AOS.init();

</script>
<?php get_footer(); ?>