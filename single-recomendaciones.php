<?php get_header(); ?>


<!-- SECCIONES DE RECOMENDACIONES------------------------------------------------------------ -->
<section class="bg-fondo-recomendaciones">
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?> 
                    <div class="col-md-6 my-5">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <?php 
                                        $image = get_field('imagen__1_slide_recomendaciones');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?php 
                                        $image = get_field('imagen__2_slide_recomendaciones');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?php 
                                        $image = get_field('imagen__3_slide_recomendaciones');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?php 
                                        $image = get_field('imagen__4_slide_recomendaciones');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center flex-wrap  my-5">
                            <h2><?php the_field('titulo_recomendaciones');?></h2>
                            <p class="align-self-start"><?php the_content(); ?></p>
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
    <!-- SECCION RELEVANTES ---------------------- -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-10 mx-auto ">
        <h2 class="mb-4">Estas recomendaciones tambien te pueden interesar</h2>
            <div class="row">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=recomendaciones&showposts=4 "); ?>
            <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-3">
                        <div class="imagen">
                            <?php 
                            $image = get_field('imagen__1_slide_recomendaciones');
                            if( !empty( $image ) ): ?>
                                <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>

                        <p class="my-3"><?php the_field('titulo_recomendaciones');?></p>
                        <a class="btn btn-outline-primary my-3" href="<?php the_permalink() ?>">Saber +</a>
                    </div>
            <?php endwhile; ?>	
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>

    <?php get_footer(); ?>
    <!-- SCRIPTS -->
    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <!-- SCRIPT JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- SCRIPT SWIPER -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- SCRIPT PROPIO -->
    <script>
    // Script Swiper

    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    </script>
