<?php get_header(); ?>

<?php 
$image = get_field('slide_imagen_1_productos');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

<section class="single-productos">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mx-auto my-5">
            <div class="row">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?> 
                <div class="col-md-6 slide ">
        </div>
                </div>    
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="my-3"><?php the_title(); ?></h2> <!-- TITULO------ -->
                            <div class="separador"></div>
                            <h3><?php the_field('precio_producto'); ?></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-5">
                        <h5>Descripcion: </h5>  <!-- DESCRIPCION+++++ -->
                        <p><?php the_field('descripcion_producto_'); ?></p>
                        <a href="contacto" class="btn btn-outline-primary ">Cotizar</a>
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
<!-- SECCION RELEVANTES ---------------------- -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-10 mx-auto ">
        <h2 class="mb-4">Estos productos tambien te pueden interesar</h2>
            <div class="row">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=productos&showposts=4&offset=2 "); ?>
            <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-3">
                        <div class="imagen">
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                        </div>

                        <p class="my-3"><?php the_title(); ?></p>
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
</section>
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
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
        </script>
<?php get_footer(); ?>
