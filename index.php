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
<!-- SECCION DE ARTISTAS -->
<section class="artistas">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto my-5">
            <h2 class="text-uppercase mb-4 color-rose">Top 10 canciones mas escuchadas</h2>
            <div class="row">
                <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=genero&showposts=10"); ?>
                <?php while (have_posts()) : the_post(); ?> 
                <div class="col-md-1"></div>
                        <div class="col-md-2 zoom-effect">
                            <a href="<?php the_permalink() ?>">
                                <div class="card" >
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                <div class="col-md-1"></div>        
                <?php endwhile; ?>	
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- SECCION DE IMAGEN DESTACADA -->
<section class="artistas-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0 mx-auto my-5">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?> 
                    <?php 
                    $image = get_field('imagen_destacada');
                    if( !empty( $image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                <?php endwhile; ?>	
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>
<!-- SECCION DE Populares -->
<section class="populares">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto my-5">
            <h2 class="text-uppercase mb-4 color-blue">Más populares</h2>
            <div class="row">
                <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=genero&showposts=6&offset=5"); ?>
                <?php while (have_posts()) : the_post(); ?> 
                        <div class="col-md-2 zoom-effect">
                            <a href="<?php the_permalink() ?>">
                                <div class="card" >
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                    </div>
                                </div>
                            </a>
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
<!-- SECCION DE Artistas destacados -->
<section class="artistas-1">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto my-5">
            <h2 class="text-uppercase mb-4 color-rose">Artistas destacados</h2>
            <div class="row">
                <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=artista&showposts=10"); ?>
                <?php while (have_posts()) : the_post(); ?> 
                        <div class="col-md-2 zoom-effect">
                            <a href="<?php the_permalink() ?>">
                                <div class="card" >
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                    </div>
                                </div>
                            </a>
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