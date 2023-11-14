<?php
/*
Template Name: Recomendaciones
*/
?>
<?php get_header(); ?>

<!-- SECCIONES DE RECOMENDACIONES------------------------------------------------------------ -->
<section class="bg-fondo-recomendaciones">
    <section>
        <div class="container-fluid" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                    <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=recomendaciones&showposts=3&paged=$paged "); ?>
                    <?php while (have_posts()) : the_post(); ?> 
                        <div class="col-md-3 d-flex align-items-center my-5">
                            <?php 
                            $image = get_field('imagen__1_slide_recomendaciones');
                            if( !empty( $image ) ): ?>
                                <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-md-8 d-flex my-5 flex-column">
                            <h2><?php the_field('titulo_recomendaciones');?></h2>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink() ?>" class="btn btn-outline-primary ">Ver más</a>
                        </div>
                    <?php endwhile; ?>	
                    <?php wp_pagenavi(); ?>
                    <?php else : ?>  
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    



    <!-- SECCION DE INVITACION A VER NUESTROS PRODUCTOS-------------------------------------------------- -->
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
                            <a href="productos" class="btn btn-outline-primary ">¡Conoce nuestros productos!</a>
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
    <!-- SCRIPT PROPIO -->
    <script>
        // Inizacion AOS
        AOS.init();
    // Script Swiper

    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    </script>


<?php get_footer(); ?>

